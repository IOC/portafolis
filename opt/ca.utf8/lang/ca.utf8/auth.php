<?php

defined('INTERNAL') || die();

$string['addauthority'] = 'Afegeix una autoritat';
$string['application'] = 'Aplicació';
$string['authloginmsg2'] = 'Si no heu triat una autoritat parental, escriviu aquí el missatge que es mostrarà quan un usuari intenti registrar-se a través del formulari d\'accés de Mahara.';
$string['authname'] = 'Nom de l\'autoritat';
$string['cannotjumpasmasqueradeduser'] = 'No podeu saltar a l\'altra aplicació mentre utilitzeu l\'opció "Entra com" un altre usuari.';
$string['cannotremove'] = 'No es pot esborrar aquest connector d\\\'autenticació perquè és l\'únic connector que té aquesta institució.';
$string['cannotremoveinuse'] = 'No es pot esborrar aquest connector d\\\'autenticació perquè l\'utilitzen alguns usuaris.
Heu d\'actualitzar les seves dades abans d\'esborrar el connector.';
$string['cantretrievekey'] = 'S\'ha produït un error en recuperar la clau pública del servidor remot.<br> Assegureu-vos que els camps Aplicació i Arrel WWW són correctes i que s\'ha activat la xarxa al servidor remot.';
$string['changepasswordurl'] = 'URL de canvi de contrasenya';
$string['duplicateremoteusername'] = 'Aquest nom d\'usuari d\'autenticació externa ja està essent usat per %s. Els nom d\'usuari d\'autenticació externa han de ser únics en un mètode d\'autenticació.';
$string['duplicateremoteusernameformerror'] = 'Els nom d\'usuari d\'autenticació externa han de ser únics en un mètode d\'autenticació.';
$string['editauthority'] = 'Edita una autoritat';
$string['errnoauthinstances'] = 'Sembla que no hi ha configurada cap instància de connector d\'autenticació pel host a';
$string['errnoxmlrpcinstances'] = 'Sembla que no hi ha configurada cap instància del connector d\'autenticació XMLRPC pel host a %s';
$string['errnoxmlrpcuser1'] = 'No us hem pogut autenticar en aquest moment. Les possibles raons poden ser:

    * Ha expirat la vostra sessió SSO. Torneu a l\'aplicació d\'on veniu i cliqueu l\'enllaç per entrar a % una altra vegada.
    * No teniu permís per entrar per SSO a %s. Contacteu amb el vostre administrador si creieu que hi hauríeu de tenir permís.';
$string['errnoxmlrpcwwwroot'] = 'Sembla que no hi ha cap registre per a cap host a %s';
$string['errorcertificateinvalidwwwroot'] = 'Aquest certificat afirma ser per a %s, però esteu provant d\'usar-lo per a %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'No s\'ha pogut generar una clau SSL nova. Assegureu-vos que tant openssl com el mòdul PHP per openssl estan instal·lats en aquesta màquina.';
$string['errornotvalidsslcertificate'] = 'Aquest no és un Certificat SSL vàlid';
$string['host'] = 'Nom o adreça del host';
$string['hostwwwrootinuse'] = 'El directori arrel WWW ja està essent utilitzat per una altra institució (%s)';
$string['ipaddress'] = 'Adreça IP';
$string['name'] = 'Nom del lloc';
$string['noauthpluginconfigoptions'] = 'No hi ha cap opció de configuració associada a aquest connector';
$string['parent'] = 'Autoritat pare';
$string['port'] = 'Port';
$string['primaryemaildescription'] = 'L\'adreça de correu principal. Rebreu un missatge de correu amb un enllaç clicable. Seguiu-lo per validar l\'adreça i registrar-vos al sistema.';
$string['protocol'] = 'Protocol';
$string['requiredfields'] = 'Camps del perfil requerits';
$string['requiredfieldsset'] = 'Configurats els camps de perfil requerits';
$string['saveinstitutiondetailsfirst'] = 'Deseu els detalls d la institució abans de configurar els connectors d\'autenticació.';
$string['shortname'] = 'Nom curt del vostre lloc';
$string['ssodirection'] = 'Direcció SSO';
$string['theyautocreateusers'] = 'Allà es crearan els usuaris automàticament';
$string['theyssoin'] = 'Allà activen SSO (in)';
$string['toomanytries'] = 'Heu excedit el nombre màxim d\'intents per registrar-vos.  S\'ha bloquejat aquest compte durant 5 minuts.';
$string['unabletosigninviasso'] = 'No és possible registrar-se a través de SSO';
$string['updateuserinfoonlogin'] = 'Actualitza la informació de l\'usuari en entrar al lloc';
$string['updateuserinfoonlogindescription'] = 'Recupera la informació de l\'usuari del servidor remot i actualitza el seu registre local cada cop que l\'usuari entra al lloc.';
$string['validationprimaryemailsent'] = 'S\'ha enviat un missatge de correu. Feu clic a l\'enllaç que hi trobareu per validar l\'adreça.';
$string['weautocreateusers'] = 'Aquí es crearan els usuaris automàticament';
$string['weimportcontent'] = 'Importem continguts (només d\'algunes aplicacions)';
$string['weimportcontentdescription'] = '(només algunes aplicacions)';
$string['wessoout'] = 'Aquí desactivem SSO (out)';
$string['wwwroot'] = 'Arrel WWW';
$string['xmlrpccouldnotlogyouin'] = 'Ho sentim, però no podeu entrar :(';
$string['xmlrpccouldnotlogyouindetail1'] = 'No us hem pogut registrar a %s en aquest moment. Si us plau, torneu-ho a provar d\'aquí uns moments. Si el problema persistís contacteu amb el vostre administrador.';
$string['xmlrpcserverurl'] = 'URL del servidor XML-RPC';
