<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Joan Queralt
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'S\'ha desat correctament l\'Europass currículum vitae';
$string['europassexportgenerated'] = 'Espereu mentre es genera l\'exportació...';

$string['languagesaved'] = 'S\'ha desat correctament l\'idioma';
$string['languagesavefailed'] = 'No s\'ha pogut desar l\'idioma';
$string['languagedeleteconfirm'] = 'Esteu segur que voleu esborrar aquest idioma?';
$string['languagedeleted'] = 'S\'ha eliminat correctament l\'idioma';
$string['languagediploma'] = 'Diploma d\'idioma';
$string['languageexperience'] = 'Experiència lingüística';
$string['languagediplomadeleteconfirm'] = 'Esteu segur que voleu esborrar aquest Diploma d\'idioma?';
$string['languageexperiencedeleteconfirm'] = 'Esteu segur que voleu esborrar aquesta Experiència lingüística?';
$string['languagediplomadeleted'] = 'S\'ha esborrat correctament el Diploma d\'idioma';
$string['languageexperiencedeleted'] = 'S\'ha esborrat correctament l\'Experiència lingüística';
$string['languagediplomasaved'] = 'S\'ha desat correctament el Diploma d\'idioma';
$string['languagediplomasavefailed'] = 'No s\'ha pogut desar el Diploma d\'idioma';
$string['languageexperiencesaved'] = 'S\'ha desat correctament l\'Experiència lingüística';
$string['languageexperiencesavefailed'] = 'No s\'ha pogut desar l\'Experiència lingüística';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exporta Europass';
$string['exportstep1'] = '1 - Seleccioneu document';
$string['attach'] = 'Adjuncions';
$string['selectlocale'] = 'Idioma';
$string['exportstep2'] = '2 - Format del document';
$string['selectdateformatdesc'] = 'Format de data usat a l\'exportació';
$string['selectdateformatdesc2'] = 'Les dates es configuren segons l\'idioma seleccionat.';
$string['dateformat-numeric-medium'] = '31/1/2005';
$string['dateformat-numeric-long'] = '31/01/2005';
$string['dateformat-text-short'] = '31 Gen 2005';
$string['dateformat-text-long'] = '31 Gener 2005';
$string['exportfile'] = 'Fitxer';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Exporta';
$string['generateexport'] = 'Exporta';
$string['generateexportdesc'] = 'Genereu el document Europass i descarregueu-lo al vostre ordinador.';
$string['generaloptions'] = 'Opcions generals d\'exportació';
$string['includelogo'] = 'Voleu incloure el logo Europass?';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importa Europass';
$string['importstep1'] = '1 - Importa fitxer i opcions';
$string['selectfile&options'] = 'Carregueu el fitxer XML Europass i seleccioneu les opcions d\'importació';
$string['importstep2'] = '2 - Importa';
$string['execute'] = 'Executa la importació';
$string['executeimport'] = 'Importa';
$string['importfile'] = 'Fitxer XML Europass';
$string['importfiledesc'] = 'Seleccioneu el fitxer XML Europass vàlid per importar a Mahara';
$string['notvalidxmlfile'] = 'El fitxer que heu carregat no és un fitxer XML vàlid.';
$string['importoptions'] = 'Què voleu importar?';
$string['importoptionsdesc'] = 'Els camps tancats del perfil no s\'actualitzaran ni canviaran';
$string['nocheckedoptions'] = 'Com a mínim heu de marcar una opció d\'importació.';
$string['fieldnotimported'] = 'No s\'ha importat el camp "%s" .';
$string['lockedfieldnotimported'] = 'No s\'ha importat el camp tancat "%s".';
$string['languagecodemissing'] = 'No s\'ha importat el camp "%s". S\'ha perdut el codi d\'idioma.';
$string['importdate'] = 'Importeu dates en format';
$string['europassimportexecuted'] = 'S\'han importat satisfactòriament a Mahara les dades d\'Europass XML.';

// Europass ESP
$string['skillsfolder'] = 'Passaport de competències';
$string['skillsfolderdesc'] = 'Fitxers al document Europass de competències';
$string['skillsfolderupload'] = 'Carrega fitxer';
$string['skillsfolderuploadnotice'] = 'Creeu el Passaport de competències per compartir documents com ara el Passaport de llengües, el Certificat suplementari, còpies de títols o certificats, certificats d\'ocupació, etc.';
$string['skillsfolderuploadmaxsize'] = '(Mida màxima de càrrega: 2.5 MB. Els documents carregats al Passaport de competències han de ser en format PNG, JPEG o PDF.)';
$string['filenotaccepted'] = 'El document carregat ha de ser en format PNG, JPEG o PDF.';
$string['fileuploadcomplete'] = 'S\'ha completat la càrrega del document.';
$string['deletefile'] = 'Esborra el document';
$string['deletefileconfirm'] = 'Esteu segur que voleu esborrar aquest document?';
$string['filechangedsuccessfully'] = 'S\'ha canviat satisfactòriament el document.';
$string['filedeletedsuccessfully'] = 'S\'ha esborrat satisfactòriament el document.';
$string['editfile'] = 'Edita el document';
$string['profilepicinclude'] = 'Voleu incloure la imatge del perfil?';

// Included strings for labels, countries, languages and nationalities
// ===================================================================

// Europass GUI form tabs
$string['ecv-tab'] = 'Currículum vitae';
$string['esp-tab'] = 'Passaport de competències';
$string['elp-tab'] = 'Passaport de llengües';
$string['copyright'] = '© Unió Europea i Consell d\'Europa, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Informació personal';
$string['identification-birthdate'] = 'Data de naixement';
$string['identification-birthplace'] = 'Lloc de naixement';
$string['identification-lastname'] = 'Cognom(s)';
$string['identification-firstname'] = 'Nom(s)';
$string['identification-addressLine'] = 'Adreça';
$string['identification-municipality'] = 'Població';
$string['identification-postalCode'] = 'Codi postal';
$string['identification-country'] = 'País';
$string['identification-contactinfo-telephone'] = 'Telèfon(s)';
$string['identification-contactinfo-mobile'] = 'Mòbil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'Correu(s) electrònic(s)';
$string['identification-nationality'] = 'Nacionalitat';
$string['identification-gender'] = 'Gènere';

// Europass CV - STEP 3
$string['workexperience'] = 'Experiència laboral';

// Europass CV - STEP 4
$string['education'] = 'Historial acadèmic';

// Europass CV - STEP 5
$string['mothertongue'] = 'Llengua materna';
$string['otherlanguage'] = 'Altres llengües';

$string['language-understanding'] = 'Comprendre';
$string['language-speaking'] = 'Parlar';
$string['language-writing'] = 'Expressió escrita';
$string['language-foreign-listening'] = 'Comprensió oral';
$string['language-foreign-reading'] = 'Comprensió escrita';
$string['language-foreign-spokeninteraction'] = 'Interacció oral';
$string['language-foreign-spokenproduction'] = 'Expressió oral';
$string['language-foreign-writing'] = 'Expressió escrita';
$string['language-foreign-CEF-level'] = 'Nivell de referència Common European Framework (CEF)';

$string['language-foreign-level.A1'] = 'Usuari bàsic (A1)';
$string['language-foreign-level.A2'] = 'Usuari bàsic (A2)';
$string['language-foreign-level.B1'] = 'Usuari independent (B1)';
$string['language-foreign-level.B2'] = 'Usuari independent (B2)';
$string['language-foreign-level.C1'] = 'Usuari competent (C1)';
$string['language-foreign-level.C2'] = 'Usuari competent (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Carnet de conduir';
$string['categories'] = 'Categories';

$string['skills'] = 'Habilitats i competències personals';
$string['socialskill'] = 'Habilitats i competències socials';
$string['organisationalskill'] = 'Habilitats i competències organitzatives';
$string['technicalskill'] = 'Habilitats i competències tècniques';
$string['otherskill'] = 'Altres habilitats i competències';
$string['additionalinfo'] = 'Informació addicional';
$string['category'] = 'Categoria';

$string['digitalcompetence'] = 'Competència digital';
$string['digitalcompetence-other'] = 'Altres competències informàtiques';
$string['digitalcompetence-information'] = 'Tractament de la informació';
$string['digitalcompetence-communication'] = 'Comunicació';
$string['digitalcompetence-contentcreation'] = 'Creació de contingut';
$string['digitalcompetence-safety'] = 'Seguretat';
$string['digitalcompetence-problemsolving'] = 'Resolució de problemes';
$string['digitalcompetence-DIGCOMP-level'] = 'Competència digital (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Usuari bàsic (A)';
$string['digitalcompetence-level.B'] = 'Usuari independent (B)';
$string['digitalcompetence-level.C'] = 'Usuari competent (C)';

$string['honors_awards'] = 'Premis i distincions';
$string['publications'] = 'Publicacions';
$string['presentations'] = 'Presentacions';
$string['citations'] = 'Citacions';
$string['projects'] = 'Projectes';
$string['memberships'] = 'Pertinença a grups/associacions';
$string['seminars'] = 'Seminaris';
$string['conferences'] = 'Conferències';
$string['references'] = 'Referències';
$string['courses'] = 'Cursos';
$string['certifications'] = 'Certificacions';

// Europass LP - STEP 2
$string['self-assessment'] = 'Autoavaluació de la capacitat lingüística';
$string['language-diplomas'] = 'Títols o certificats';
$string['diploma-title'] = 'Títol';
$string['diploma-awardingBody'] = 'Organització acreditadora';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Nivell';
$string['language-experiences'] = 'Experiència lingüística i intercultural';
$string['experiences-description'] = 'Descripció';
$string['experiences-period'] = 'Durada';
$string['experiences-period-from'] = 'De';
$string['experiences-period-to'] = 'Fins a';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'български (bg)';
$string['locale.cs_CZ'] = 'čeština (cs)';
$string['locale.da_DK'] = 'dansk (da)';
$string['locale.de_DE'] = 'Deutsch (de)';
$string['locale.et_EE'] = 'eesti keel (et)';
$string['locale.el_GR'] = 'ελληνικά (el)';
$string['locale.en_GB'] = 'English (en)';
$string['locale.es_ES'] = 'español (es)';
$string['locale.fi_FI'] = 'suomi (fi)';
$string['locale.fr_FR'] = 'français (fr)';
$string['locale.hr_HR'] = 'hrvatski (hr)';
$string['locale.hu_HU'] = 'Magyar (hu)';
$string['locale.is_IS'] = 'íslenska (is)';
$string['locale.it_IT'] = 'italiano (it)';
$string['locale.lt_LT'] = 'lietuvių kalba (lt)';
$string['locale.lv_LV'] = 'latviešu valoda (lv)';
$string['locale.mk_MK'] = 'македонски (mk)';
$string['locale.mt_MT'] = 'Malti (mt)';
$string['locale.nl_NL'] = 'Nederlands (nl)';
$string['locale.no_NO'] = 'Norsk (no)';
$string['locale.pl_PL'] = 'polski (pl)';
$string['locale.pt_PT'] = 'português (pt)';
$string['locale.ro_RO'] = 'română (ro)';
$string['locale.sk_SK'] = 'slovenčina (sk)';
$string['locale.sl_SI'] = 'slovenščina (sl)';
$string['locale.sv_SE'] = 'svenska (sv)';
$string['locale.tr_TR'] = 'türkçe (tr)';

include_once('artefact.europass.countries.php');
include_once('artefact.europass.languages.php');
include_once('artefact.europass.nationalities.php');
