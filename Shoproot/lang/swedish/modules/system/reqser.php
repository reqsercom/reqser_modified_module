<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
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

* © copyright JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'AI-verktyg f&ouml;r &ouml;vers&auml;ttningar och SEO via Reqser <i>.</i>com, modulversion %s<br />- byggd f&ouml;r <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> och &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
 <i><a href="https://reqser.com/" target="_blank">Systemmodul f&ouml;r anslutning till DeepL, OpenAI och Neuroflash via</i> <i>reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grundl&auml;ggande inst&auml;llningar</h2>Aktivera modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Beg&auml;r API-nyckel');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Du kan ange API-nyckeln fr&aring;n <i>Reqser.com</i> h&auml;r. Visas n&auml;r du ansluter till Modified p&aring; Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direktl&auml;nk h&auml;r</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tempor&auml;r s&auml;kerhetstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tillf&auml;llig s&auml;kerhetstoken f&ouml;r externa f&ouml;rfr&aring;gningar till butiken.<br /><span  class="alrt">Tilldelas automatiskt !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Giltighet f&ouml;r den tillf&auml;lliga s&auml;kerhetstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Den tillf&auml;lliga s&auml;kerhetstoken &auml;r giltig till och med (se nedan).<br />N&auml;r den har l&ouml;pt ut kommer en ny att skapas p&aring; beg&auml;ran fr&aring;n en extern k&auml;lla och visas d&aring; h&auml;r.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Spr&aring;k tabeller</h2>Ge Reqser.com tillg&aring;ng till alla kolumner i den delade tabellen ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Yes" ger Reqser tillg&aring;ng till alla kolumnposter i de frigjorda tabellerna, "No" kan leda till fel med gamla shopversioner eller vid anv&auml;ndning av mallar som inte &auml;r standard.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databastabeller');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standarddatabastabeller som ska &ouml;vers&auml;ttas.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Ytterligare databastabeller');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'V&auml;lj ytterligare databastabeller som ska &ouml;vers&auml;ttas h&auml;r');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andra databastabeller (ej tillg&auml;ngliga f&ouml;r urvalet ovan)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Ange h&auml;r ytterligare databastabeller som ska &ouml;vers&auml;ttas, &aring;tskilda med kommatecken.<br />(F&ouml;r till&auml;gg med nya "icke-modifierade standard"-tabeller)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exklusive bord');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Ange h&auml;r de tabeller som ska uteslutas fr&aring;n &ouml;vers&auml;ttningar, &aring;tskilda med kommatecken.<br />(Endast n&ouml;dv&auml;ndigt om alla standardtabeller har valts ovan och vissa av dem ska undantas).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '&Ouml;vers&auml;tt fr&aring;n vilket spr&aring;k?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Fr&aring;n vilket spr&aring;k ska &ouml;vers&auml;ttningen g&ouml;ras?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Vilka spr&aring;k kan jag &ouml;vers&auml;tta till? ' . draw_tooltip('Ytterligare spr&aring;k kan l&auml;ggas till p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Vilka spr&aring;k ska &ouml;vers&auml;ttningen g&ouml;ras till?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engelska anv&auml;nds som US-engelska som standard');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'F&ouml;redrar du den brittiska stavningen?<br />Ja = brittisk / Nej = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Ytterligare inst&auml;llningar</h2>Ska ett nytt spr&aring;k f&aring; l&auml;ggas till p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Med denna inst&auml;llning inst&auml;lld p&aring; "Yes" kan nya spr&aring;k l&auml;ggas till p&aring; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Med "Nej" m&aring;ste spr&aring;ket redan finnas i butikssystemet och spr&aring;ket m&aring;ste aktiveras i den h&auml;r modulen.<br />Skapa spr&aring;k i butiken: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Skapa spr&aring;k i butiken ?</a> &nbsp;&nbsp;<span class="alrt">!! Det nya spr&aring;ket &auml;r tillg&auml;ngligt i butiken f&ouml;rst efter 24-48 timmar. !!</span><br />Markera sedan h&auml;r som spr&aring;k som ska &ouml;vers&auml;ttas');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('&Ouml;vers&auml;tta spr&aring;kfiler p&aring; servern? Alla filer p&aring; servern s&ouml;ks upp och &ouml;vers&auml;tts</br>Detta g&auml;ller &auml;ven spr&aring;kfilerna f&ouml;r moduler och till&auml;gg. Alla spr&aring;kfiler &aring;terskapas, inklusive befintliga spr&aring;k.<br />Som standard &ouml;vertas befintliga texter p&aring; fr&auml;mmande spr&aring;k i Reqser och &ouml;vers&auml;tts inte p&aring; nytt, men detta kan &auml;ndras i Reqser-inst&auml;llningarna.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Utan spr&aring;kfiler fungerar inget fr&auml;mmande spr&aring;k i butiken och det finns en "vit" sida!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '&Ouml;verf&ouml;ra spr&aring;kfiler automatiskt?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ska de &ouml;versatta spr&aring;kfilerna automatiskt &ouml;verf&ouml;ras till din butik eller ska varje spr&aring;kfil v&auml;ljas manuellt i Reqser?<br />Ja = &ouml;verf&ouml;ra spr&aring;kfiler automatiskt / Nej = &ouml;verf&ouml;ra manuellt');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>S&auml;kerhet</h2>Logga API-&aring;tkomst?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'B&ouml;r API-&aring;tkomst loggas?<br />(Loggar finns i <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'F&ouml;rhindra redigering av grundspr&aring;ket?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Redigering av grundspr&aring;ket b&ouml;r till&aring;tas s&aring; att s&ouml;kmotoroptimering av texterna kan ske p&aring; grundspr&aring;ket.<br />Ja = F&ouml;rhindra redigering / Nej = Till&aring;t redigering');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'B&ouml;r "scripte" och "iframe" strykas fr&aring;n texterna?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Om texterna inneh&aring;ller t.ex. YouTube-videor eller animationer ska dessa taggar inte tas bort. Annars kan de texter vi redigerar f&ouml;rlora sin funktionalitet.<br />Ja = Ta bort / Nej = Ta inte bort');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test i webbl&auml;saren ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testa i webbl&auml;saren utan att skicka headers?<br /><span class="alrt">!!! M&aring;ste avaktiveras i live-drift av API: et !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Den "Reqser API-nyckel" som lagras h&auml;r i modulen st&auml;mmer inte &ouml;verens med den som lagras p&aring; <i>reqser.com</i>.<br />V&auml;nligen logga in p&aring; <i>reqser</i>.com och kontrollera API-nyckeln eller, om n&ouml;dv&auml;ndigt, h&auml;mta den igen och spara den h&auml;r.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-nyckel framg&aring;ngsrikt lagrad');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Ingen API-nyckel har angetts! V&auml;nligen logga in p&aring; <i>reqser.com</i> och h&auml;mta API-nyckeln f&ouml;r denna webbplats och spara den h&auml;r i modulen.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL FEL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul inget spr&aring;k som ska &ouml;vers&auml;ttas till valt !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"&Ouml;vers&auml;tt till vilka spr&aring;k?" f&aring;r inte inneh&aring;lla ett spr&aring;k som har valts i "&Ouml;vers&auml;tt fr&aring;n vilket spr&aring;k?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', '%sDen manuellt tillagda tabellen <b>"</b> " kunde inte hittas i databasen. <b></b>' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' V&auml;nligen kontrollera inst&auml;llningarna f&ouml;r " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulen Reqser.com DeepL kommer automatiskt att &ouml;vers&auml;tta alla fr&auml;mmande spr&aring;k som &auml;r aktiverade i modulen f&ouml;r denna produkt efter att den har sparats.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator-modulen har ingen API-nyckel, v&auml;nligen ange en API-nyckel');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator-modulen &auml;r inte aktiverad, v&auml;nligen aktivera modulen under Modul->Systemmodul');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator-modulen har ingen anslutning!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Anslutningen till Reqser.com h&aring;ller p&aring; att kontrolleras, v&auml;nligen v&auml;nta.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'SEO-inst&auml;llningar laddas, v&auml;nligen v&auml;nta.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Dina uppgifter &auml;r inte fullst&auml;ndiga, v&auml;nligen kontrollera:');