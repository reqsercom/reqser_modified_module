<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/slovak/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'N&aacute;stroje umelej inteligencie pre preklady a SEO cez Reqser <i>.</i>com, verzia modulu %s<br />- zostavenie pre <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> a &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Syst&eacute;mov&yacute; modul pre pripojenie k DeepL, OpenAI a Neuroflash prostredn&iacute;ctvom <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Z&aacute;kladn&eacute; nastavenia</h2>Aktivovať modul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Kľ&uacute;č API žiadateľa');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Kľ&uacute;č API m&ocirc;žete zadať zo str&aacute;nky <i>Reqser.com</i> tu. Zobrazuje sa pri pripojen&iacute; k službe Modified na port&aacute;li Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Priame prepojenie tu</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Dočasn&yacute; bezpečnostn&yacute; token');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Dočasn&yacute; bezpečnostn&yacute; token pre extern&eacute; dotazy do obchodu.<br /><span  class="alrt">Prideľuje sa automaticky !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Platnosť dočasn&eacute;ho bezpečnostn&eacute;ho tokenu');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Dočasn&yacute; bezpečnostn&yacute; token je platn&yacute; do (pozri niž&scaron;ie).<br />Po uplynut&iacute; jeho platnosti sa na požiadanie vytvor&iacute; nov&yacute; z extern&eacute;ho zdroja a potom sa tu zobraz&iacute;.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Jazykov&eacute; tabuľky</h2>Umožniť Reqser.com pr&iacute;stup ku v&scaron;etk&yacute;m stĺpcom zdieľanej tabuľky ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"&Aacute;no" umožňuje Reqseru pr&iacute;stup ku v&scaron;etk&yacute;m z&aacute;znamom stĺpcov uvoľnen&yacute;ch tabuliek, "Nie" m&ocirc;že viesť k chyb&aacute;m pri star&yacute;ch verzi&aacute;ch obchodu alebo pri použit&iacute; ne&scaron;tandardn&yacute;ch &scaron;abl&oacute;n.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabuľky datab&aacute;zy');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', '&Scaron;tandardn&eacute; tabuľky datab&aacute;zy, ktor&eacute; sa maj&uacute; preložiť.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Ďal&scaron;ie tabuľky datab&aacute;zy');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Tu vyberte ďal&scaron;ie tabuľky datab&aacute;zy, ktor&eacute; sa maj&uacute; preložiť');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Ostatn&eacute; tabuľky datab&aacute;zy (nie s&uacute; k dispoz&iacute;cii na v&yacute;ber vy&scaron;&scaron;ie)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Tu zadajte ďal&scaron;ie tabuľky datab&aacute;zy, ktor&eacute; sa maj&uacute; preložiť, oddelen&eacute; čiarkami.<br />(Pre roz&scaron;&iacute;renia s nov&yacute;mi "nemodifikovan&yacute;mi &scaron;tandardn&yacute;mi" tabuľkami)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Vyl&uacute;čiť tabuľky');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Tu zadajte tabuľky, ktor&eacute; sa maj&uacute; vyl&uacute;čiť z prekladov, oddelen&eacute; čiarkami.<br />(Je to potrebn&eacute; len vtedy, ak s&uacute; vy&scaron;&scaron;ie vybran&eacute; v&scaron;etky &scaron;tandardn&eacute; tabuľky a niektor&eacute; z nich sa maj&uacute; vyl&uacute;čiť).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Preložiť z ktor&eacute;ho jazyka?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Z ktor&eacute;ho jazyka sa m&aacute; preklad uskutočniť?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Do ktor&yacute;ch jazykov m&ocirc;žem prekladať? ' . draw_tooltip('Ďal&scaron;ie jazyky m&ocirc;žete pridať na <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Do ktor&yacute;ch jazykov by sa mala preložiť?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Angličtina sa predvolene použ&iacute;va ako americk&aacute; angličtina');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Uprednostňujete britsk&yacute; pravopis?<br />&Aacute;no = britsk&yacute; / Nie = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Ďal&scaron;ie nastavenia</h2>M&aacute; byť povolen&eacute; pridanie nov&eacute;ho jazyka na <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', '<a href="https://reqser.com/" target="_blank"></a> Ak je toto nastavenie nastaven&eacute; na možnosť "&Aacute;no", je možn&eacute; prid&aacute;vať nov&eacute; jazyky na <i>str&aacute;nku reqser.com</i>.<br />Pri nastaven&iacute; "Nie" mus&iacute; jazyk už existovať v syst&eacute;me obchodu a jazyk mus&iacute; byť aktivovan&yacute; v tomto module.<br />Vytvorenie jazyka v obchode: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Vytvoriť jazyk v obchode ?</a> &nbsp;&nbsp;<span class="alrt">!! Nov&yacute; jazyk je v obchode k dispoz&iacute;cii až po 24-48 hodin&aacute;ch. !!</span><br />Potom tu označte jazyk, ktor&yacute; sa m&aacute; preložiť');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Preložiť jazykov&eacute; s&uacute;bory na serveri? V&scaron;etky s&uacute;bory na serveri s&uacute; vyhľadan&eacute; a preložen&eacute;</br>To sa t&yacute;ka aj jazykov&yacute;ch s&uacute;borov modulov a roz&scaron;&iacute;ren&iacute;. V&scaron;etky jazykov&eacute; s&uacute;bory s&uacute; preložen&eacute;, vr&aacute;tane existuj&uacute;cich jazykov.<br />V predvolenom nastaven&iacute; sa preberaj&uacute; existuj&uacute;ce cudzojazyčn&eacute; texty v programe Reqser a neprekladaj&uacute; sa nanovo, ale to možno zmeniť v nastaveniach programu Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Bez jazykov&yacute;ch s&uacute;borov nefunguje v obchode žiadny cudz&iacute; jazyk a je tam "biela" str&aacute;nka!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Automatick&yacute; prenos jazykov&yacute;ch s&uacute;borov?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Mali by sa preložen&eacute; jazykov&eacute; s&uacute;bory automaticky preniesť do v&aacute;&scaron;ho obchodu alebo by sa mal každ&yacute; jazykov&yacute; s&uacute;bor vybrať ručne v programe Reqser?<br />&Aacute;no = prenos jazykov&yacute;ch s&uacute;borov automaticky / Nie = prenos manu&aacute;lne');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Zabezpečenie</h2>Zaznamen&aacute;vať pr&iacute;stupy API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Mali by sa pr&iacute;stupy k API zaznamen&aacute;vať?<br />(Logy n&aacute;jdete v <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Zabr&aacute;niť &uacute;prave z&aacute;kladn&eacute;ho jazyka?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', '&Uacute;prava z&aacute;kladn&eacute;ho jazyka by mala byť povolen&aacute;, aby bolo možn&eacute; optimalizovať texty pre vyhľad&aacute;vače v z&aacute;kladnom jazyku.<br />&Aacute;no = Zabr&aacute;niť &uacute;prav&aacute;m / Nie = Povoliť &uacute;pravy');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'Mali by sa z textov odstr&aacute;niť slov&aacute; "scripte" a "iframe"?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Ak s&uacute; s&uacute;časťou textov napr&iacute;klad vide&aacute; z YouTube alebo anim&aacute;cie, tieto značky by sa nemali odstraňovať. V opačnom pr&iacute;pade by upravovan&eacute; texty mohli stratiť funkčnosť.<br />&Aacute;no = Odstr&aacute;niť / Nie = Neodstraňovať');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test v prehliadači ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testovanie v prehliadači bez odosielania hlavičiek?<br /><span class="alrt">!!! Mus&iacute; byť deaktivovan&eacute; v živej prev&aacute;dzke API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Kľ&uacute;č API Reqser uložen&yacute; v module sa nezhoduje s kľ&uacute;čom uložen&yacute;m na str&aacute;nke <i>reqser.com</i>.<br />Prihl&aacute;ste sa na str&aacute;nku <i>reqser</i>.com a skontrolujte kľ&uacute;č API, pr&iacute;padne ho znovu nač&iacute;tajte a uložte sem.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Kľ&uacute;č API &uacute;spe&scaron;ne uložen&yacute;');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Nebol zadan&yacute; žiadny kľ&uacute;č API! Prihl&aacute;ste sa na <i>str&aacute;nku reqser.com</i>, z&iacute;skajte kľ&uacute;č API pre t&uacute;to webov&uacute; str&aacute;nku a uložte ho sem do modulu.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul nie je vybran&yacute; žiadny jazyk, do ktor&eacute;ho sa m&aacute; prekladať !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Preložiť do ktor&yacute;ch jazykov?" nesmie obsahovať jazyk, ktor&yacute; bol vybran&yacute; v položke "Preložiť z ktor&eacute;ho jazyka?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Ručne pridan&aacute; tabuľka <b>"%s"</b> sa v datab&aacute;ze nena&scaron;la.' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Skontrolujte pros&iacute;m nastavenia pre " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modul Reqser.com DeepL po uložen&iacute; automaticky prelož&iacute; v&scaron;etky cudzie jazyky aktivovan&eacute; v module pre tento produkt.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Modul Deepl Translator od Reqser.com nem&aacute; kľ&uacute;č API, zadajte pros&iacute;m kľ&uacute;č API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator modul nie je aktivovan&yacute;, aktivujte modul v časti Module->Syst&eacute;mov&yacute; modul');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Modul Reqser.com Deepl Translator nem&aacute; žiadne pripojenie!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Prebieha kontrola pripojenia Reqser.com, počkajte, pros&iacute;m.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'Nač&iacute;tavaj&uacute; sa nastavenia SEO, počkajte, pros&iacute;m.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Va&scaron;e &uacute;daje nie s&uacute; &uacute;pln&eacute;, skontrolujte ich:');