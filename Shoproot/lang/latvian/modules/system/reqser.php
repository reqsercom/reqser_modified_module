<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.3 on the 18.12.3023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/latvian/modules/system/
* use: language file for system module
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* Edit by JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Automātiskie DeepL tulkojumi, izmantojot <i>Reqser.</i>com, moduļa versija %s<br />- <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> un &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Sistēmas modulis tulkojumu aktivizē&scaron;anai un konfigurē&scaron;anai, izmantojot <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Pamata iestatījumi</h2>Aktivizēt moduli?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Pieprasītāja API atslēga');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'API atslēgu no <i>Reqser.com</i> varat ievadīt &scaron;eit. Tiek parādīts, kad izveidots savienojums ar Modified vietnē Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Tie&scaron;ā saite &scaron;eit</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Pagaidu dro&scaron;ības žetons');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Pagaidu dro&scaron;ības žetons veikala ārējiem pieprasījumiem.<br /><span  class="alrt">Tiek pie&scaron;ķirts automātiski !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Pagaidu dro&scaron;ības žetona derīguma termiņ&scaron;');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Pagaidu dro&scaron;ības žetons ir derīgs līdz (sk. tālāk).<br />Kad tā derīguma termiņ&scaron; būs beidzies, pēc pieprasījuma no ārēja avota tiks izveidots jauns žetons, kas pēc tam tiks parādīts &scaron;eit.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Valodu tabulas</h2>Pie&scaron;ķirt Reqser.com piekļuvi visiem koplietojamās tabulas kolonnām ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Jā" nodro&scaron;ina Reqser piekļuvi visiem atbrīvoto tabulu kolonnu ierakstiem, "Nē" var izraisīt kļūdas, ja tiek izmantotas vecās veikala versijas vai ja tiek izmantoti nestandarta &scaron;abloni.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Datubāzes tabulas');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standarta datubāzes tabulas, kas jātulko.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Papildu datubāzes tabulas');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', '&Scaron;eit atlasiet citas datubāzes tabulas, kas tiks tulkotas');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Citas datubāzes tabulas (nav pieejamas iepriek&scaron; minētajai izvēlei)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', '&Scaron;eit ievadiet turpmākās datubāzes tabulas, kas jātulko, atdalot tās ar komatiem.<br />(Papla&scaron;inājumiem ar jaunām "nemodificētām standarta" tabulām)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Izslēgt galdus');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', '&Scaron;eit ievadiet tabulas, kas jāizslēdz no tulkojumiem, atdalot tās ar komatiem.<br />(Nepiecie&scaron;ams tikai tad, ja iepriek&scaron; ir izvēlētas visas standarta tabulas un dažas no tām ir jāizslēdz).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Tulkot no kuras valodas?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'No kuras valodas jāveic tulkojums?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Kurās valodās es varu tulkot? ' . draw_tooltip('Papildu valodas var pievienot vietnē <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Kurās valodās būtu jātulko?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Pēc noklusējuma angļu valoda tiek izmantota kā ASV angļu valoda');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Vai vēlaties lietot britu rakstību?<br />Jā = britu valodā / Nē = ASV');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Papildu iestatījumi</h2>Vai <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ir atļauts pievienot jaunu valodu?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Ja &scaron;im iestatījumam ir iestatīta vērtība "Jā", vietnē <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> var pievienot jaunas valodas.<br />Ja iestatījums ir "Nē", valodai jau ir jābūt veikala sistēmā, un valodai ir jābūt aktivizētai &scaron;ajā modulī.<br />Izveidot valodu veikalā: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '"> &amp;raquo Izveidot valodu veikalā ?</a>. &nbsp;&nbsp;<span class="alrt">!! Jaunā valoda veikalā būs pieejama tikai pēc 24-48 stundām. !!</span><br />Tad atzīmējiet &scaron;eit kā tulkojamo valodu');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Tulkot serverī eso&scaron;os valodas failus?' . draw_tooltip('Visi serverī eso&scaron;ie faili tiek pieprasīti un tulkoti</br>Tas attiecas arī uz moduļu un papla&scaron;inājumu valodas failiem. Tiek atjaunoti visi valodu faili, ieskaitot eso&scaron;ās valodas.<br />Pēc noklusējuma Reqser tiek pārņemti eso&scaron;ie sve&scaron;valodu teksti, nevis tulkoti no jauna, taču to var mainīt Reqser iestatījumos.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Bez valodas failiem veikalā nedarbojas neviena sve&scaron;valoda un ir "balta" lapa!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Vai valodas failus pārsūtīt automātiski?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Vai tulkotie valodu faili ir automātiski jāpārsūta uz jūsu veikalu, vai arī katrs valodas fails ir jāizvēlas manuāli Reqser programmā?<br />Jā = automātiski pārsūtīt valodas failus / Nē = pārsūtīt manuāli');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Dro&scaron;ība</h2>Reģistrēt API piekļuves?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Vai API piekļuves ir jāreģistrē?<br />(Žurnālus var atrast <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Testē&scaron;ana pārlūkprogrammā ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testē&scaron;ana pārlūkprogrammā, nenosūtot galvenes?<br /><span class="alrt">!!! Jādeaktivizē API tie&scaron;ajā darbībā !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Modulī saglabātā "Reqser API atslēga" nesakrīt ar atslēgu, kas saglabāta vietnē <i>reqser.com</i>.<br />Lūdzu, piesakieties vietnē <i>reqser</i>.com un pārbaudiet API atslēgu vai, ja nepiecie&scaron;ams, iegūstiet to vēlreiz un saglabājiet &scaron;eit.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Veiksmīgi saglabāta API atslēga');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'API atslēga nav ievadīta! Lūdzu, autorizējieties vietnē <i>reqser.com</i>, iegūstiet &scaron;īs vietnes API atslēgu un saglabājiet to &scaron;ajā modulī.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL kļūda:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Izvēlētā valoda nav tulkojama !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Tulkot uz kādām valodām?" nedrīkst ietvert valodu, kas tika izvēlēta sadaļā "Tulkot no kādas valodas?".');