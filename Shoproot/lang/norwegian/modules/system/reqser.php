<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/norwegian/modules/system/
* use: language file for system module
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © copyright JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatiske DeepL oversettelser via Reqser <i>.</i>com, modulversjon %s.<br />- bygget for <i>Reqser</i>.com - &copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;"> noRiddle<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;"> noRiddle</a> og &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;"> Reqser.com</a>. (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Systemmodul for aktivering og konfigurering av oversettelser via <i><a href="https://reqser.com/" target="_blank"> reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grunnleggende innstillinger</h2>Aktivere modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Anmoder om API-n&oslash;kkel');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Du kan angi API-n&oslash;kkelen fra <i>Reqser.com</i> her. Vises n&aring;r du kobler til Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direkte lenke her</a>] ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Midlertidig sikkerhetstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Midlertidig sikkerhetstoken for eksterne foresp&oslash;rsler til butikken.<br /><span  class="alrt"> Tilordnes automatisk !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Gyldigheten til det midlertidige sikkerhetstokenet');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Det midlertidige sikkerhetstokenet er gyldig til (se nedenfor).<br />N&aring;r det er utl&oslash;pt, vil et nytt bli opprettet p&aring; foresp&oslash;rsel fra en ekstern kilde og vises her.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Spr&aring;ktabeller</h2>Gi Reqser.com tilgang til alle kolonnene i den delte tabellen?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" gir Reqser tilgang til alle kolonneoppf&oslash;ringer i de frigitte tabellene, et "Nei" kan f&oslash;re til feil med gamle butikkversjoner eller ved bruk av ikke-standardiserte maler.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databasetabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard databasetabeller som skal oversettes.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Flere databasetabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Velg flere databasetabeller som skal oversettes her');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andre databasetabeller (ikke tilgjengelig for valg ovenfor)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Skriv inn flere databasetabeller som skal oversettes her, atskilt med komma.<br />(For utvidelser med nye "ikke-modifiserte standardtabeller")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Ekskluder tabeller');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Skriv inn tabellene som skal ekskluderes fra oversettelsene her, atskilt med komma.<br />(Bare n&oslash;dvendig hvis alle standardtabeller er valgt ovenfor og noen av dem skal ekskluderes).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Oversette fra hvilket spr&aring;k?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Fra hvilket spr&aring;k skal oversettelsen gj&oslash;res?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Hvilke spr&aring;k kan jeg oversette til? ' . draw_tooltip('Du kan legge til flere spr&aring;k p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Hvilke spr&aring;k skal det oversettes til?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelsk brukes som standard som amerikansk engelsk');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Foretrekker du den britiske stavem&aring;ten?<br />Ja = britisk / Nei = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Ytterligere innstillinger</h2>Skal det v&aelig;re tillatt &aring; legge til et nytt spr&aring;k p&aring; <i><a href="https://reqser.com/" target="_blank">]reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Hvis denne innstillingen er satt til "Ja", kan nye spr&aring;k legges til i <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nei" m&aring; spr&aring;ket allerede finnes i butikksystemet, og spr&aring;ket m&aring; v&aelig;re aktivert i denne modulen.<br />Opprett spr&aring;k i butikken: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquoOpprett spr&aring;k i butikken ?</a> &nbsp;&nbsp;<span class="alrt">!! Det nye spr&aring;ket er f&oslash;rst tilgjengelig i butikken etter 24-48 timer. !!</span><br />Merk deretter her som spr&aring;k som skal oversettes');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Oversette spr&aring;kfiler p&aring; serveren?' . draw_tooltip('Alle filer p&aring; serveren blir forespurt og oversatt</br>Dette gjelder ogs&aring; spr&aring;kfilene til modulene og utvidelsene. Alle spr&aring;kfiler regenereres, ogs&aring; eksisterende spr&aring;k.<br />Som standard overtas eksisterende fremmedspr&aring;klige tekster i Reqser og oversettes ikke p&aring; nytt, men dette kan endres i Reqser-innstillingene.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Uten spr&aring;kfiler fungerer ikke noe fremmedspr&aring;k i butikken, og det er en "hvit" side!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Overf&oslash;re spr&aring;kfiler automatisk?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Skal de oversatte spr&aring;kfilene overf&oslash;res automatisk til butikken din, eller skal hver enkelt spr&aring;kfil velges manuelt i Reqser?<br />Ja = overf&oslash;r spr&aring;kfiler automatisk / Nei = overf&oslash;r manuelt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sikkerhet</h2>Logge API-tilganger?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'B&oslash;r API-tilganger logges?<br />(Du finner loggene i <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i nettleseren?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Teste i nettleseren uten &aring; sende headers?<br /><span class="alrt">!!! M&aring; v&aelig;re deaktivert i direkte drift av API-et!!!</span>.');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Reqser API-n&oslash;kkelen" som er lagret her i modulen, stemmer ikke overens med den som er lagret p&aring; <i>reqser.com</i>.<br />Vennligst logg inn p&aring; <i>reqser</i>.com og sjekk API-n&oslash;kkelen eller, om n&oslash;dvendig, hent den p&aring; nytt og lagre den her.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-n&oslash;kkel vellykket lagret');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Ingen API-n&oslash;kkel er lagt inn! Logg inn p&aring; <i>reqser.com</i> og hent API-n&oslash;kkelen for dette nettstedet og lagre den her i modulen.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL FEIL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul ingen spr&aring;k &aring; oversette til valgt !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Oversett til hvilke spr&aring;k?" m&aring; ikke inneholde et spr&aring;k som ble valgt i "Oversett fra hvilket spr&aring;k?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Den manuelt tilf&oslash;yde tabellen <b>"%s"</b> ble ikke funnet i databasen. Vennligst sjekk innstillingene for "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulen Reqser.com DeepL oversetter automatisk alle fremmedspr&aring;k som er aktivert i modulen for dette produktet etter lagring.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator-modulen har ingen API-n&oslash;kkel, vennligst oppgi en API-n&oslash;kkel.');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator-modulen ikke aktivert, vennligst aktiver modulen under Modul->Systemmodul');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator-modulen har ingen forbindelse!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com-tilkoblingen kontrolleres, vennligst vent.');