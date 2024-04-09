<?php

defined('INTERNAL') || die();

$string['locales'] = 'en_US.utf8,en_GB.utf8,en,anglès-us,anglès-uk,anglès';
$string['pieform_calendar_dateformat'] = '%%Y/%%m/%%d';
$string['pieform_calendar_timeformat'] = '%%H:%%M';
$string['strfdateofbirth'] = '%%Y/%%m/%%d';
$string['strfdaymonthyearshort'] = '%%d/%%m/%%Y';
$string['strftimedate'] = '%%d %%B %%Y';
$string['strftimedatemonth'] = '%%e %%B';
$string['strftimedateshort'] = '%%e %%b %%Y';
$string['strftimedatetime'] = '%%d %%B %%Y, %%k:%%M';
$string['strftimedatetimeshort'] = '%%d/%%m/%%Y %%H:%%M';
$string['strftimedatetimesuffix'] = '%%d %%B %%Y, %%l:%%M%%P';
$string['strftimedaydate'] = '%%A, %%d %%B %%Y';
$string['strftimedaydatetime'] = '%%A, %%d %%B %%Y, %%k:%%M';
$string['strftimedaydatetimesuffix'] = '%%A, %%d %%B %%Y, %%l:%%M%%P';
$string['strftimedayshort'] = '%%A, %%d %%B';
$string['strftimedaytime'] = '%%a, %%k:%%M';
$string['strftimedaytimesuffix'] = '%%a, %%l:%%M%%P';
$string['strftimemonthyear'] = '%%B %%Y';
$string['strftimenotspecified'] = 'Sense especificar';
$string['strftimerecent'] = '%%d %%b, %%k:%%M';
$string['strftimerecentfull'] = '%%a, %%d %%b %%Y, %%k:%%M';
$string['strftimerecentfullsuffix'] = '%%A, %%d %%B %%Y, %%l:%%M%%P';
$string['strftimerecentsuffix'] = '%%d %%b, %%l:%%M%%P';
$string['strftimerecentyear'] = '%%d %%b %%Y, %%k:%%M';
$string['strftimerecentyearsuffix'] = '%%d %%B %%Y, %%l:%%M%%P';
$string['strftimetime'] = '%%k:%%M';
$string['strftimetimesuffix'] = '%%l:%%M%%P';
$string['strftimew3cdate'] = '%%Y-%%m-%%d';
$string['strftimew3cdatetime'] = '%%Y-%%m-%%dT%%H:%%M:%%S%%z';
$string['thislanguage'] = 'Català';

// Plural forms, added by language pack generator
$string['pluralrule'] = 'n != 1';
$string['pluralfunction'] = 'plural_ca_utf8';
function plural_ca_utf8($n) {
    return $n != 1;
}
