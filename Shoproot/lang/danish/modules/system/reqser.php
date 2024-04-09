<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/danish/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatiske DeepL overs&aelig;ttelser via Reqser <i>.</i>com, modulversion %s<br />- bygget til <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;"> noRiddle</a> og &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;"> Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Systemmodul til aktivering og konfiguration af overs&aelig;ttelser via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grundl&aelig;ggende indstillinger</h2>Aktivere modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Anmoder om API-n&oslash;gle');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Du kan indtaste API-n&oslash;glen fra <i>Reqser.com</i> her. Vises, n&aring;r du opretter forbindelse til Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direkte link her</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Midlertidigt sikkerhedstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Midlertidigt sikkerhedstoken til eksterne foresp&oslash;rgsler til shoppen.<br /><span  class="alrt">Tildeles automatisk !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Gyldigheden af det midlertidige sikkerhedstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Det midlertidige sikkerhedstoken er gyldigt indtil (se nedenfor).<br />N&aring;r det er udl&oslash;bet, vil et nyt blive oprettet p&aring; anmodning fra en ekstern kilde og vil derefter blive vist her.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Sprog-tabeller</h2>Give Reqser.com adgang til alle kolonner i den delte tabel?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" giver Reqser adgang til alle kolonneposter i de frigivne tabeller, et "Nej" kan f&oslash;re til fejl med gamle shopversioner eller ved brug af ikke-standardiserede skabeloner.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databasetabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard databasetabeller, der skal overs&aelig;ttes.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Yderligere databasetabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'V&aelig;lg flere databasetabeller, der skal overs&aelig;ttes her');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andre databasetabeller (ikke tilg&aelig;ngelige for valg ovenfor)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Indtast yderligere databasetabeller, der skal overs&aelig;ttes her, adskilt af kommaer.<br />(For udvidelser med nye "ikke-modificerede standard"-tabeller)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Ekskluder tabeller');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Indtast de tabeller, der skal udelukkes fra overs&aelig;ttelser her, adskilt af kommaer.<br />(Kun n&oslash;dvendigt, hvis alle standardtabeller er valgt ovenfor, og nogle af dem skal udelukkes).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Overs&aelig;t fra hvilket sprog?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Fra hvilket sprog skal overs&aelig;ttelsen foretages?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Hvilke sprog kan jeg overs&aelig;tte til? ' . draw_tooltip('Yderligere sprog kan tilf&oslash;jes p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Hvilke sprog skal der overs&aelig;ttes til?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelsk bruges som standard som US English');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Foretr&aelig;kker du den britiske stavem&aring;de?<br />Ja = britisk / Nej = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Yderligere indstillinger</h2>Skal det v&aelig;re tilladt at tilf&oslash;je et nyt sprog til <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Hvis denne indstilling er sat til "Ja", kan der tilf&oslash;jes nye sprog til <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nej" skal sproget allerede eksistere i butikssystemet, og sproget skal v&aelig;re aktiveret i dette modul.<br />Opret sprog i shoppen: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Opret sprog i shoppen ?</a> &nbsp;&nbsp;<span class="alrt">!! Det nye sprog er f&oslash;rst tilg&aelig;ngeligt i shoppen efter 24-48 timer. !!</span><br />Mark&eacute;r derefter her som sprog, der skal overs&aelig;ttes');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Overs&aelig;t sprogfiler p&aring; serveren?' . draw_tooltip('Alle filer p&aring; serveren foresp&oslash;rges og overs&aelig;ttes</br>Dette g&aelig;lder ogs&aring; sprogfilerne i modulerne og udvidelserne. Alle sprogfiler regenereres, inklusive eksisterende sprog.<br />Som standard bliver eksisterende fremmedsprogstekster i Reqser overtaget og ikke nyoversat, men det kan &aelig;ndres i Reqser-indstillingerne.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Uden sprogfiler fungerer intet fremmedsprog i butikken, og der er en "hvid" side!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Overf&oslash;re sprogfiler automatisk?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Skal de oversatte sprogfiler automatisk overf&oslash;res til din butik, eller skal hver sprogfil v&aelig;lges manuelt i Reqser?<br />Ja = overf&oslash;r sprogfiler automatisk / Nej = overf&oslash;r manuelt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sikkerhed</h2>Logge API-adgange?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Skal API-adgange logges?<br />(Logs kan findes i <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i browseren?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test i browseren uden at sende headers?<br /><span class="alrt">!!! Skal v&aelig;re deaktiveret i live drift af API\'en!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Den "Reqser API key", der er gemt her i modulet, stemmer ikke overens med den, der er gemt p&aring; <i>reqser.com</i>.<br />Log ind p&aring; <i>reqser</i>.com og tjek API-n&oslash;glen, eller hent den igen, hvis det er n&oslash;dvendigt, og gem den her.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-n&oslash;gle gemt med succes');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Der er ikke indtastet nogen API-n&oslash;gle! Log ind p&aring; <i>reqser.com</i> og hent API-n&oslash;glen til denne hjemmeside, og gem den her i modulet.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul intet sprog at overs&aelig;tte til valgt !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Overs&aelig;t til hvilke sprog?" m&aring; ikke indeholde et sprog, der er valgt i "Overs&aelig;t fra hvilket sprog?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Den manuelt tilf&oslash;jede tabel <b>"%s"</b> kunne ikke findes i databasen. Tjek venligst indstillingerne for "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Reqser.com DeepL modulet vil automatisk overs&aelig;tte alle fremmedsprog, der er aktiveret i modulet for dette produkt, n&aring;r det er gemt.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator-modulet har ingen API-n&oslash;gle, indtast venligst en API-n&oslash;gle');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator-modulet er ikke aktiveret, aktiver venligst modulet under Modul->Systemmodul');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator-modulet har ingen forbindelse!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com-forbindelsen bliver kontrolleret, vent venligst.');