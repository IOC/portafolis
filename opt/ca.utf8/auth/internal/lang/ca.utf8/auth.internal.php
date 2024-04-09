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
Molt aviat rebràs un correu amb la resolució de la teva sol·licitud.

--
Salutacions,
L\'equip  %s';
$string['approvalemailsubject'] = 'S\'ha rebut la sol·licitud de registre a %s';
$string['completeregistration'] = 'Registre complet';
$string['confirmcancelregistration'] = 'Estàs segur/a que vols cancel·lar el registre? Fent això la teva petició s\'eliminarà del sistema.';
$string['confirmemailsubject'] = 'Confirma el correu de registre a %s';
$string['description'] = 'Autenticació contra una base de dades de Mahara';
$string['emailalreadytaken'] = 'Aquesta adreça de correu ja ha estat registrada aquí.';
$string['emailalreadytakenbyothers'] = 'Aquesta adreça de correu ja ha estat agafada per un altre usuari.';
$string['emailconfirmedok'] = '<p>Has confirmat el correu de registre amb èxit. Molt aviat us notificarem més detalls del registre. </p>';
$string['iagreetothetermsandconditions'] = 'Estic d\'acord amb els Termes i Condicions';
$string['internal'] = 'Intern';
$string['passwordinvalidform1'] = 'La teva contrasenya ha de tenir com a mínim %s caràcters. Les contrasenyes es distingeixen entre majúscules i minúscules i han de ser diferents del teu nom d\'usuari. La teva contrasenya ha de contenir %s.';
$string['pendingregistrationadminemailhtml'] = '<p>Benvolgut/da %s,</p>
<p>Algú ha sol·licitat unir-se a la institució \'%s\'.</p>
<p>Com que estàs a la llista d\'administradors d\'aquesta institució cal que aprovis o deneguis la sol·licitud de registre. Per fer-ho, segueix l\'enllaç següent:  <a href=\'%s\'>%s</a></p>
<p>Tens un termini màxim de 2 setmanes per aprovar o denegar la sol·licitud.</p>
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

Algú ha sol·licitat per unir-se a la institució \'%s\'.

Com que figures a la llista d\'administradors d\'aquesta institució cal que aprovis o deneguis la sol·licitud de registre. Per fer-ho selecciona l\'enllaç següent: %s

Has d\'aprovar o denegar la sol·licitud en un termini de 2 setmanes.

Aquests són els detalls de la sol·licitud:

Nom: %s
Correu electrònic: %s
Raó per registrar-se:
%s

--
Salutacions,
L\'equip %s';
$string['recaptcharegisterdesc2'] = 'Marca la casella "No sóc un robot" si voleu continuar.';
$string['recaptcharegistertitle'] = 'Repte reCAPTCHA';
$string['registeredemailmessagehtml'] = '<p>Hola %s,</p>
<p>Gràcies per registrar-te a %s. Si us plau, segueix aquest enllaç per
completar el procés de registre:</p>
<p><a href="%sregister.php?key=%s">%sregister.php?key=%s</a></p>
<p>L’enllaç caducarà en 24 hores.</p>

<pre>--
Salutacions,
L\'equip de %s</pre>';
$string['registeredemailmessagetext'] = 'Hola %s,

Gràcies per registrar-te a %s. Si et plau, segueix aquest enllaç per
completar el procés de registre:

%sregister.php?key=%s

--
Salutacions,
L\'equip de %s';
$string['registeredemailsubject'] = 'T’has registrat a %s';
$string['registeredok'] = '<p>T’has registrat correctament. Si us plau, comprova el teu correu electrònic per trobar instruccions sobre el procés d\'activació del teu compte</p>';
$string['registeredokawaitingemail2'] = 'Has enviat correctament la teva sol·licitud de registre. Se n\'ha informat a l\'administrador de la institució i molt aviat rebràs un correu amb la resolució de la teva sol·licitud.';
$string['registrationcancelledok'] = 'Has cancel·lat amb èxit la teva sol·licitud de registre.';
$string['registrationconfirm'] = 'Confirmes el registre?';
$string['registrationconfirmdescription'] = 'El registre ha de ser aprovat pels administradors de les institucions.';
$string['registrationdeniedemailsubject'] = 'S\'ha denegat l\'intent de registre a %s.';
$string['registrationdeniedmessage'] = 'Hola %s,
Hem rebut la teva sol·licitud per a unir-te a la nostra institució a %s i hem decidit no concedir-te l\'accés.

Si penses que aquesta decisió és incorrecta, si us plau, posa’t en contacte amb nosaltres a través del correu electrònic.

Salutacions cordials
%s';
$string['registrationdeniedmessagereason'] = 'Hola %s,
Hem rebut la teva sol·licitud per a unir-te a la teva institució a %s i hem decidit no concedir-vos l\'accés pel següent motiu:

%s

Si penses que aquesta decisió és incorrecta, si us plau, posa’t en contacte amb nosaltres a través del correu electrònic
.
Salutacions cordials
%s';
$string['registrationexpiredkey'] = 'Ho sentim, la teva clau ha caducat. Potser has esperat més de 24 hores per completar el registre? En cas contrari, podria ser un problema nostre.';
$string['registrationnosuchid'] = 'Ho sentim, aquesta clau de registre no existeix. Potser ja està activada?';
$string['registrationnosuchkey1'] = 'Ho sentim, no tenim cap clau relacionada amb el teu enllaç. Potser el teu programa de correu l\'ha malmès.';
$string['registrationreason'] = 'Motiu del registre';
$string['registrationreasondesc1'] = 'La raó per sol·licitar el registre amb la teva institució triada i qualsevol altre detall que creguis que pot ser útil per a l\'administrador en processar la teva aplicació.';
$string['registrationunsuccessful'] = 'Ho sentim, el teu intent de registre ha fallat. Això és culpa nostra, no teva. Si us plau, prova-ho més tard.';
$string['title'] = 'Intern';
$string['userdeletiondeniedemailsubject'] = 'S\'ha denegat l\'intent de registre a %s.';
$string['userdeletiondeniedmessage'] = 'Hola %s,
Hem rebut la teva sol·licitud per a unir-te a la nostra institució a %s i hem decidit no concedir-te l\'accés.

Si penses que aquesta decisió és incorrecta, si us plau, posa’t en contacte amb nosaltres a través del correu electrònic.

Salutacions cordials
%s';
$string['userdeletiondeniedmessagereason'] = 'Hola %s,
Hem rebut la teva sol·licitud per a unir-te a la nostra institució a %s i hem decidit no concedir-te l\'accés per següent motiu:

%s 


Si penses que aquesta decisió és incorrecta, si us plau, posa’t en contacte amb nosaltres a través del correu electrònic.

Salutacions cordials
%s';
$string['userdeletionemailmessagehtml'] = '<p>Hola %s,</p>

<p>El teu compte s\'ha suprimit correctament de %s.</p>

<pre>--
Salutacions,
L\'equip %s</pre>';
$string['userdeletionemailmessagetext'] = 'Hola %s,

El vostre compte s\'ha suprimit correctament de %s.

--
Salutacions,
L\'equip %s';
$string['userdeletionemailsubject'] = 'El vostre compte s\'ha suprimit de %s';
$string['userdeletionnosuchid'] = 'Ho sentim, aquesta sol·licitud d\'eliminació no existeix. Potser ja s\'ha avaluat?';
$string['usernamealreadytaken1'] = 'Ho sentim, no pots utilitzar aquest nom d\'usuari. Si us plau, tria’n un de nou.';
$string['usernameinvalidadminform'] = 'Els noms de les persones usuàries han de contenir lletres, xifres i la majoria de símbols comuns i han de tenir una longitud d\'entre 3 a 236 caràcters. No es permeten deixar espais en blanc.';
$string['usernameinvalidform'] = 'Els noms d\'usuari han de contenir lletres, nombres i símbols més comuns i han de tenir de 3 a 30 caràcters. No es permeten deixar espais en blanc.';
$string['youmaynotregisterwithouttandc'] = 'No et pots registrar si no estàs d\'acord en acceptar els <a href="user_acceptterms">Terms and Conditions</a>.';
