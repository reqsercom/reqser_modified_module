<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 0.9 on the 23.10.2023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/swedish/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', '&Ouml;vers&auml;ttningar via <i>Reqser.com</i> och DeepL, modulversion %s<br />- byggd f&ouml;r <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> och &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> och &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Systemmodul f&ouml;r aktivering och konfiguration av &ouml;vers&auml;ttningar via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a><br /><span style="color:#c00;">!!! Om du vill &auml;ndra n&aring;got i din databasstruktur (kan ocks&aring; g&ouml;ras t.ex. av Wawis), s&aring; att t.ex. ID i tabeller som ska &ouml;vers&auml;ttas kan &auml;ndras, se till att inaktivera denna modul f&ouml;rst !!!</span>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', 'Aktivera modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'API-nyckel f&ouml;r beg&auml;ran');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Ange API-nyckeln f&ouml;r <i>Reqser.com</i> h&auml;r. Visas n&auml;r du ansluter till Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direktl&auml;nk h&auml;r</a> ');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_TITLE', 'Kontrollera API-nyckel?');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_DESC', 'Kontrollera API-nyckel live n&auml;r du sparar modulen?');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tillf&auml;llig s&auml;kerhetstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tillf&auml;llig s&auml;kerhetstoken f&ouml;r externa f&ouml;rfr&aring;gningar till butiken.<br /><span  class="alrt">Tilldelas automatiskt !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Giltighet f&ouml;r den tillf&auml;lliga s&auml;kerhetstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Den tillf&auml;lliga s&auml;kerhetstoken &auml;r giltig fram till (se nedan).<br />Om den har g&aring;tt ut skapas en ny p&aring; beg&auml;ran av en extern part, som sedan visas h&auml;r.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr />Ge Reqser.com tillg&aring;ng till alla kolumner i den delade tabellen?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" ger Reqser tillg&aring;ng till alla kolumnposter i de frisl&auml;ppta tabellerna, ett "Nej" kan leda till fel med gamla shopversioner eller icke-existerande poster.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'DB-tabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard DB-tabeller som skall &ouml;vers&auml;ttas.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Andra DB-tabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'V&auml;lj ytterligare DB-tabeller som ska &ouml;vers&auml;ttas h&auml;r');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Ytterligare DB-tabeller (som inte &auml;r tillg&auml;ngliga f&ouml;r urval ovan)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Ange h&auml;r ytterligare DB-tabeller, kommaseparerade, som skall &ouml;vers&auml;ttas.<br />(F&ouml;r till&auml;gg med nya "Ej modifierad standard" tabeller)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exklusive bord');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Ange h&auml;r kommaseparerade tabeller som ska exkluderas fr&aring;n &ouml;vers&auml;ttningar.<br />(Endast n&ouml;dv&auml;ndigt om alla standardtabeller &auml;r markerade ovan och n&aring;gra av dem ska exkluderas).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '<hr />&Ouml;vers&auml;tt fr&aring;n vilket spr&aring;k?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Fr&aring;n vilket spr&aring;k vill du &ouml;vers&auml;tta?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '&Ouml;vers&auml;tta till vilka spr&aring;k? ' . draw_tooltip('Om du v&auml;ljer ett spr&aring;k som tillh&ouml;r den modifierade standarden (t.ex. engelska):<br />I detta fall kan de tillh&ouml;rande spr&aring;kfilerna efter &ouml;vers&auml;ttning av Reqser skilja sig fr&aring;n de filer som levereras av modified.<br />Om du bara vill ha filer f&ouml;r till&auml;gg &ouml;versatta, st&auml;ll in "&Ouml;verf&ouml;r spr&aring;kfiler automatiskt ?"Nej"<br />P&aring; Reqser.com kan du &auml;ven st&auml;lla in om befintliga texter p&aring; fr&auml;mmande spr&aring;k ska &ouml;verf&ouml;ras eller om hela spr&aring;ket ska &ouml;vers&auml;ttas p&aring; nytt. och markera de filer som ska &ouml;vers&auml;ttas manuellt p&aring; reqser.com.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Vilka spr&aring;k b&ouml;r &ouml;vers&auml;ttas till?<br />F&ouml;r nya spr&aring;k, se en post h&ouml;gre upp.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelska anv&auml;nds som standard som amerikansk engelska');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'F&ouml;redrar du den brittiska stavningen?<br />Ja = brittisk / Nej = amerikansk');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', 'B&ouml;r ett nytt spr&aring;k till&aring;tas att l&auml;ggas till i <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Med denna inst&auml;llning p&aring; "Ja" kan nya spr&aring;k l&auml;ggas till i <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nej" m&aring;ste spr&aring;ket redan finnas i butikssystemet och spr&aring;ket m&aring;ste vara aktiverat i den aktuella modulen.<br />Skapa spr&aring;k i butik: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Skapa spr&aring;k i shop ?</a>   <span class="alrt">!! Det nya spr&aring;ket &auml;r endast tillg&auml;ngligt i butiken efter 24-48h. !!</span><br />Markera sedan h&auml;r som spr&aring;k som ska &ouml;vers&auml;ttas');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '<hr />&Ouml;vers&auml;tt spr&aring;kfiler p&aring; servern?' . draw_tooltip('Utan filsystemet måste språkfilerna för varje främmande språk läggas in separat i mappen lang/ och på alla andra platser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Alla filer p&aring; servern granskas och &ouml;vers&auml;tts.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '&Ouml;verf&ouml;ra spr&aring;kfiler automatiskt?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ska de &ouml;versatta spr&aring;kfilerna &ouml;verf&ouml;ras automatiskt till din butik eller ska varje spr&aring;kfil v&auml;ljas manuellt i Reqser?<br />Ja = spr&aring;kfiler automatiskt / Nej = &ouml;verf&ouml;rs manuellt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr />Logga API-&aring;tkomster?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Ska API-&aring;tkomster loggas?<br />(Loggar finns i <i>/api/reqser/logs/</i>).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i webbl&auml;saren?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testa i webbl&auml;saren utan att skicka headers?<br /><span class="alrt">!!! M&aring;ste vara inaktiverat i direkt drift av API:et !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Den "Reqser API-nyckel" som lagras h&auml;r i modulen st&auml;mmer inte &ouml;verens med den som lagras p&aring; <i>reqser.com</i>.<br />Logga in p&aring; <i>reqser.com</i> och kontrollera API-nyckeln, eller skaffa den igen vid behov och spara den h&auml;r.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-nyckel har deponerats framg&aring;ngsrikt');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Den beg&auml;rda "Reqser API Key" &auml;r tom och kan d&auml;rf&ouml;r inte j&auml;mf&ouml;ras med den som finns lagrad h&auml;r i modulen.<br />V&auml;nligen kontakta <i>reqser.com</i>.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL FEL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Inget spr&aring;k att &ouml;vers&auml;tta till har valts!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"&Ouml;vers&auml;tt till vilka spr&aring;k?" f&aring;r inte inneh&aring;lla ett spr&aring;k som valts i "&Ouml;vers&auml;tt fr&aring;n vilket spr&aring;k?');