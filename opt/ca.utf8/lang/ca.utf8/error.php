<?php

defined('INTERNAL') || die();

$string['accessdenied'] = 'Accés denegat';
$string['accessdeniedexception'] = 'No teniu accés a veure aquesta pàgina';
$string['accessdeniedobjection'] = 'Accés denegat. L\'objecció ja ha estat resolta per un altre administrador.';
$string['apcstatoff'] = 'Sembla que el servidor està fent córrer APC amb apc.stat=0. Mahara no pot funcionar amb aquesta configuració. Heu de configurar apc.stat=1 al fitxer php.ini.

Si esteu en un hosting compartit és difícil que pugueu activar apc.stat a no ser que contacteu amb l\'administrador del lloc. Potser caldrà que considereu canviar-vos de lloc.';
$string['artefactnotfound'] = 'No s\'ha trobat l\'artefacte amb id %s';
$string['artefactnotfoundmaybedeleted'] = 'No s\'ha trobat l\'artefacte amb id %s, potser ha estat esborrat prèviament';
$string['artefactnotinview'] = 'L\'artefacte %s no és a la Vista %s';
$string['artefactonlyviewableinview'] = 'Els artefactes d\'aquest tipus només es poden veure dins una Vista';
$string['artefactpluginmethodmissing'] = 'El connector d\'artefactes %s ha d\'implementar %s però no ho fa';
$string['artefactsnotfound'] = 'No s\'ha trobat cap artefacte amb aquest ID: %s';
$string['artefacttypeclassmissing'] = 'Tots els tipus d\'artefacte implementen una classe. No s\'ha trobat %s';
$string['artefacttypemismatch'] = 'El tipus d\'artefacte no s\\\'ajusta, esteu provant d\\\'usar aquest %s com a %s';
$string['artefacttypenametaken'] = 'El tipus d\'artefacte %s l\'utilitza un altre connector (%s)';
$string['blockconfigdatacalledfromset'] = 'No s\'ha de configurar directament Configdata, en el seu lloc utilitzeu PluginBlocktype::instance_config_save';
$string['blockinstancenotfound'] = 'No s\'ha trobat la instància de bloc id %s';
$string['blocktypelibmissing'] = 'No s\'ha trobat lib.php pel bloc %s al connector d\'artefactes %s';
$string['blocktypemissingconfigform'] = 'El tipus de bloc %s ha d\'implementar al instància instance_config_form';
$string['blocktypenametaken'] = 'El tipus de bloc %s l\'utilitza un altre connector (%s)';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'S\'instal·larà com a part de la instal·lació del connector d\'artefactes %s';
$string['classmissing'] = 'No s\'ha trobat la classe %s del tipus %s al connector %s';
$string['couldnotmakedatadirectories'] = 'Per alguna raó no s\'han pogut crear alguns directoris del nucli de dades. Això no hauria de passar perquè prèviament Mahara ha detectat que podia escriure al directori de dades. Comproveu els permisos del directori de dades.';
$string['curllibrarynotinstalled'] = 'La configuració del servidor no inclou l\'extensió curl. Mahara a necessita per integrar-se amb Moodle i per accedir a alimentacions RSS remotes. Assegureu-vos que curl és al fitxer php.ini, o instal·leu-la si calgués.';
$string['datarootinsidedocroot'] = 'Heu configurat el directori de dades dins del directori arrel de documents. Això és un greu problema de seguretat perquè qualsevol pot demanar dades de la sessió d\'altres usuaris o veure fitxers sobre els que no té permís. Configureu el directori de dades per a què estigui fora del directori arrel de documents.';
$string['datarootnotwritable'] = 'No es pot escriure al directori de dades, %s. Això vol dir que ni les dades de la sessió, ni els fitxers d\'usuari ni res que hagi de ser carregat es podrà desar al servidor. Heu de crear el directori si no existís o, si existeix, canvieu-ne els permisos.';
$string['dbconnfailed'] = 'Mahara no es pot connectar a la base de dades.

 * Si esteu usant Mahara, espereu un minut i torneu-ho a provar.
 * Si sou l\'administrador comproveu la configuració de la BD i assegureu-vos que s\'hi pot accedir.

l\'error rebut és:
';
$string['dbnotutf8'] = 'No esteu usant una base de dades UTF-8. Mahara guarda internament totes les dades com UTF-8. Cal que recreeu la vostra base de dades usant la codificació UTF-8.';
$string['dbversioncheckfailed'] = 'La vostra versió de la base de dades no és prou nova per fer córrer Mahara. El servidor és %s %s, però Mahara requereix com a mínim la versió %s.';
$string['domextensionnotloaded'] = 'La configuració del vostre servidor no inclou l\'extensió DOM. Mahara la requereix amb la finalitat d\'analitzar les dades XML d\'una gran  varietat de fonts.';
$string['gdextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió gd. Mahara la necessita per realitzar operacions amb les imatges carregades. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['gdfreetypenotloaded'] = 'La configuració de l\'extensió gd del vostre servidor no té suport per a  FreeType. Assegureu-vos que la configuració de l\'extensió gd l\'inclogui..';
$string['gdlibrarylacksgifsupport'] = 'La biblioteca PHP GD instal·lada no suporta la creació i lectura d\'imatges en format GIF. Cal un suport complet per poder carregar imatges GIF.';
$string['gdlibrarylacksjpegsupport'] = 'La biblioteca PHP GD que teniu instal·lada no té suport per les imatges JPEG/JPG. Cal un suport complet per poder carregar imatges JPEG/JPG';
$string['gdlibrarylackspngsupport'] = 'La biblioteca PHP GD que teniu instal·lada no té suport per les imatges PNG. Cal un suport complet per poder carregar imatges PNG';
$string['interactioninstancenotfound'] = 'No s\'ha trobat la instància d\'activitat amb id %s';
$string['invaliddirection'] = 'Direcció no vàlida %s';
$string['invalidlayoutselection'] = 'Heu intentat seleccionar una disposició que no existeix.';
$string['invalidviewaction'] = 'Acció de control de vista no vàlida: %s';
$string['jsonextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió JSON. Mahara la necessita per enviar algunes dades al i des del navegador. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['magicquotesgpc'] = 'Teniu una configuració de PHP de risc: magic_quotes_gpc està activat. Mahara prova d\'ignorar-ho, però ho heu de solucionar.';
$string['magicquotesruntime'] = 'Teniu una configuració de PHP de risc: magic_quotes_runtime està activat. Mahara prova d\'ignorar-ho, però ho heu de solucionar.';
$string['magicquotessybase'] = 'Teniu una configuració de PHP de risc:, magic_quotes_sybase is on. Mahara prova d\'ignorar-ho, però ho heu de solucionar.';
$string['missingparamblocktype'] = 'Proveu primer a seleccionar el tipus de bloc per afegir';
$string['missingparamid'] = 'No s\'ha trobat id';
$string['missingparamorder'] = 'No s\'ha trobat l\'ordre d\'especificació';
$string['mysqldbextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió mysql. Mahara la necessita per emmagatzemar dades en una base de dades relacional. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['mysqlnotriggerprivilege'] = 'Mahara necessita el permís per crear els "triggers" de la  base de dades però no els té. Assegureu-vos que a la vostra instal·lació MySQL s\'han garantit els privilegis de "trigger" per l\'usuari. Podeu trobar més aclariments sobre això a https://wiki.mahara.org/index.php/System_Administrator\'s_Guide/Granting_Trigger_Privilege';
$string['nopasswordsaltset'] = 'No s\'ha configurat una contrasenya salada per tot el lloc. Editeu el fitxer config.php i configureu el paràmetre "passwordsaltmain" amb una frase secreta raonable.';
$string['noreplyaddressmissingorinvalid'] = 'La configuració de l\'adreça "noreply" o bé està buida o conté una adreça de correu no vàlida. comproveu la configuració a <a href="%s">configuració del correu de les opcions del lloc</a>.';
$string['notartefactowner'] = 'Aquest artefacte no us pertany';
$string['notenoughsessionentropy'] = 'La vostra configuració de PHP session.entropy_length és massa petita. Configureu-la, com a mínim a 16 al vostre php.ini per assegurar que els IDs de sessió generats són prou aleatoris i impredictibles.';
$string['notfound'] = 'No s\'ha trobat';
$string['notfoundexception'] = 'No s\'ha trobat la pàgina que buscàveu';
$string['notproductionsite'] = 'Aquest lloc no està en mode de producció. Algunes dades no deuen ser accessibles i/o no estan actualitzades.';
$string['onlyoneblocktypeperview'] = 'Només es pot posar un tipus de bloc %s en una vista.';
$string['onlyoneprofileviewallowed'] = 'Només teniu permisos per fer una Vista del perfil';
$string['openbasedirenabled'] = 'El vostre servidor té activada la restricció php open_basedir';
$string['openbasedirpaths'] = 'Mahara només pot obrir els fitxers que es troben en el(s) següent(s) directori(s): %s';
$string['openbasedirwarning'] = 'Algunes sol·licituds de llocs externs podrien fallar a l\'intentar completar-les. Això, entre altres coses, podria aturar l\'actualització d\'algunes alimentacions.';
$string['parameterexception'] = 'No s\'ha trobat un paràmetre necessari';
$string['passwordsaltweak'] = 'La contrasenya salada per tot el lloc no és prou forta. Editeu el fitxer config.php i configureu el paràmetre "passwordsaltmain" amb una frase secreta més llarga.';
$string['pgsqldbextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió pgsql. Mahara la necessita per emmagatzemar dades en una base de dades relacional. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['phpversion'] = 'Mahara no funciona amb PHP < 5.1.3. Actualitzeu la versió del PHP  o canvieu la instal·lació de Mahara a un altre host.';
$string['pleaseloginforjournals'] = 'Heu de sortir del sistema i tornar-hi a entrar per poder veure tots els diaris i entrades.';
$string['postmaxlessthanuploadmax'] = 'La vostra configuració de PHP post_max_size setting (%s) és menor que la vostra configuració de  upload_max_filesize (%s). Les càrregues superiors a %s fallaran sense mostrar cap missatge d\'error. Usualment  post_max_size ha de ser molt més gran que upload_max_filesize.';
$string['previewimagegenerationfailed'] = 'S\'ha produït un problema en generar la previsualització de la imatge.';
$string['registerglobals'] = 'Teniu una configuració de PHP de risc: register_globals està activat. Mahara prova d\'ignorar-ho, però ho heu de solucionar.';
$string['safemodeon'] = 'Sembla que el servidor està funcionant en safe mode. Mahara no pot funcionar en safe mode així que ho haureu de desactivar al fitxer php.ini o a la configuració d\'Apache del lloc.

Si esteu en un hosting compartit és difícil que pugueu desactivar safe_mode a no ser que contacteu amb l\'administrador del lloc. Potser caldrà que considereu canviar-vos de lloc.';
$string['sessionextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió session. Mahara la necessita per donar suport al registre d\'usuaris. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['sessionpathnotwritable'] = 'No es pot escriure al vostre directori de dades de sessió, %s. Cal que creeu el directori si no existís o  —si existeix— donar-li a l\'usuari del servidor permisos de propietari.';
$string['smallpostmaxsize'] = 'La vostra configuració per a PHP post_max_size és molt petita  (%s). Les càrregues de fitxers superiors a %s fallaran i no apareixerà cap missatge d\'error.';
$string['switchtomysqli'] = 'L\'extensió PHP <strong>mysqli</strong> no està instal·lada al servidor. Per això Mahara està tornant a l\'extensió PHP  <strong>mysql</strong> original i obsoleta. Es recomana instal·lar <a href="http://php.net/manual/en/book.mysqli.php">mysqli</a>.';
$string['themenameinvalid'] = 'El nom del tema \'%s\' conté caràcters no vàlids';
$string['timezoneidentifierunusable'] = 'El PHP del vostre lloc no retorna un valor útil per l\'identificador de la zona horària (%%z). Es podria trencar el format d\'algunes dades, com ara l\'exportació en Leap2 . Aquest problema normalment es deu a una limitació de l\'execució de PHP a Windows.';
$string['unabletosetmultipleblogs'] = 'Ha fallat l\'activació de diferents diaris per a l\'usuari %s quan s\'estava copiant la pàgina %s. Ho haureu de configurar manualment a la <a href="%s">pàgina del compte</a>';
$string['unknowndbtype'] = 'La configuració del servidor referència una tipus de base de dades desconegut. Els valors vàlids són: "postgres8" i "mysql5". Canvieu el tipus de BD al fitxer de configuració config.php.';
$string['unrecoverableerror'] = 'S\'ha produït un error irrecuperable.  Això significa que probablement heu trobat un bug al sistema.';
$string['unrecoverableerrortitle'] = '%s - No es pot trobar el lloc';
$string['viewnotfound'] = 'No s\'ha trobat la vista id %s';
$string['viewnotfoundbyname'] = 'No s\'ha trobat la pàgina %s de %s';
$string['viewnotfoundexceptionmessage'] = 'Esteu provant d\'accedir a una vista que no existeix';
$string['viewnotfoundexceptiontitle'] = 'No s\'ha trobat la vista';
$string['wwwrootnothttps'] = 'L\'opció wwwroot definida, %s, no és  HTTPS. Tanmateix altres configuracions de la vostra instal·lació (com la de sslproxy) requereixen que la vostra wwwroot sigui una adreça HTTPS.

Actualitzeu l\'opció  wwwroot perquè sigui una adreça HTTPS o solucioneu la configuració errònia.';
$string['xmlextensionnotloaded'] = 'La configuració del vostre servidor no inclou l\'extensió %s. Mahara la necessita per analitzar dades XML d\'una gran varietat de fonts. Assegureu-vos que es carrega a php.ini o instal·leu-la si cal.';
$string['youcannotviewthisusersprofile'] = 'No podeu veure el perfil d\'aquest usuari';
