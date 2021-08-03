<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();

function xmldb_artefact_europass_upgrade($oldversion=0) {
    
    $status = true;

    if ($oldversion < 2008012200) {
        if (is_mysql()) {
            $inttype = 'BIGINT(10)';
        }
        else {
            $inttype = 'INTEGER';
        }
        foreach (array(
            'artefact_europass_mothertongue',
            'artefact_europass_otherlanguage') as $table) {
            $records = get_records_array($table, '', '', 'experiencestartdate DESC', 'id,experiencestartdate,experienceenddate,certificatedate');
            // Sigh. table_column is screwed beyond belief. We let it do its 
            // work (in the case of start and stopdate at least because it does 
            // cast the columns OK), then fix its bugs
            execute_sql('ALTER TABLE {' . $table . '} ADD displayorder ' . $inttype);
            table_column($table, 'experiencestartdate', 'experiencestartdate', 'text', null, null, '', 'not null');
            table_column($table, 'experienceenddate', 'experienceenddate', 'text', null, null, '', '');
            table_column($table, 'certificatedate', 'certificatedate', 'text', null, null, '', '');

            // MySQL docs say:
            //  * BLOB and TEXT columns cannot have DEFAULT values.
            // It turns out they do - a default of ''. And dropping this results in:
            // mysql> ALTER TABLE "artefact_resume_employmenthistory" ALTER COLUMN startdate DROP DEFAULT;
            // ERROR 1101 (42000): BLOB/TEXT column 'startdate' can't have a default value
            //
            if (is_postgres()) {
                execute_sql('ALTER TABLE {' . $table . '} ALTER COLUMN experiencestartdate DROP DEFAULT');
                execute_sql('ALTER TABLE {' . $table . '} ALTER COLUMN experienceenddate DROP DEFAULT');
                execute_sql('ALTER TABLE {' . $table . '} ALTER COLUMN certificatedate DROP DEFAULT');
            }

            if (!empty($records)) {
                foreach ($records as $k => $r) {
                    set_field($table, 'displayorder', $k, 'id', $r->id);
                    set_field($table, 'experiencestartdate', 
                              format_date(strtotime($r->startdate), 'strftimedate', 'current', 'artefact.europass'),
                              'id', $r->id);
                    set_field($table, 'experienceenddate', 
                              format_date(strtotime($r->enddate), 'strftimedate', 'current', 'artefact.europass'),
                              'id', $r->id);
                    set_field($table, 'certificatedate', 
                              format_date(strtotime($r->enddate), 'strftimedate', 'current', 'artefact.europass'),
                              'id', $r->id);
                }
            }
            if (is_mysql()) {
                execute_sql('ALTER TABLE {' . $table .'} MODIFY displayorder ' . $inttype . ' NOT NULL');
                execute_sql('ALTER TABLE {' . $table .'} MODIFY experiencestartdate TEXT NOT NULL');
            }
            else {
                execute_sql('ALTER TABLE {' . $table . '} ALTER displayorder SET NOT NULL');
                execute_sql('ALTER TABLE {' . $table . '} ALTER COLUMN experiencestartdate SET NOT NULL');
            }
        }
    }

    if ($oldversion < 2012051000) {
        // Create 'artefact_europass_otherlanguage_diploma' table...
        $table = new XMLDBTable('artefact_europass_languagediploma');
        $table->addFieldInfo('id', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->addFieldInfo('artefact', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addFieldInfo('languageid', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addFieldInfo('certificate', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('awardingbody', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('certificatedate', XMLDB_TYPE_TEXT, null, null);
        $table->addFieldInfo('europeanlevel', XMLDB_TYPE_CHAR, 2);
        $table->addFieldInfo('displayorder', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addKeyInfo('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table->addKeyInfo('artefactfk', XMLDB_KEY_FOREIGN, array('artefact'), 'artefact', array('id'));
        $table->addKeyInfo('languagefk', XMLDB_KEY_FOREIGN, array('languageid'), 'artefact_europass_otherlanguage', array('id'));
        create_table($table);

        // Create 'artefact_europass_otherlanguage_experience' table...
        $table = new XMLDBTable('artefact_europass_languageexperience');
        $table->addFieldInfo('id', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->addFieldInfo('artefact', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addFieldInfo('languageid', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addFieldInfo('startdate', XMLDB_TYPE_TEXT, null, null);
        $table->addFieldInfo('enddate', XMLDB_TYPE_TEXT, null);
        $table->addFieldInfo('description', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('displayorder', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addKeyInfo('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table->addKeyInfo('artefactfk', XMLDB_KEY_FOREIGN, array('artefact'), 'artefact', array('id'));
        $table->addKeyInfo('languagefk', XMLDB_KEY_FOREIGN, array('languageid'), 'artefact_europass_otherlanguage', array('id'));
        create_table($table);

        // Install new artefact types (not previously installed!)
        ensure_record_exists('artefact_installed_type',
            array('name' => 'languagediploma', 'plugin' => 'europass'),
            array('name' => 'languagediploma', 'plugin' => 'europass')
        );
        ensure_record_exists('artefact_installed_type',
            array('name' => 'languageexperience', 'plugin' => 'europass'),
            array('name' => 'languageexperience', 'plugin' => 'europass')
        );

        // Write values from 'artefact_europass_otherlanguage' to 'artefact_europass_otherlanguage_diploma'...
        // Write values from 'artefact_europass_otherlanguage' to 'artefact_europass_otherlanguage_experience'...
        $sql = "SELECT * FROM {artefact_europass_otherlanguage} l";
        if ($records = get_records_sql_array($sql, array())) {
            foreach ($records as $r) {
                $owner = get_field('artefact', 'owner', 'id', $r->artefact);
                
                $artefact = get_field('artefact', 'id', 'artefacttype', 'languagediploma', 'owner', $owner);
                if (empty($r->certificate) && empty($r->awardingbody) && empty($r->certificatedate) && empty($r->europeanlevel)) {
                    // Do nothing...
                } else {
                    if ($artefact == false) {
                        $time = time();
                        $insert = new StdClass;
                        $insert->artefacttype = 'languagediploma';
                        $insert->owner        = $owner;
                        $insert->author       = $owner;
                        $insert->ctime        = db_format_timestamp($time);
                        $insert->mtime        = db_format_timestamp($time);
                        $insert->atime        = db_format_timestamp($time);
                        $insert->title        = get_string('languagediploma', 'artefact.europass');
                        $artefact = insert_record('artefact', $insert, false, true);
                    }
                    
                    $diploma = new StdClass;
                    $diploma->artefact        = $artefact;
                    $diploma->languageid      = $r->id;
                    $diploma->certificate     = $r->certificate;
                    $diploma->awardingbody    = $r->awardingbody;
                    $diploma->certificatedate = $r->certificatedate;
                    $diploma->europeanlevel   = $r->europeanlevel;
                    insert_record('artefact_europass_languagediploma', $diploma);
                }
                
                $artefact = get_field('artefact', 'id', 'artefacttype', 'languageexperience', 'owner', $owner);
                if (empty($r->experiencestartdate) && empty($r->experienceenddate) && empty($r->experiencedescription)) {
                    // Do nothing...
                } else {
                    if ($artefact == false) {
                        $time = time();
                        $insert = new StdClass;
                        $insert->artefacttype = 'languageexperience';
                        $insert->owner        = $owner;
                        $insert->author       = $owner;
                        $insert->ctime        = db_format_timestamp($time);
                        $insert->mtime        = db_format_timestamp($time);
                        $insert->atime        = db_format_timestamp($time);
                        $insert->title        = get_string('languageexperience', 'artefact.europass');
                        $artefact = insert_record('artefact', $insert, false, true);
                    }
                    
                    $experience = new StdClass;
                    $experience->artefact    = $artefact;
                    $experience->languageid  = $r->id;
                    $experience->startdate   = $r->experiencestartdate;
                    $experience->enddate     = $r->experienceenddate;
                    $experience->description = $r->experiencedescription;
                    insert_record('artefact_europass_languageexperience', $experience);
                }
            }
        }
        
        // Remove unused fields from 'artefact_europass_otherlanguage'...
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN certificate');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN awardingbody');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN certificatedate');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN europeanlevel');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN experiencestartdate');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN experienceenddate');
        execute_sql('ALTER TABLE {artefact_europass_otherlanguage} DROP COLUMN experiencedescription');
    }
    
    if ($oldversion < 2012042000) {
        // Somehow dates on previous upgrade got converted into Unix timestamp.
        // Convert them back, if the timestamp is greater than 86399 = 01 Jan 1970 23:59:59 GMT
        // Since the date related fields are of TEXT type, we evaluate them and leave out
        // from upgrade all records which contain date fields with values smaller than 86933!
        // e.g.:
        //        intval(31.12.2009) = 31
        //        intval(2009/08/23) = 2009
        //        intval(04.28.1999) = intval(04/28/1999) = 4
        //        etc.
        
        // 86933 is the number of seconds from 01 Jan 1970 (start of day == start of Unix Epoch)
        
        // Fix dates in artefact_europass_languagediploma table...
        $sql = "SELECT * FROM {artefact_europass_languagediploma} l";
        if ($records = get_records_sql_array($sql, array())) {
            foreach ($records as $r) {
                if (intval($r->certificatedate) > 86933) {
                    set_field('artefact_europass_languagediploma', 'certificatedate', 
                              format_date($r->certificatedate, 'strfdaymonthyearshort'),
                              'id', $r->id);
                }
            }
        }
        
        // Fix dates in artefact_europass_languageexperience table...
        $sql = "SELECT * FROM {artefact_europass_languageexperience} l";
        if ($records = get_records_sql_array($sql, array())) {
            foreach ($records as $r) {
                if (intval($r->startdate) > 86933) {
                    set_field('artefact_europass_languageexperience', 'startdate', 
                              format_date($r->startdate, 'strfdaymonthyearshort'),
                              'id', $r->id);
                }
                if (intval($r->enddate) > 86933) {
                    set_field('artefact_europass_languageexperience', 'enddate', 
                              format_date($r->enddate, 'strfdaymonthyearshort'),
                              'id', $r->id);
                }
            }
        }
    }
    
    if ($oldversion < 2017020107) {
        // Current date and time of this update
        $current = date('Y-m-d H:i:s');

        // Remove unused artefacts and artefact types (previously installed!)
        // First remove references from 'view_artefact' table...
        if ($ids = get_column('artefact', 'id', 'artefacttype', 'application')) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
        }
        if ($ids = get_column('artefact', 'id', 'artefacttype', 'artisticskill')) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
        }
        if ($ids = get_column('artefact', 'id', 'artefacttype', 'additionalinfo')) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
        }
        if ($ids = get_column('artefact', 'id', 'artefacttype', 'annexes')) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
        }

        // Then remove all artefacts from 'artefact' table...
        execute_sql("DELETE FROM {artefact} WHERE artefacttype = 'application'");
        execute_sql("DELETE FROM {artefact} WHERE artefacttype = 'artisticskill'");
        execute_sql("DELETE FROM {artefact} WHERE artefacttype = 'annexes'");
        execute_sql("DELETE FROM {artefact} WHERE artefacttype = 'additionalinfo'");

        // Lastly remove references from 'artefact_installed_type' table...
        execute_sql("DELETE FROM {artefact_installed_type} WHERE name = 'application'");
        execute_sql("DELETE FROM {artefact_installed_type} WHERE name = 'artisticskill'");
        execute_sql("DELETE FROM {artefact_installed_type} WHERE name = 'annexes'");

        // Create 'artefact_europass_digitalcompetence' table...
        $table = new XMLDBTable('artefact_europass_digitalcompetence');
        $table->addFieldInfo('id', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->addFieldInfo('artefact', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addFieldInfo('information', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('communication', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('contentcreation', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('safety', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('problemsolving', XMLDB_TYPE_TEXT, null, null, XMLDB_NOTNULL);
        $table->addFieldInfo('displayorder', XMLDB_TYPE_INTEGER, 10, null, XMLDB_NOTNULL);
        $table->addKeyInfo('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table->addKeyInfo('artefactfk', XMLDB_KEY_FOREIGN, array('artefact'), 'artefact', array('id'));
        create_table($table);

        // Install new artefact types (not previously installed!)
        ensure_record_exists('artefact_installed_type',
            array('name' => 'digitalcompetence', 'plugin' => 'europass'),
            array('name' => 'digitalcompetence', 'plugin' => 'europass')
        );

        // Convert 'computerskill' artefacts to 'digitalcompetence' artefacts
        $sql = 'SELECT * FROM {artefact} WHERE artefacttype = ?';
        $artefacts = get_records_sql_array($sql, array('computerskill'));
        foreach ($artefacts as $artefact) {
            $data = array(
                'artefacttype' => 'digitalcompetence',
                'title' => get_string('digitalcompetence', 'artefact.europass'),
            );
            update_record('artefact', $data, array('id' => $artefact->id));
        }
        execute_sql("DELETE FROM {artefact_installed_type} WHERE name = 'computerskill'");

        // Drop 'artefact_europass_mothertongue' table, since mother tongue(s)
        // are simple artefacts and do not need aditional table. Mother tongue
        // abbreviations will be stored as 'description' in 'artefact' table.
        $sql = "
            SELECT a.owner, a.author, mt.language AS lang
            FROM {artefact} a LEFT JOIN {artefact_europass_mothertongue} mt ON mt.artefact = a.id
            WHERE a.artefacttype = 'mothertongue'";
        $languages = get_records_sql_array($sql);
        foreach ($languages as $language) {
            $a = new ArtefactTypeMothertongue();
            $a->set('description', $language->lang);
            $a->set('owner', $language->owner);
            $a->set('author', $language->author);
            $a->commit();
        }
        $table = new XMLDBTable('artefact_europass_mothertongue');
        if (table_exists($table)) {
            drop_table($table);
        }

        // Delete orphan references from view_artefact
        execute_sql("DELETE va.*
                    FROM {artefact} a
                    JOIN {view_artefact} va ON va.artefact=a.id
                    WHERE a.artefacttype = ?
                    AND a.ctime < ?", array('mothertongue', $current));
        // Delete all old 'mothertongue' artefacts
        delete_records_select('artefact', 'artefacttype = ? AND ctime < ?', array('mothertongue', $current));


        // Rename table 'artefact_europass_languagediploma' to 'artefact_europass_certificate'.
        $table = new XMLDBTable('artefact_europass_languagediploma');
        rename_table($table, 'artefact_europass_certificate');


        // Get existing data about other languages, that meansthe following:
        // 'otherlanguage', 'languagediploma' and 'languageexperience' artefacts
        $sql = "
            SELECT l.*, a.author AS author, a.owner AS owner
            FROM {artefact_europass_otherlanguage} l LEFT JOIN {artefact} a ON l.artefact = a.id
            WHERE a.artefacttype = 'otherlanguage'";
        $languages = get_records_sql_array($sql);
        foreach ($languages as $language) {
            $langid = $language->id;
            $c = get_records_sql_array("SELECT * FROM {artefact_europass_certificate} WHERE languageid = $langid");
            $language->certificates = $c;
            $e = get_records_sql_array("SELECT * FROM {artefact_europass_languageexperience} WHERE languageid = $langid");
            $language->experiences = $e;
        }

        // Delete all 'languagediploma' artefacts and
        // empty table {artefact_europass_certificate}
        $ids = get_column('artefact_europass_certificate', 'artefact');
        execute_sql("DELETE FROM {artefact_europass_certificate}");
        if (!empty($ids)) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
            execute_sql("DELETE FROM {artefact} WHERE id IN (" . join(',', $ids) . ")");
        }

        // Delete all 'languageexperience' artefacts and
        // empty table {artefact_europass_languageexperience}
        $ids = get_column('artefact_europass_languageexperience', 'artefact');
        execute_sql("DELETE FROM {artefact_europass_languageexperience}");
        if (!empty($ids)) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
            execute_sql("DELETE FROM {artefact} WHERE id IN (" . join(',', $ids) . ")");
        }

        // Delete all 'otherlanguage' artefacts
        $ids = get_column('artefact', 'id', 'artefacttype', 'otherlanguage');
        execute_sql("DELETE FROM {artefact_europass_otherlanguage}");
        if (!empty($ids)) {
            execute_sql("DELETE FROM {view_artefact} WHERE artefact IN (" . join(',', $ids) . ")");
            execute_sql("DELETE FROM {artefact} WHERE id IN (" . join(',', $ids) . ")");
        }

        // Create new 'otherlanguage' artefacts
        foreach ($languages as $language) {
            $a = new ArtefactTypeOtherlanguage();
            $a->set('owner', $language->owner);
            $a->set('author', $language->author);
            $a->set('container', 1);
            $a->set('description', $language->language);
            $a->commit();
            // Add data to supporting table
            $lang = new StdClass();
            $lang->artefact = $a->get('id');
            $lang->language = $language->language;
            $lang->listening = $language->listening;
            $lang->reading = $language->reading;
            $lang->spokeninteraction = $language->spokeninteraction;
            $lang->spokenproduction = $language->spokenproduction;
            $lang->writing = $language->writing;
            $lang->displayorder = $language->displayorder;
            $langid = insert_record('artefact_europass_otherlanguage', $lang, 'id', true);

            // Create 'languagediploma' artefacts
            if (!empty($language->certificates)) {
                foreach ($language->certificates as $cert) {
                    $c = new ArtefactTypeLanguagediploma();
                    $c->set('owner', $language->owner);
                    $c->set('author', $language->author);
                    $c->set('parent', $a->get('id'));
                    $c->commit();
                    // Add data to supporting table
                    $data = new StdClass();
                    $data->artefact = $c->get('id');
                    $data->languageid = $langid; // will be removed later, bound with foreign key
                    $data->certificate = $cert->certificate;
                    $data->awardingbody = $cert->awardingbody;
                    $data->certificatedate = strtotime($cert->certificatedate);
                    $data->europeanlevel = $cert->europeanlevel;
                    $data->displayorder = $cert->displayorder;
                    insert_record('artefact_europass_certificate', $data);
                }
            }

            // Create 'languageexperience' artefacts
            if (!empty($language->experiences)) {
                foreach ($language->experiences as $exp) {
                    $e = new ArtefactTypeLanguageexperience();
                    $e->set('owner', $language->owner);
                    $e->set('author', $language->author);
                    $e->set('parent', $a->get('id'));
                    $e->commit();
                    // Add data to supporting table
                    $data = new StdClass();
                    $data->artefact = $e->get('id');
                    $data->languageid = $langid; // will be removed later, bound with foreign key
                    $data->startdate = strtotime($exp->startdate);
                    $data->enddate = strtotime($exp->enddate);
                    $data->description = $exp->description;
                    $data->displayorder = $exp->displayorder;
                    insert_record('artefact_europass_languageexperience', $data);
                }
            }
        }

        // Drop foreign key from 'artefact_europass_certificate' table, so it
        // can be compatible with 'otherlanguage' and 'digitalcompetence' artefacts.
        $table = new XMLDBTable('artefact_europass_certificate');
        $key = new XMLDBKey('languagefk');
        $key->setAttributes(XMLDB_KEY_FOREIGN, array('languageid'), 'artefact_europass_otherlanguage', array('id'));
        drop_key($table, $key);
        // Drop field 'languageid' since it is not used anymore.
        $field = new XMLDBField('languageid');
        drop_field($table, $field);

        // Drop foreign key from 'artefact_europass_languageexperience' table.
        $table = new XMLDBTable('artefact_europass_languageexperience');
        $key = new XMLDBKey('languagefk');
        $key->setAttributes(XMLDB_KEY_FOREIGN, array('languageid'), 'artefact_europass_otherlanguage', array('id'));
        drop_key($table, $key);
        // Drop field 'languageid' since it is not used anymore.
        $field = new XMLDBField('languageid');
        drop_field($table, $field);
        // Rename field 'description' to 'experience' to avoid field name clash
        // with the field 'description' in 'artefact' table.
        if (is_mysql()) {
            execute_sql('ALTER TABLE {artefact_europass_languageexperience} CHANGE description experience TEXT');
        }
        if (is_postgres()) {
            execute_sql('ALTER TABLE {artefact_europass_languageexperience} RENAME COLUMN description TO experience');
        }
    }

    return $status;
}
