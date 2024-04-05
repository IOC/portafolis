<?php

defined('INTERNAL') || die();

$string['approvalemailmessagehtml'] = '<p>Benvolgut/da %s,</p>

<p>Gràcies per enviar la sol·licitud d\'un compte a %s. 
Se n\'ha informat a l\'administrador de la institució.
Molt aviat rebreu un correu amb la resolució de la vostra sol·licitud.</p>

<pre>--
Salutacions,
L\'equip  %s</pre>';
$string['approvalemailmessagetext'] = 'Benvolgut/da %s,

Gràcies per enviar la sol·licitud d\'un compte a %s. 
Se n\'ha informat a l\'administrador de la institució.
Molt aviat rebreu un correu amb la resolució de la vostra sol·licitud.

--
Salutacions,
L\'equip  %s';
$string['approvalemailsubject'] = 'S\'ha rebut la sol·licitud de registre a %s';
$string['completeregistration'] = 'Completeu el registre';
$string['confirmcancelregistration'] = 'Esteu segurs que voleu cancel·lar el registre? Fent això la vostra petició s\'eliminarà del sistema.';
$string['confirmemailsubject'] = 'Confirmeu el correu de registre a %s';
$string['description'] = 'Us autentica contra una base de dades de Mahara';
$string['emailalreadytaken'] = 'Aquesta adreça de correu ja ha estat registrada al lloc';
$string['emailalreadytakenbyothers'] = 'Aquesta adreça de correu ja ha estat agafada per un altre usuari.';
$string['emailconfirmedok'] = '<p>Heu confirmat el correu de registre amb èxit. Molt aviat us notificarem més detalls del registre. </p>';
$string['iagreetothetermsandconditions'] = 'Estic d\'acord amb els Termes i Condicions';
$string['internal'] = 'Interna';
$string['pendingregistrationadminemailhtml'] = '<p>Benvolgut/da %s,</p>
<p>Un usuari nou ha sol·licitat unir-se a la institució \'%s\'.</p>
<p>Com que esteu a la llista d\'administradors d\'aquesta institució cal que aproveu o denegueu la sol·licitud. Per fer-ho seguiu l\'enllaç següent:  <a href=\'%s\'>%s</a></p>
<p>Teniu un termini màxim de 2 setmanes per aprovar o denegar la sol·licitud.</p>
<p>Els detalls de la sol·licitud de registre són aquests:</p>
<p>Nom: %s</p>
<p>Email: %s</p>
<p>Raó per fer la sol·licitud:</p>
<p>%s</p>
<pre>--
Salutacions,
L\'equip %s</pre>';
$string['pendingregistrationadminemailsubject'] = 'Registre d\'un nou usuari de la institució \'%s\' a %s.';
$string['pendingregistrationadminemailtext'] = 'Hola %s,

Un nou usuari ha presentat la sol·licitud per unir-se a la institució \'%s\'.

Com que vós sou a la llista d\'administradors d\'aquesta institució cal que aproveu o denegueu la sol·licitud de registre. Per fer-ho seleccioneu l\'enllaç següent: %s

Heu d\'aprovar o denegar la sol·licitud en un termini de 2 setmanes.

Aquests són els detalls de la sol·licitud:

Nom: %s
Correu electrònic: %s
Raó per registrar-se:
%s

--
Salutacions,
L\'equip %s';
$string['recaptcharegistertitle'] = 'Repte reCAPTCHA';
$string['registeredemailmessagehtml'] = '<p>Hola %s,</p>
<p>Gràcies per registrar-vos a %s. Si us plau, seguiu aquest enllaç per
completar el procés de registre:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<pre>--
Salutacions,
L\'equip de %s</pre>';
$string['registeredemailmessagetext'] = 'Hola %s,

Gràcies per registrar-vos a %s. Si us plau, seguiu aquest enllaç per
completar el procés de registre:

%sregister.php?key=%s

--
Salutacions,
L\'equip de %s';
$string['registeredemailsubject'] = 'Us heu registrat a %s';
$string['registeredok'] = '<p>Us heu registrat correctament. Si us plau, comproveu el vostre correu electrònic per trobar instruccions sobre el procés d\'activació del vostre compte</p>';
$string['registeredokawaitingemail2'] = 'Hem rebut correctament la vostra sol·licitud de registre. Se n\'ha informat a l\'administrador de la institució i molt aviat rebreu un correu amb la resolució de la vostra sol·licitud.';
$string['registrationcancelledok'] = 'Heu cancel·lat amb èxit la vostra sol·licitud de registre.';
$string['registrationconfirm'] = 'Confirmeu el registre?';
$string['registrationconfirmdescription'] = 'Els adminsitradors de la institució han d\'aprovar el registre.';
$string['registrationdeniedemailsubject'] = 'S\'ha denegat l\'intent de registre a %s.';
$string['registrationdeniedmessage'] = 'Hola %s,
Hem rebut la vostra sol·licitud per a unir-se a la nostra institució a %s i hem decidit no concedir-vos l\'accés.
Si penseu que aquesta decisió és incorrecta, si us plau, poseu-vos en contacte amb nosaltres a través del correu electrònic.
Salutacions cordials
%s';
$string['registrationdeniedmessagereason'] = 'Hola %s,
Hem rebut la vostra sol·licitud per a unir-se a la nostra institució a %s i hem decidit no concedir-vos l\'accés pel següent motiu:

%s

Si penseu que aquesta decisió és incorrecta, si us plau, poseu-vos en contacte amb nosaltres a través del correu electrònic.
Salutacions cordials
%s';
$string['registrationexpiredkey'] = 'La vostra clau ha caducat. Potser heu esperat més de 24 hores per completar el registre? Si no fos així és un problema nostre.';
$string['registrationnosuchid'] = 'Aquesta clau de registre no existeix, potser ja l\'heu activada?';
$string['registrationnosuchkey1'] = 'No hi ha cap clau relacionada amb el vostre enllaç. Potser el programa de correu l\'ha malmès.';
$string['registrationreason'] = 'Motiu del registre';
$string['registrationreasondesc1'] = 'La raó per la qual presenteu la sol·licitud d\'inscripció a la institució triada i qualsevol altre detall que considereu que pugui ser útil per l\'administrador en la tramitació de la vostra sol.licitud.';
$string['registrationunsuccessful'] = 'Lamentablement el vostre intent de registre ha fallat a causa d\'un error al nostre sistema. Si us plau, proveu-ho més tard.';
$string['title'] = 'Interna';
$string['usernameinvalidadminform'] = 'El nom d\'usuari pot contenir lletres, xifres i la majoria de símbols comuns i ha de tenir una longitud d\'entre 3 a 236 caràcters. No s\'hi poden posar espais en blanc.';
$string['usernameinvalidform'] = 'El nom d\'usuari només pot contenir caràcters alfanumèrics, punts, barres baixes i símbols d\'arrova. A més, ha de tenir una longitud d\'entre 3 i 30 caràcters.';
$string['youmaynotregisterwithouttandc'] = 'No us podeu registrar si no esteu d\'acord en acceptar els <a href="terms.php">Termes i Condicions</a>';
