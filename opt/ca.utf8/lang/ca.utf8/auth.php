<?php

defined('INTERNAL') || die();

$string['active'] = 'Actiu';
$string['addauthority'] = 'Afegeix una autoritat';
$string['alternativelogins'] = 'Inici de sessió de l\'administració';
$string['application'] = 'Aplicació';
$string['authloginmsg2'] = 'Quan no hagis triat cap autoritat principal, introdueix un missatge que es mostrarà quan algú intenti iniciar sessió mitjançant el formulari d\'inici de sessió.';
$string['authloginmsgnoparent'] = 'Introdueix un missatge per mostrar quan algú intenti iniciar sessió mitjançant el formulari d\'inici de sessió.';
$string['authname'] = 'Nom de l\'autoritat';
$string['cannotjumpasmasqueradeduser'] = 'No pots saltar a una altra aplicació mentre et fas passar per una altra persona.';
$string['cannotremove'] = 'No podem eliminar aquest connector d\'autenticació.
És l\'únic connector que existeix per a aquesta institució.';
$string['cannotremoveinuse'] = 'No podem eliminar aquest connector d\'autenticació. Està sent utilitzat per algunes persones.
Has d\'actualitzar els seus registres abans de poder eliminar aquest connector.';
$string['cantretrievekey'] = 'S\'ha produït un error en recuperar la clau pública del servidor remot.<br> Assegura’t que els camps Aplicació i Arrel WWW són correctes i que s\'ha activat la xarxa al servidor remot.';
$string['changepasswordurl'] = 'URL de canvi de contrasenya';
$string['duplicateremoteusername'] = 'Aquest nom d\'usuari d\'autenticació externa ja està essent usat per %s. Els nom d\'usuari d\'autenticació externa han de ser únics en un mètode d\'autenticació.';
$string['duplicateremoteusernameformerror'] = 'Els noms d\'usuari d\'autenticació externa han de ser únics dins d\'un mètode d\'autenticació.';
$string['editauthority'] = 'Edita una autoritat';
$string['errnoauthinstances'] = 'Sembla que no tenim cap instància de connector d\'autenticació configurada per a l\'amfitrió a %s.';
$string['errnoxmlrpcinstances'] = 'Sembla que no tenim cap instància de connector d\'autenticació XML-RPC configurada per a l\'amfitrió a %s.';
$string['errnoxmlrpcuser1'] = 'No hem pogut autenticar-te en aquest moment. Les possibles raons poden ser:

    * És possible que la teva sessió SSO hagi caducat. Torna a l\'altra aplicació i fes clic a l\'enllaç per iniciar la sessió a %s de nou.
    * És possible que no se’t permeti fer SSO a %s. Consulta amb el teu administrador si creus que t’hauria de donar permís.';
$string['errnoxmlrpcwwwroot'] = 'No tenim cap registre per a cap amfitrió a %s.';
$string['errorcertificateinvalidwwwroot'] = 'Aquest certificat afirma ser per a %s, però estàs provant d\'utilitzar-lo per a %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'No s\'ha pogut generar una clau SSL nova. Assegura’t que tant openssl com el mòdul PHP per openssl estan instal·lats en aquesta màquina.';
$string['errornotvalidsslcertificate'] = 'Aquest no és un Certificat SSL vàlid';
$string['errorunabletologin'] = 'No pots iniciar sessió';
$string['host'] = 'Nom d\'amfitrió o adreça';
$string['hostwwwrootinuse'] = 'L\'arrel WWW ja està en ús per una altra institució (%s).';
$string['ipaddress'] = 'Adreça IP';
$string['name'] = 'Nom del lloc web';
$string['noauthpluginconfigoptions'] = 'No hi ha opcions de configuració associades amb aquest connector.';
$string['nodataforinstance1'] = 'No s\'han pogut trobar dades per a la instància d\'autenticació "%s".';
$string['nullprivatecert'] = 'No s\'ha pogut desar la clau privada';
$string['nullpubliccert'] = 'No s\'ha pogut generar el certificat públic';
$string['parent'] = 'Autoritat dels pares';
$string['port'] = 'Port';
$string['primaryemaildescription'] = 'L\'adreça de correu electrònic principal. Rebràs un correu electrònic amb un enllaç que es pot fer clic; segueix aquest per validar l\'adreça i iniciar sessió al sistema';
$string['protocol'] = 'Protocol';
$string['requiredfields'] = 'Camps de perfil obligatoris';
$string['requiredfieldsset'] = 'Camps de perfil obligatoris establerts';
$string['saveinstitutiondetailsfirst'] = 'Desa els detalls d la institució abans de configurar els connectors d\'autenticació.';
$string['shortname'] = 'Nom curt per al teu lloc';
$string['ssodirection'] = 'Direcció SSO';
$string['theyautocreateusers'] = 'Creen comptes automàticament';
$string['theyssoin'] = 'Activen SSO';
$string['toomanytries'] = 'Has superat el màxim d\'intents d\'inici de sessió. Aquest compte s\'ha bloquejat durant un màxim de 5 minuts.';
$string['unabletosigninviasso'] = 'No es pot iniciar la sessió mitjançant autenticació externa (SSO)';
$string['updateuserinfoonlogin'] = 'Actualitza la informació personal en iniciar sessió';
$string['updateuserinfoonlogindescription'] = 'Recupera la informació de l\'usuari del servidor remot i actualitza el seu registre local cada cop que l\'usuari entra al lloc.';
$string['validationprimaryemailsent'] = 'S\'ha enviat un correu electrònic de validació. Fes clic a l\'enllaç que hi ha dins d\'aquest per validar l\'adreça';
$string['warninstitutionregistration'] = '$cfg->usersuniquebyusername està activat, però el registre està permès per a una institució. Per motius de seguretat, totes les institucions han de tenir desactivat el "Registre permès". Per ajustar-ho a través de la interfície web, haureu d\'establir temporalment $cfg->usersuniquebyusername = false.';
$string['warninstitutionregistrationinstitutions'] = array(
    0 => 'La següent institució té el registre habilitat:
  %2$s',
    1 => 'La següent institució té el registre habilitat:
  %2$s',
);
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusername està activat, però l\'opció del lloc "Persones amb permís de diverses institucions" està desactivada. Això no té sentit, ja que les persones canviaran d\'institució cada vegada que iniciïn sessió des d\'un altre lloc. Activa aquesta configuració a "Administració → Configura el lloc → Configuració de la institució".';
$string['weautocreateusers'] = 'Crear comptes automàticament';
$string['weimportcontent'] = 'Importem contingut';
$string['weimportcontentdescription'] = '(només algunes aplicacions)';
$string['wessoout'] = 'Sortim SSO';
$string['wwwroot'] = 'Arrel WWW';
$string['xmlrpccouldnotlogyouin'] = 'Ho sentim, no hem pogut iniciar sessió.';
$string['xmlrpccouldnotlogyouindetail1'] = 'Ho sentim, no hem pogut iniciar sessió a %s en aquest moment. Torna-ho a provar en breu. Si el problema continua, posa’t en contacte amb el vostre administrador.';
$string['xmlrpcserverurl'] = 'URL del servidor XML-RPC';
