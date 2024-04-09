<?php

defined('INTERNAL') || die();

$string['accessdenied'] = 'Accés denegat';
$string['accessdeniedbadge'] = 'No tens accés per veure aquesta insígnia.';
$string['accessdeniedexception'] = 'No tens accés per veure aquesta pàgina.';
$string['accessdeniednourlsecret'] = 'No tens accés a aquesta funcionalitat. Proporciona el valor de "urlsecret" del teu fitxer config.php com a part de l\'URL.';
$string['accessdeniedobjection'] = 'Accés denegat. L\'objecció ja ha estat resolta per un altre administrador.';
$string['accessdeniedsuspension'] = 'Aquest portafoli està en revisió.';
$string['apcstatoff'] = 'Sembla que el teu servidor està executant APC amb apc.stat=0. Mahara no admet aquesta configuració. Has de configurar apc.stat=1 al fitxer php.ini.

Si estàs en allotjament compartit, és probable que hi hagi poc que pugueu fer per activar apc.stat a part de demanar-li al vostre proveïdor d\'allotjament. Potser podries plantejar-te traslladar a un altre amfitrió.';
$string['artefactnotfound'] = 'No s\'ha trobat l\'artefacte amb id %s';
$string['artefactnotfoundmaybedeleted'] = 'No s\'ha trobat l\'artefacte amb id %s, (potser ja ha estat esborrat?)';
$string['artefactnotinview'] = 'L\'artefacte %s no és a la pàgina %s';
$string['artefactonlyviewableinview'] = 'Els artefactes d\'aquest tipus només es poden veure dins d\'una pàgina.';
$string['artefactpluginmethodmissing'] = 'El connector d\'artefacte %s ha d\'implementar %s i no ho fa.';
$string['artefactsnotfound'] = 'No s\'han trobat artefacte(s) amb l\'identificador(s): %s';
$string['artefacttypeclassmissing'] = 'Tots els tipus d\'artefactes han d\'implementar una classe. Falta %s.';
$string['artefacttypemismatch'] = 'El tipus d\'artefacte no coincideix. Estàs intentant utilitzar aquest %s com a %s';
$string['artefacttypenametaken'] = 'El tipus d\'artefacte %s ja s\'utilitza en un altre connector (%s).';
$string['badsessionhandle'] = 'El gestor de desa de sessió "%s" no està configurat correctament. Comprova la configuració del teu fitxer "config.php".';
$string['blockconfigdatacalledfromset'] = 'Les dades de configuració no s\'han d\'establir directament. Utilitza PluginBlocktype::instance_config_save.';
$string['blockinstancenotfound'] = 'No s\'ha trobat la instància de bloqueig amb l\'identificador %s.';
$string['blocktypelibmissing'] = 'Falta lib.php per al bloc %s al connector d\'artefacte %s.';
$string['blocktypemissingconfigform'] = 'El tipus de bloc %s ha d\'implementar instance_config_form';
$string['blocktypenametaken'] = 'El tipus de bloc %s ja s\'utilitza en un altre connector (%s).';
$string['blocktypeprovidedbyartefactnotinstallable'] = 'S\'instal·larà com a part de la instal·lació del connector d\'artefacte %s.';
$string['cannotputblocktypeintoview'] = 'No es poden posar %s tipus de bloc en aquesta pàgina';
$string['classmissing'] = 'Faltava la classe %s per al tipus %s al connector %s.';
$string['collectionnotfound'] = 'No s\'ha trobat la col·lecció amb l\'identificador %s';
$string['couldnotmakedatadirectories'] = 'Per algun motiu no s\'han pogut crear alguns dels directoris de dades principals. Això no hauria de passar, ja que Mahara va detectar anteriorment que el directori dataroot es podia escriure. Comprova els permisos al directori d\'arrel de dades.';
$string['cssnotpresent'] = 'Els fitxers CSS no estan presents al teu directori htdocs/theme/raw/style. Si estàs executant Mahara des d\'un pagament git, executa "make css" per crear els fitxers CSS. Si estàs executant Mahara des d\'una descàrrega ZIP, prova de baixar i descomprimir de nou.';
$string['curllibrarynotinstalled'] = 'La configuració del servidor no inclou l\'extensió curl. Mahara a necessita per integrar-se amb Moodle i per accedir a alimentacions RSS remotes. Assegura’t que curl és al fitxer php.ini, o instal·leu-la si calgués.';
$string['datarootinsidedocroot'] = 'Has configurat l\'arrel de dades perquè estigui dins de l\'arrel del document. Aquest és un gran problema de seguretat, ja que llavors qualsevol pot sol·licitar directament dades de sessió (per tal de segrestar sessions d\'altres persones) o fitxers als quals no se li permet accedir que altres persones han penjat. Configura l\'arrel de dades perquè estigui fora de l\'arrel del document.';
$string['datarootnotwritable'] = 'El teu directori arrel de dades definit, %s, no es pot escriure. Això vol dir que no es poden desar al vostre servidor les dades de sessió, els fitxers ni res que calgui carregar. Crea el directori si no existeix o dona la propietat del directori al compte del servidor web si ho és.';
$string['dbconnfailed'] = 'Mahara no es pot connectar a la base de dades.

 * Si estàs usant Mahara, espera un minut i torneu-ho a provar.
 * Si ets l\'administrador comprova la configuració de la BD i assegura’t que s\'hi pot accedir.

L\'error rebut ha estat:
';
$string['dbnotutf8'] = 'No estàs utilitzant una base de dades UTF-8. Mahara emmagatzema totes les dades com a UTF-8 internament. Si us plau, deixa anar i torna a crear la teva base de dades mitjançant la codificació UTF-8.';
$string['dbnotutf8mb4'] = 'No estàs utilitzant una base de dades de conjunt de caràcters utf8mb4 (codificació Unicode UTF-8 de 4 bytes). Mahara emmagatzema totes les dades com a utf8mb4 internament. Si us plau, deixa anar i torneu a crear la teva base de dades mitjançant la codificació utf8mb4.';
$string['dbversioncheckfailed'] = 'La teva versió de la base de dades no és prou nova per fer córrer Mahara. El servidor és %s %s, però Mahara requereix com a mínim la versió %s.';
$string['domextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió DOM. Mahara la requereix amb la finalitat d\'analitzar les dades XML d\'una gran  varietat de fonts.';
$string['errorat'] = ' a ';
$string['fileuploadtoobig'] = 'Un fitxer que estàs provant de carregar és més gran que %s, la mida màxima del fitxer que pots carregar.';
$string['fileuploadtoomany'] = 'Estàs provant de pujar massa fitxers. Pots carregar fins a %s.';
$string['gdextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió gd. Mahara la necessita per realitzar operacions amb les imatges carregades. Assegura’t que es carrega a php.ini o instal·leu-la si cal.';
$string['gdfreetypenotloaded'] = 'La configuració de l\'extensió gd del teu servidor no té suport per a  FreeType. Assegura’t que la configuració de l\'extensió gd l\'inclogui..';
$string['gdlibrarylacksgifsupport'] = 'La biblioteca PHP GD instal·lada no suporta la creació i lectura d\'imatges en format GIF. Cal un suport complet per poder carregar imatges GIF.';
$string['gdlibrarylacksjpegsupport'] = 'La biblioteca PHP GD que tens instal·lada no té suport per les imatges JPEG/JPG. Cal un suport complet per poder carregar imatges JPEG/JPG';
$string['gdlibrarylackspngsupport'] = 'La biblioteca PHP GD instal·lada no admet imatges PNG. Es necessita suport complet per pujar imatges PNG.';
$string['institutionprivacystatementnotfound'] = 'No s\'ha trobat la declaració de privadesa del lloc amb l\'identificador %s.';
$string['interactioninstancenotfound'] = 'No s\'ha trobat la instància d\'activitat amb id %s';
$string['intlextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió intl per a PHP. Mahara requereix aquesta extensió per analitzar informació relacionada amb les configuracions regionals de l\'idioma.';
$string['invaliddirection'] = 'La direcció %s no és vàlida.';
$string['invalidlayoutselection'] = 'Has intentat seleccionar un disseny que no existeix.';
$string['invaliduser'] = 'El compte seleccionat no és vàlid';
$string['invalidviewaction'] = 'Acció de control de pàgina no vàlida: %s';
$string['isolatedinstitutionsremoverules'] = 'Hem amagat %s regles d\'accés a causa de les institucions aïllades que estan en vigor. Les regles ocultes s\'eliminaran un cop desat el formulari.';
$string['jsonextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió JSON. Mahara ho requereix per enviar algunes dades cap i des del navegador. Assegura’t que estigui carregat a php.ini o instal·la si no està instal·lat.';
$string['magicquotesgpc'] = 'Tens una configuració PHP perillosa: magic_quotes_gpc està activat. Mahara està intentant solucionar-ho, però realment hauries de solucionar-ho. Si utilitzes allotjament compartit i el teu amfitrió ho permet, hauries d\'incloure la línia següent al fitxer .htaccess:
php_flag magic_quotes_gpc desactivat';
$string['magicquotesruntime'] = 'Tens una configuració PHP perillosa: magic_quotes_runtime està activat. Mahara està intentant solucionar-ho, però realment hauries de solucionar-ho. Si utilitzes allotjament compartit i el teu amfitrió ho permet, hauries d\'incloure la línia següent al fitxer .htaccess:
php_flag magic_quotes_runtime off';
$string['magicquotessybase'] = 'Tens una configuració PHP perillosa: magic_quotes_sybase està activat. Mahara està intentant solucionar-ho, però realment hauries de solucionar-ho. Si utilitzes allotjament compartit i el teu amfitrió ho permet, hauries d\'incloure la línia següent al fitxer .htaccess:
php_flag magic_quotes_sybase desactivat';
$string['mahararootusermissing'] = 'Falta el compte "arrel" a la base de dades, així que no podem continuar. Aquest compte ha d\'estar present perquè Mahara funcioni correctament. Per tornar a afegir el compte d\'arrel, fes una altra instal·lació de la versió de Mahara que estàs utilitzant i consulta què inclou l\'identificador del compte = 0 a les taules "usr" i "usr_custom_layout" i afegeix aquestes dades a la teva instància de Mahara abans de provar-ho per actualitzar de nou.';
$string['mbstringextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió mbstring. Mahara requereix això per analitzar cadenes de diversos bytes per a diferents idiomes.';
$string['mbstringneeded'] = 'Instal·la l\'extensió mbstring per a php. Això és necessari si tens caràcters UTF-8 als noms d\'usuari. En cas contrari, és possible que les persones no puguin iniciar sessió.';
$string['memcacheusememcached'] = 'L\'emmagatzematge de la sessió "memcache" està obsolet. Si us plau, utilitza "memcached".';
$string['missingparamblocktype'] = 'Intenta seleccionant un tipus de bloc per afegir primer.';
$string['missingparamid'] = 'Falta l\'identificador';
$string['missingparamorder'] = 'Falta l\'especificació de la comanda';
$string['mysqldbextensionnotloaded'] = 'La configuració del servidor no inclou l\'extensió mysql. Mahara la necessita per emmagatzemar dades en una base de dades relacional. Assegura’t que es carrega a php.ini o instal·la-la si cal.';
$string['mysqlmodulenolongersupported1'] = 'La configuració del teu servidor no inclou l\'extensió JSON. Mahara ho requereix per enviar algunes dades cap i des del navegador. Assegura’t que estigui carregat a php.ini o instal·la si no està instal·lat.';
$string['mysqlnotriggerprivilege'] = 'Mahara requereix permís per crear activadors de base de dades, però no pot fer-ho. Assegura’t que s\'ha concedit el privilegi d\'activació a l\'usuari adequat a la teva instal·lació de MySQL. Per obtenir instruccions sobre com fer-ho, consulta https://wiki.mahara.org/wiki/System_Administrator\'s_Guide/Granting_Trigger_Privilege';
$string['nomemcachedserver'] = 'No es pot accedir al servidor memcache "%s". Comprova el valor $cfg->memcacheservers per assegurar-te que és correcte';
$string['nomemcacheserversdefined'] = 'El gestor de desa de sessió "%s" no té cap servidor relacionat definit. Defineix el valor $cfg->memcacheservers, p. ex. "localhost:11211".';
$string['nopasswordsaltset'] = 'No s\'ha establert cap sal de contrasenya a tot el lloc. Edita el teu config.php i configura el paràmetre "passwordsaltmain" en una frase secreta raonable.';
$string['nophpextension'] = 'L\'extensió PHP "%s" no està activada. Activa l\'extensió i reinicia el teu servidor web o tria una opció de sessió diferent.';
$string['noreplyaddressmissingorinvalid'] = 'La configuració de l\'adreça "noreply" o bé està buida o conté una adreça de correu no vàlida. Comprova la configuració a <a href="%s">configuració del correu de les opcions del lloc</a>.';
$string['notartefactowner'] = 'Aquest artefacte no et pertany.';
$string['notenoughsessionentropy'] = 'La teva configuració de PHP session.entropy_length és massa petita. Configura-la, com a mínim a 16 al teu php.ini per assegurar que els IDs de sessió generats són prou aleatoris i impredictibles.';
$string['notfound'] = 'No s\'ha trobat';
$string['notfoundexception'] = 'No s\'ha trobat la pàgina que estàs buscant.';
$string['notinstitutionmember'] = 'No pots veure aquesta pàgina perquè no ets membre de la institució a la qual pertany aquesta pàgina.';
$string['notinthesamegroup'] = 'No pots veure aquest perfil perquè no ets membres del mateix grup.';
$string['notinthesameinstitution'] = 'No pots veure aquest perfil perquè no ets membres de la mateixa institució.';
$string['notproductionsite'] = 'Aquest lloc no està en mode de producció. Algunes dades no deuen ser accessibles i/o no estan actualitzades.';
$string['onlyoneblocktypeperview'] = 'No es pot posar més d\'un tipus de bloc "%s" a una pàgina.';
$string['onlyoneprofileviewallowed'] = 'Només se\'t permet una pàgina de perfil.';
$string['openbasedirenabled'] = 'El teu servidor té activada la restricció php open_basedir';
$string['openbasedirpaths'] = 'Mahara només pot obrir els fitxers que es troben en el(s) següent(s) directori(s): %s';
$string['openbasedirwarning'] = 'Algunes sol·licituds de llocs externs podrien fallar a l\'intentar completar-les. Això, entre altres coses, podria aturar l\'actualització d\'algunes alimentacions.';
$string['parameterexception'] = 'Faltava un paràmetre obligatori.';
$string['passwordsaltweak'] = 'La teva contrasenya sal de tot el lloc no és prou potent. Edita el teu config.php i configura el paràmetre "passwordsaltmain" en una frase secreta més llarga.';
$string['peopleinmultipleinstitutions'] = 'No es poden activar les "institucions aïllades".

Assegura\'t que tots els comptes són membres d\'una sola institució. Per veure aquests comptes, ves a \'Menú d\'administració → Persones → Cerca persones\'. Assegura\'t que la columna "Institució" només tingui una entrada per persona.

Per tornar al lloc, desactiva les institucions aïllades al fitxer config.php.

';
$string['pgsqldbextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió pgsql. Mahara ho requereix per emmagatzemar dades en una base de dades relacional. Assegura’t que estigui carregat a php.ini o instal·la-ho si no està instal·lat.';
$string['phpversion'] = 'Mahara no funciona amb PHP < 5.1.3. Actualitza la versió del PHP o canvia la instal·lació de Mahara a un altre amfitrió.';
$string['pleaseloginforjournals'] = 'Has de tancar la sessió i tornar a iniciar sessió abans de veure tots els teus diaris i publicacions.';
$string['plpgsqlnotavailable'] = 'El llenguatge PL/pgSQL no està habilitat a la teva instal·lació de Postgres i Mahara no el pot activar. Instal·la PL/pgSQL a la teva base de dades manualment. Per obtenir instruccions sobre com fer-ho, consulteu https://wiki.mahara.org/wiki/System_Administrator\'s_Guide/Enabling_Plpgsql';
$string['pluginnotactive1'] = 'El connector "%s" no està habilitat. Ves a "Administració" → "Extensions" → "Administració de connectors" per activar-lo.';
$string['postmaxlessthanuploadmax'] = 'La teva configuració del teu PHP post_max_size (%s) és més petita que la configuració de upload_max_filesize (%s). Les càrregues més grans de %s fallaran sense mostrar cap error. Normalment, post_max_size hauria de ser molt més gran que upload_max_filesize.';
$string['previewimagegenerationfailed'] = 'Ho sentim, hi ha hagut un problema en generar la imatge de previsualització.';
$string['randomkeyminlength'] = 'La longitud ha de ser un nombre enter positiu igual o superior a 8';
$string['registerglobals'] = 'Tens una configuració de PHP perillosa: register_globals està activat. Mahara està intentant solucionar-ho, però realment hauries de solucionar-ho. Si utilitzes allotjament compartit i el teu amfitrió ho permet, hauries d\'incloure la línia següent al fitxer .htaccess:
php_flag register_globals desactivat';
$string['resavecustomthemes'] = 'És possible que la teva darrera actualització hagi impedit que els teus temes configurables es mostrin correctament. Per actualitzar un tema configurable, ves a Administració → Institució -> Configuració, configura la configuració de la institució i desa el formulari.<br>Les institucions següents utilitzen temes configurables:';
$string['safemodeon'] = 'Sembla que el teu servidor està executant el mode segur. Mahara no admet l\'execució en mode segur. Has de desactivar-ho al fitxer php.ini o a la vostra configuració d\'apache per al lloc.

Si estàs en allotjament compartit, és probable que hi hagi poc que pugueu fer per desactivar el mode segur a part de preguntar al vostre proveïdor d\'allotjament. Potser podries plantejar-te traslladar-te a un altre amfitrió.';
$string['sessionextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió de sessió. Mahara ho requereix per donar suport a les persones que inicien sessió. Assegura’t que estigui carregat a php.ini o instal·leu-lo si no està instal·lat.';
$string['sessionpathnotwritable'] = 'El teu directori de dades de sessió, %s, no es pot escriure. Crea el directori si no existeix o dona la propietat del directori al compte del servidor web si ho és.';
$string['sideblockmenuclash'] = 'El nom del bloc lateral "%s" ja està en ús. Tria’n un de diferent.';
$string['siteoutofsyncfor'] = 'Aquest lloc té informació de la base de dades més recent que %s fitxers indiquen que hauria de ser.';
$string['siteprivacystatementnotfound'] = 'No s\'ha trobat la declaració de privadesa del lloc amb l\'identificador %s.';
$string['smallpostmaxsize'] = 'La teva configuració per a PHP post_max_size és molt petita  (%s). Les càrregues de fitxers superiors a %s fallaran i no apareixerà cap missatge d\'error.';
$string['switchtomysqli'] = 'L\'extensió PHP <strong>mysqli</strong> no està instal·lada al servidor. Per això Mahara està tornant a l\'extensió PHP  <strong>mysql</strong> original i obsoleta. Es recomana instal·lar <a href="http://php.net/manual/en/book.mysqli.php">mysqli</a>.';
$string['themenameinvalid'] = 'El nom del tema \'%s\' conté caràcters no vàlids.';
$string['timezoneidentifierunusable'] = 'PHP a l\'amfitrió del teu lloc web no retorna un valor útil per a l\'identificador de zona horària (%%z). Es trencarà cert format de data, com ara l\'exportació de Leap2A. %%z és un codi de format de data PHP. Aquest problema sol ser degut a una limitació en l\'execució de PHP a Windows.';
$string['unabletosetmultipleblogs'] = 'Ha fallat l\'habilitació de diversos diaris per a %s quan es copia la pàgina %s. Això es pot configurar manualment a la pàgina <a href="%s">compte</a>.';
$string['unknowndbtype'] = 'La configuració del servidor referència una tipus de base de dades desconegut. Els valors vàlids són: "postgres8" i "mysql5". Canvieu el tipus de BD al fitxer de configuració config.php.';
$string['unrecoverableerror'] = 'S\'ha produït un error irrecuperable. Això probablement vol dir que has trobat un error al sistema.';
$string['unrecoverableerrortitle'] = '%s - Lloc no disponible';
$string['updatesitetimezone'] = 'La zona horària del lloc ara ha d’establir-se mitjançant "Configura el lloc" → "Opcions del lloc" → "Configuració del lloc". Si us plau, configura-la allà i suprimeix la línia $cfg->dbtimezone del teu fitxer config.php.';
$string['urlsecretweak'] = 'El conjunt $cfg->urlsecret per a aquest lloc no ha canviat del valor predeterminat. Edita el teu lloc config.php i configura el paràmetre $cgf->urlsecret en una cadena diferent (o nul si no vola utilitzar un urlsecret).';
$string['versionphpmissing1'] = 'Falta el connector %s %s version.php. Si no esperis tenir un connector %s, suprimeix la carpeta a %s.';
$string['viewnotfound'] = 'No s\'ha trobat la pàgina amb l\'identificador %s.';
$string['viewnotfoundbyname'] = 'No s\'ha trobat la pàgina %s per %s.';
$string['viewnotfoundexceptionmessage'] = 'Has provat d\'accedir a una pàgina que no existeix.';
$string['viewnotfoundexceptiontitle'] = 'Pàgina no trobada';
$string['viewtemplatenotfound'] = 'No s\'ha trobat la plantilla de pàgina predeterminada.';
$string['wrongparamtype'] = 'A una funció o mètode s\'ha passat el tipus d\'argument incorrecte.';
$string['wrongsessionhandle'] = 'El gestor de desa de sessió "%s" no és compatible a Mahara.';
$string['wwwrootnothttps'] = 'El teu wwwroot definit, %s, no és HTTPS. Tanmateix, altres configuracions (com ara sslproxy) per a la teva instal·lació requereixen que el teu wwwroot sigui una adreça HTTPS.

Actualitza la configuració de wwwroot perquè sigui una adreça HTTPS o corregeix la configuració incorrecta.';
$string['xmlextensionnotloaded'] = 'La configuració del teu servidor no inclou l\'extensió %s. Mahara la necessita per analitzar dades XML d\'una gran varietat de fonts. Assegura’t que es carrega a php.ini o instal·leu-la si cal.';
$string['youcannotviewthisusersprofile'] = 'No pots veure aquest perfil.';
