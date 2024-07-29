<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
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
define('MODULE_SYSTEM_REQSER_TITLE', 'AI-verkt&oslash;y for oversettelser og SEO via Reqser <i>.</i>com, modulversjon %s<br />- bygget for <i>Reqser</i>.com - &copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> og<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> og &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
 <i><a href="https://reqser.com/" target="_blank">Systemmodul for tilkobling til DeepL, OpenAI og Neuroflash via</i> <i>reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grunnleggende innstillinger</h2>Aktiver modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API-n&oslash;kkel');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Du kan angi API-n&oslash;kkelen fra Reqser <i>.com</i> her. Vises n&aring;r du kobler til Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direkte lenke her</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Midlertidig sikkerhetstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Midlertidig sikkerhetstoken for eksterne foresp&oslash;rsler til butikken.<br /><span  class="alrt"> Tildeles automatisk !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Gyldigheten til det midlertidige sikkerhetstokenet');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Det midlertidige sikkerhetstokenet er gyldig til (se nedenfor).<br />N&aring;r den er utl&oslash;pt, vil en ny opprettes p&aring; foresp&oslash;rsel fra en ekstern kilde og vises her.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Spr&aring;ktabeller</h2>Gi Reqser.com tilgang til alle kolonnene i den delte tabellen?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" gir Reqser tilgang til alle kolonneoppf&oslash;ringer i de frigitte tabellene, mens "Nei" kan f&oslash;re til feil med gamle butikkversjoner eller ved bruk av ikke-standardiserte maler.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databasetabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard databasetabeller som skal oversettes.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Flere databasetabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Velg flere databasetabeller som skal oversettes her');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andre databasetabeller (ikke tilgjengelig for valg ovenfor)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Skriv inn flere databasetabeller som skal oversettes her, atskilt med komma.<br />(For utvidelser med nye "ikke-modifiserte standardtabeller")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Ekskluder tabeller');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Skriv inn tabellene som skal ekskluderes fra oversettelser her, atskilt med komma.<br />(Bare n&oslash;dvendig hvis alle standardtabeller er valgt ovenfor og noen av dem skal ekskluderes).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Oversett fra hvilket spr&aring;k?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Hvilket spr&aring;k skal oversettelsen gj&oslash;res fra?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Hvilke spr&aring;k kan jeg oversette til? ' . draw_tooltip('Flere spr&aring;k kan legges til p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Hvilke spr&aring;k b&oslash;r det oversettes til?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelsk brukes som standard som amerikansk engelsk');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Foretrekker du den britiske stavem&aring;ten?<br />Ja = britisk / Nei = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Ytterligere innstillinger</h2>Skal et nytt spr&aring;k kunne legges til p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Med denne innstillingen satt til "Yes" kan nye spr&aring;k legges til i <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nei" m&aring; spr&aring;ket allerede finnes i butikksystemet, og spr&aring;ket m&aring; v&aelig;re aktivert i denne modulen.<br />Opprett spr&aring;k i butikken: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Opprett spr&aring;k i butikk?</a> &nbsp;&nbsp;<span class="alrt">!! Det nye spr&aring;ket er bare tilgjengelig i butikken etter 24-48 timer. !!</span><br />Merk deretter her som spr&aring;k som skal oversettes');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Oversette spr&aring;kfiler p&aring; serveren? Alle filer p&aring; serveren blir forespurt og oversatt</br>Dette gjelder ogs&aring; spr&aring;kfilene til modulene og utvidelsene. Alle spr&aring;kfiler blir regenerert, inkludert eksisterende spr&aring;k.<br />Som standard overtas eksisterende fremmedspr&aring;klige tekster i Reqser og oversettes ikke p&aring; nytt, men dette kan endres i Reqser-innstillingene.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Uten spr&aring;kfiler fungerer ingen fremmedspr&aring;k i butikken, og det er en "hvit" side!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Overf&oslash;re spr&aring;kfiler automatisk?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Skal de oversatte spr&aring;kfilene overf&oslash;res automatisk til butikken din, eller skal hver spr&aring;kfil velges manuelt i Reqser?<br />Ja = overf&oslash;re spr&aring;kfiler automatisk / Nei = overf&oslash;re manuelt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sikkerhet</h2>Logge API-tilganger?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'B&oslash;r API-tilganger logges?<br />(Logger finnes i <i>/api/reqser/logs/)</i>.');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Hindre redigering av grunnspr&aring;ket?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Redigering av grunnspr&aring;ket b&oslash;r v&aelig;re tillatt, slik at s&oslash;kemotoroptimalisering av tekstene kan skje p&aring; grunnspr&aring;ket.<br />Ja = Forhindrer redigering / Nei = Tillater redigering');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'B&oslash;r "scripte" og "iframe" fjernes fra tekstene?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Hvis det for eksempel er inkludert YouTube-videoer eller animasjoner i tekstene, b&oslash;r disse taggene ikke fjernes. I motsatt fall kan tekstene vi redigerer, miste funksjonalitet.<br />Ja = Fjern / Nei = Ikke fjern');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i nettleseren ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test i nettleseren uten &aring; sende overskrifter?<br /><span class="alrt">!!! M&aring; deaktiveres i live-drift av API-et!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Reqser API-n&oslash;kkelen" som er lagret her i modulen, stemmer ikke overens med den som er lagret p&aring; <i>reqser.com</i>.<br />Vennligst logg inn p&aring; <i>reqser</i>.com og sjekk API-n&oslash;kkelen, eller hent den om n&oslash;dvendig p&aring; nytt og lagre den her.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-n&oslash;kkel vellykket lagret');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Ingen API-n&oslash;kkel er lagt inn! Vennligst logg inn p&aring; <i>reqser.com</i> og hent API-n&oslash;kkelen for dette nettstedet, og lagre den her i modulen.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL FEIL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modulen har ikke valgt noe spr&aring;k &aring; oversette til!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Oversett til hvilke spr&aring;k?" m&aring; ikke inneholde et spr&aring;k som er valgt i "Oversett fra hvilket spr&aring;k?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', '%sDen manuelt tilf&oslash;rte tabellen <b>"</b> " ble ikke funnet i databasen. <b></b>' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Vennligst sjekk innstillingene for " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulen Reqser.com DeepL oversetter automatisk alle fremmedspr&aring;k som er aktivert i modulen for dette produktet etter lagring.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator-modulen har ingen API-n&oslash;kkel, vennligst skriv inn en API-n&oslash;kkel');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator-modulen er ikke aktivert, vennligst aktiver modulen under Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator-modulen har ingen tilkobling!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com-tilkoblingen sjekkes, vennligst vent.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'SEO-innstillinger lastes inn, vennligst vent.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Oppf&oslash;ringene dine er ikke fullstendige, vennligst sjekk:');