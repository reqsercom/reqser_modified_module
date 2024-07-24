<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
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
define('MODULE_SYSTEM_REQSER_TITLE', 'AI-v&aelig;rkt&oslash;jer til overs&aelig;ttelser og SEO via Reqser <i>.</i>com, modulversion %s<br />- bygget til <i>Reqser</i>.com - &copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> og<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> og &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
 <i><a href="https://reqser.com/" target="_blank">Systemmodul til forbindelse med DeepL, OpenAI og Neuroflash via</i> <i>reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grundl&aelig;ggende indstillinger</h2>Aktivere modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Anmodning om API-n&oslash;gle');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Du kan indtaste API-n&oslash;glen fra Reqser <i>.com</i> her. Vises, n&aring;r du opretter forbindelse til Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direkte link her</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Midlertidigt sikkerhedstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Midlertidigt sikkerhedstoken til eksterne foresp&oslash;rgsler til butikken.<br /><span  class="alrt">Tildeles automatisk !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Gyldigheden af det midlertidige sikkerhedstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Det midlertidige sikkerhedstoken er gyldigt indtil (se nedenfor).<br />N&aring;r det er udl&oslash;bet, oprettes et nyt p&aring; anmodning fra en ekstern kilde og vises derefter her.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Sproglige tabeller</h2>Giv Reqser.com adgang til alle kolonner i den delte tabel?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" giver Reqser adgang til alle kolonneposter i de frigivne tabeller, et "Nej" kan f&oslash;re til fejl med gamle shopversioner eller ved brug af ikke-standardiserede skabeloner.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databasetabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standarddatabasetabeller, der skal overs&aelig;ttes.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Yderligere databasetabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'V&aelig;lg yderligere databasetabeller, der skal overs&aelig;ttes, her');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andre databasetabeller (ikke tilg&aelig;ngelige for valg ovenfor)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Indtast yderligere databasetabeller, der skal overs&aelig;ttes, adskilt af kommaer.<br />(For udvidelser med nye "ikke-modificerede standard"-tabeller)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Ekskluder tabeller');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Indtast de tabeller, der skal udelukkes fra overs&aelig;ttelser her, adskilt af kommaer.<br />(Kun n&oslash;dvendigt, hvis alle standardtabeller er valgt ovenfor, og nogle af dem skal udelukkes).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Overs&aelig;t fra hvilket sprog?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Hvilket sprog skal der overs&aelig;ttes fra?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Hvilke sprog kan jeg overs&aelig;tte til? ' . draw_tooltip('Yderligere sprog kan tilf&oslash;jes p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Hvilke sprog skal der overs&aelig;ttes til?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelsk bruges som standard som amerikansk engelsk');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Foretr&aelig;kker du den britiske stavem&aring;de?<br />Ja = britisk / Nej = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Yderligere indstillinger</h2>Skal det v&aelig;re tilladt at tilf&oslash;je et nyt sprog til <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'N&aring;r denne indstilling er sat til "Ja", kan nye sprog tilf&oslash;jes til <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nej" skal sproget allerede eksistere i shopsystemet, og sproget skal v&aelig;re aktiveret i dette modul.<br />Opret sprog i shoppen: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Opret sprog i shoppen ?</a> &nbsp;&nbsp;<span class="alrt">!! Det nye sprog er f&oslash;rst tilg&aelig;ngeligt i shoppen efter 24-48 timer. !!</span><br />Marker derefter her som sprog, der skal overs&aelig;ttes');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Overs&aelig;t sprogfiler p&aring; serveren? Alle filer p&aring; serveren foresp&oslash;rges og overs&aelig;ttes</br>Dette g&aelig;lder ogs&aring; modulernes og udvidelsernes sprogfiler. Alle sprogfiler regenereres, inklusive eksisterende sprog.<br />Som standard bliver eksisterende fremmedsprogstekster i Reqser overtaget og ikke nyoversat, men det kan &aelig;ndres i Reqser-indstillingerne.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Uden sprogfiler fungerer intet fremmedsprog i butikken, og der er en "hvid" side!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Overf&oslash;re sprogfiler automatisk?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Skal de oversatte sprogfiler automatisk overf&oslash;res til din butik, eller skal hver sprogfil v&aelig;lges manuelt i Reqser?<br />Ja = overf&oslash;r sprogfiler automatisk / Nej = overf&oslash;r manuelt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sikkerhed</h2>Logge API-adgange?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Skal API-adgange logges?<br />(Logs kan findes i <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Forhindre redigering af grundsproget?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Redigering af grundsproget skal v&aelig;re tilladt, s&aring; s&oslash;gemaskineoptimering af teksterne kan ske p&aring; grundsproget.<br />Ja = Forhindrer redigering / Nej = Tillader redigering');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'Skal "scripte" og "iframe" fjernes fra teksterne?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Hvis der f.eks. indg&aring;r YouTube-videoer eller animationer i teksterne, skal disse tags ikke fjernes. Ellers kan de tekster, vi redigerer, miste funktionalitet.<br />Ja = Fjern / Nej = Fjern ikke');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i browseren?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test i browseren uden at sende headers?<br /><span class="alrt">!!! Skal deaktiveres i live drift af API\'et!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Den "Reqser API-n&oslash;gle", der er gemt her i modulet, stemmer ikke overens med den, der er gemt p&aring; <i>reqser.com</i>.<br />Log ind p&aring; <i>reqser</i>.com, og tjek API-n&oslash;glen, eller hent den om n&oslash;dvendigt igen, og gem den her.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-n&oslash;gle gemt med succes');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Der er ikke indtastet nogen API-n&oslash;gle! Log ind p&aring; <i>reqser.com</i> og hent API-n&oslash;glen til dette websted, og gem den her i modulet.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL FEJL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul Intet sprog, der skal overs&aelig;ttes til, er valgt!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Overs&aelig;t til hvilke sprog?" m&aring; ikke indeholde et sprog, der er valgt i "Overs&aelig;t fra hvilket sprog?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', '%sDen manuelt tilf&oslash;jede tabel <b>"</b> " kunne ikke findes i databasen. <b></b>' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Kontroller venligst indstillingerne for " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulet Reqser.com DeepL overs&aelig;tter automatisk alle fremmedsprog, der er aktiveret i modulet for dette produkt, n&aring;r det er gemt.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator-modulet har ingen API-n&oslash;gle, indtast venligst en API-n&oslash;gle');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator-modulet er ikke aktiveret, aktiver venligst modulet under Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator-modulet har ingen forbindelse!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com-forbindelsen er ved at blive tjekket, vent venligst.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'SEO-indstillingerne er ved at blive indl&aelig;st, vent venligst.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Dine indtastninger er ikke komplette, tjek venligst:');