<?php

defined('INTERNAL') || die();

$string['accessdeniednotvalidip'] = 'La teva IP "%s" no està a la llista d\'IP permeses i se us bloquejarà la comprovació del monitor.';
$string['allowedips'] = 'Adreces IP permeses';
$string['allowedipsdescription'] = 'Introduïeix adreces IP de confiança, una per línia, perquè el monitor respongui. Si es deixa en blanc, el monitor estarà restringit per $cfg->urlsecret si està configurat.';
$string['checkingcronprocesses'] = 'Comprovació dels processos cron';
$string['checkingcronprocessesfail'] = array(
    0 => 'CRÍTIC: Hi ha %s un procés cron d\'execució llarga per a %s: %s',
    1 => 'CRÍTIC: Hi ha %s processos cron d\'execució llarga per a %s: %s',
);
$string['checkingcronprocessessucceed'] = 'D\'acord: no hi ha processos cron d\'execució llarga per a %s.';
$string['checkingelasticsearchfailedrecords'] = 'CRÍTIC: hi ha registres fallits a la cua d\'Elasticsearch de més d\'1 hora.';
$string['checkingelasticsearcholdunprocesessedfail'] = array(
    0 => 'CRÍTIC: hi ha registres sense processar a la cua d\'Elasticsearch amb més de %s hora.',
    1 => 'CRÍTIC: hi ha registres sense processar a la cua d\'Elasticsearch amb més de %s hores.',
);
$string['checkingelasticsearchsucceed'] = 'D\'ACORD: no hi ha registres sense processar o amb errors a la cua d\'Elasticsearch.';
$string['checkingldapinstancesfail'] = array(
    0 => 'CRÍTIC: hi ha %s connexió LDAP no vàlida per a %s: %s',
    1 => 'CRÍTIC: hi ha %s connexions LDAP no vàlida per a %s: %s',
);
$string['checkingldapinstancessucceed'] = 'D\'acord: no hi ha connexions LDAP no vàlides per a %s.';
$string['checkingldapsuspendedusersfail'] = array(
    0 => 'CRÍTIC: hi ha %s instància LDAP per a %s que ha superat el llindar d\'advertència de comptes suspesos: %s',
    1 => 'CRÍTIC: hi ha %s instàncies LDAP per a %s que han superat el llindar d\'avís de comptes suspesos: %s',
);
$string['checkingldapsuspendedusersssucceed'] = 'D\'acord: no hi ha instàncies LDAP per a %s que hagin superat el llindar d\'advertència de comptes suspesos.';
$string['clistatuscritical'] = 'CRÍTIC';
$string['clistatusok'] = 'D\'ACORD';
$string['configmonitortype_searchhoursuntilolddescription'] = 'El nombre d\'hores que un registre de cerca pot romandre sense processar abans de cridar l\'atenció sobre ell.';
$string['configmonitortype_searchhoursuntiloldtitle'] = 'Hores quan la cua de cerca és antiga';
$string['configmonitortype_searchlegend'] = 'Configuració de cerca';
$string['croncheckhelp'] = 'Identifica quins processos cron s\'executen llargament:

croncheck.php [opcions] mahara_path

Opcions:
-h, --help Imprimeix aquesta ajuda

Exemple:
sudo -u www-data /usr/bin/php croncheck.php /var/www/mymaharaproject
';
$string['cronlockhours'] = 'Hores de bloqueig de Cron';
$string['cronlockhoursdescription'] = 'El nombre màxim d\'hores que ha d\'executar un procés cron.';
$string['datestarted'] = 'El temps va començar';
$string['details'] = 'Detalls';
$string['displaydatetimeformat'] = 'd/m/Y H:i:s';
$string['elasticsearch'] = 'Elasticsearch';
$string['elasticsearchcheckhelp'] = 'Comprova la cua de processament d\'Elasticsearch:

elasticsearchcheck.php [opcions] mahara_path

Opcions:
-h, --help Imprimeix aquesta ajuda

Exemple:
sudo -u www-data /usr/bin/php elasticsearchcheck.php /var/www/mymaharaproject
';
$string['exportresultscsv'] = 'Exporta els comptes en format CSV';
$string['failedqueuesize'] = 'Nombre de registres fallits durant més d\'1 hora';
$string['hourstoconsiderelasticsearchrecordold'] = 'Hores en què la cua d\'Elasticsearch és antiga';
$string['hourstoconsiderelasticsearchrecordolddescription'] = 'El nombre d\'hores que un registre de cerca pot romandre sense processar abans de cridar l\'atenció sobre ell.';
$string['institution'] = 'Institució';
$string['item'] = 'Element';
$string['ldapauthority'] = 'Nom de l\'autoritat LDAP';
$string['ldapcheckhelp'] = 'Identifica quines instàncies LDAP no funcionen:

ldaplookupcheck.php [opcions] mahara_path

Opcions:
-h, --help             Imprimeix aquesta ajuda

Exemple:
sudo -u www-data /usr/bin/php comprovaciódelacerca.php /var/www/mymaharaproject
';
$string['ldaplookup'] = 'Cerca LDAP';
$string['ldapstatus'] = 'Estat';
$string['ldapstatusfail'] = 'La comprovació LDAP ha fallat amb l\'error següent: %d';
$string['ldapstatusmessage'] = 'Detalls de l\'estat';
$string['ldapstatussuccess'] = 'La comprovació LDAP ha estat correcta.';
$string['ldapstatustabletitle'] = 'Estat LDAP';
$string['ldapsuspendedusers'] = 'Comptes suspesos de LDAP';
$string['ldapsuspendeduserscheckhelp'] = 'Comprova si hi ha grans volums de comptes LDAP que es suspenguin durant el procés de sincronització del compte LDAP

ldapsuspendeduserscheck.php [opcions] mahara_path

Opcions:
-h, --help Imprimeix aquesta ajuda

Exemple:
sudo -u www-data /usr/bin/php comprovaciousuarissuspesosIdap.php /var/www/mymaharaproject
';
$string['ldapsuspendeduserspercentage'] = 'Percentatge de comptes suspesos de LDAP';
$string['ldapsuspendeduserspercentagedescription'] = 'El percentatge màxim de comptes suspesos per la sincronització del compte LDAP des de la mitjanit abans de marcar-lo com a problema.';
$string['ldapsuspendeduserstabletitle'] = 'Percentatge de comptes LDAP suspesos per la sincronització del compte LDAP des de la mitjanit';
$string['longrunningprocesses'] = 'Processos de llarg recorregut';
$string['monitor'] = 'Monitor';
$string['monitoringchecks'] = 'Controls de seguiment';
$string['monitormodulenotactive'] = 'El connector del monitor no està actiu. Ves a la pàgina "Menú Administració" → "Extensions" → "Administració del connector" per instal·lar o activar el connector.';
$string['no'] = 'No';
$string['okmessagedisabled'] = 'Si està establert, no es mostrarà cap missatge d\'acord.';
$string['processes'] = 'Processos Cron';
$string['processname'] = 'Procés';
$string['queuehasolditems'] = array(
    0 => 'Elements no processats a la cua d\'Elasticsearch amb més de %s hora',
    1 => 'Elements no processats a la cua d\'Elasticsearch amb més de %s hores',
);
$string['queuestatus'] = 'Estat de la cua';
$string['searchcheckhelp'] = 'Comprova la cua de processament de cerca:

searchcheck.php [opcions] mahara_path

Opcions:
-h, --help             Imprimeix aquesta ajuda

Exemple:
sudo -u www-data /usr/bin/php comprovaciódelacerca.php /var/www/mymaharaproject
';
$string['status'] = 'Estat';
$string['statusfail'] = 'Ha fallat';
$string['statussuccess'] = 'D\'acord';
$string['unprocessedqueuesize'] = 'Nombre total de registres no processats';
$string['yes'] = 'Sí';
