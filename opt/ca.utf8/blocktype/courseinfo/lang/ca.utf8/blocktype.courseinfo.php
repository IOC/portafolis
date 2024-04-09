<?php

defined('INTERNAL') || die();

$string['blocktitleforowner'] = 'Compleció del curs per a %s';
$string['completeconfiguration1'] = 'No hi ha informació del curs per mostrar. Edita aquest bloc per mostrar les finalitzacions del curs.';
$string['completeconfigurationnotpossible'] = 'Cal establir una connexió al servei web de la institució per a aquest bloc. Demana a l\'administrador del lloc que el configuri.';
$string['completedondate'] = 'Completada en';
$string['connectedwithexternalaccount'] = 'S’ha trobat un compte extern';
$string['connectionresultsinvalid'] = 'No es poden obtenir resultats d\'una font externa.';
$string['course'] = 'curs';
$string['coursecompletion_function_title'] = 'Funció externa per a la compleció del curs';
$string['courses'] = 'cursos';
$string['coursesresultsfrom'] = 'Cursos trobats des de %s';
$string['coursesresultsfromto'] = 'Cursos trobats entre %s i %s';
$string['coursesresultsto'] = 'Cursos trobats a %s';
$string['coursetype'] = 'Tipus de curs';
$string['dateoutofsync'] = 'Aquesta ha de ser més antiga que la data "Fins".';
$string['defaulttitledescription'] = 'Si ho deixes en blanc, es generarà un títol predeterminat.';
$string['description'] = 'Mostra informació sobre la finalització del curs d\'una font externa';
$string['externaluserid'] = 'ID del compte extern';
$string['fromdate'] = 'Des de la data';
$string['fromdatedescription'] = 'Mostra només els cursos començats després d\'aquesta data. Utilitza el format %s';
$string['hours'] = 'Hores';
$string['name'] = 'Informació del curs';
$string['ncourses'] = array(
    0 => '%s curs',
    1 => '%s cursos',
);
$string['nocourses1'] = 'Encara no s\'ha configurat cap informació del curs.';
$string['novalidconnectionauthtype'] = 'Tipus de servei web no vàlid. S’ha d\'utilitzar el tipus "REST".';
$string['novalidconnections'] = 'No hi ha objectes de connexió vàlids.';
$string['organisation'] = 'Organització';
$string['placeholdermessage'] = 'Aquest bloc s\'ha de configurar completament abans de poder utilitzar-lo. Només es pot configurar completament quan es troba en una pàgina de portafoli personal.';
$string['plugininfo'] = '<p>Per a mostrar informació sobre les complecions de curs d\'una persona des d\'un lloc extern has de configurar el següent:</p>
<ol>
<li>Té actiu el connector ’blocktype/courseinfo’ actiu.</li>
<li>Ha activat «Permet les sol·licituds de servei web sortints» al menú \'Administració → Serveis web → Configuració\' i té actiu el protocol \'Rest\'.</li>
<li>Ves a ’Menú d\'administració → Serveis web → Gestor de connexions’ i tria la institució per a la qual vols establir la connexió. Després tria l\'opció «PluginBlocktypeCourseinfo:courseinfo - Compleció del curs’ al menú desplegable i fes clic a ’Afegeix’.</li>
<li>Omple el formulari amb el següent:
<ul>
<li>Nom: Dona un nom a aquesta instància, p. ex. \'Institució A: Moodle\'.</li>Connexió activada: estableix a ’Sí’.</li>
<li>Tipus de servei web: Tria ’RESTA’.</li>
<li>Tipus d\'autenticació: Tria ’Testimoni’.</li>
<li>URL del servei web: Estableix l\'URL del servidor REST de la font externa, p. ex. https://moodle/webservice/rest/server.php.</li>
<li>Testimoni: Estableix el testimoni generat al costat del servei extern que té accés a les funcions externes que es requereixen aquí.</li>
<li>Esmena els paràmetres a passar: Afegeix qualsevol paràmetre especial que hagi de passar l\'URL, p. ex. per a Moodle cal afegir «moodlewsrestformat=json».</li>
<li>S\'ha codificat el JSON: Estableix ’Sí’.</li>
<li>Funció externa per a l\'identificador del compte: Estableix-ho a la funció del servei extern que pot retornar un ID basat en l\'adreça de correu electrònic, p. ex. per a Moodle \'core.user.get.users.by.field\'.</li>
<li>Funció externa per a la compleció del curs: Estableix-ho a la funció del servei extern que pot retornar la informació de compleció del curs basant-se en l\'identificador del compte subministrat, p. ex. per a Moodle una funció personalitzada com \'local.client:get.course.completion.data\'.</li>
</ul>
<li>Desa el formulari.</li>
</ol>
<p>Ara, quan una persona afegeix el bloc ’Compleció de la font’ a la seva pàgina, obtindrà el seu identificador de compte extern, el desarà contra el bloc, i després, en veure la pàgina, recuperarà els cursos completats per a aquest identificador de compte.</p>';
$string['title'] = 'Compleció del curs';
$string['todate'] = 'Fins a la data';
$string['todatedescription'] = 'Mostra només els cursos començats abans d\'aquesta data. Utilitza el format %s';
$string['totalhours'] = 'Total d\'hores';
$string['unabletofetchdata'] = 'No s\'han pogut recuperar les dades per a aquest propietari de la pàgina';
$string['userid_function_title'] = 'Funció externa per a l\'identificador del compte';
