<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 0.9 on the 23.10.2023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/english/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Translations via <i>Reqser.com</i> and DeepL, module version %s<br />- build for <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> and &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> System module for activation and configuration of translations via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a><br /><span style="color:#c00;">!!! If you want to change anything in your database structure (can be done e.g. by Wawis), so that e.g. IDs in tables to be translated can change, make sure to deactivate this module first !!!</span>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', 'Activate module ?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API key');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Enter the API key of <i>Reqser.com</i> here. Will be displayed when connecting to Modified on Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo direct link here</a> ');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_TITLE', 'Check API key ?');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_DESC', 'Check API key live when saving module ?');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Temporary security token');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Temporary security token for external queries to the store.<br /><span  class="alrt">Assigned automatically !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validity of the temporary security token');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'The temporary security token is valid until (see below).<br />When it expires, a new one is created on request from an external party and is then displayed here.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr />Give Reqser.com access to all columns of the shared table ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Yes" gives Reqser access to all column entries of the shared tables, a "No" can lead to errors with old store versions or non-existent entries.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'DB tables');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard DB tables that are to be translated.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Other DB tables');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Here you can select other DB tables to be translated');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Other DB tables (which are not available for selection above)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Enter here further DB tables comma-separated which should be translated<br />(For extensions with new "Not modified standard" tables)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exclude tables');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Enter here comma-separated tables to be excluded from translations<br />(Only necessary if all default tables are marked above and you want to exclude some of them).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '<hr />Translate from which language?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'From which language do you want to translate?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Translate to which languages ? ' . draw_tooltip('If you mark here a language which belongs to the modified standard (e.g. English):<br />In this case the associated language files after translation by Reqser can deviate from the files supplied by modified.<br />If you want to translate only files for extensions set "Transfer language files automatically ?"No"<br />On Reqser.com you can also set if already existing foreign language texts should be transferred or if the complete language should be retranslated. and mark the files to be translated manually on reqser.com.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Into which languages should be translated ?<br />For new languages, please see one entry higher.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'English is used by default as US English');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Do you prefer the British spelling ?<br />Yes = British / No = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', 'Should a new language be allowed to be added on <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'With this set to "Yes", new languages can be added to <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />With "No", the language must already exist in the store system and the language must be activated in the present module.<br />Create language in store: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Create language in store ?</a>   <span class="alrt">!! The new language will be available in the store only after 24-48h. !!</span><br />Then mark here as the language to be translated.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '<hr />Translate language files on the server?' . draw_tooltip('Without the file system, the language files in each foreign language must be maintained independently in the lang/ folder and in all other locations.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'All files on the server are queried and translated.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transfer language files automatically?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Should the translated language files be transferred to your store automatically or should each language file be selected manually in Reqser ?<br />Yes = language files automatically / No = transferred manually');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr />Log API accesses?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Should API accesses be logged?<br />(Logs can be found in <i>/api/reqser/logs/</i>).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test in the browser ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test in browser without sending headers?<br /><span class="alrt">!!! Must be disabled in live operation of the API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'The "Reqser API key" stored here in the module does not match the one stored at <i>reqser.com</i>.<br />Please log in at <i>reqser.com</i> and check the API key, or get it again if necessary and save it here.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API Key successfully deposited');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'The requested "Reqser API key" is empty and therefore cannot be compared to the one stored here in the module.<br />Please contact <i>reqser.com</i>.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'No language to translate into is selected !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Translate to which languages ?" must not contain a language selected in "Translate from which language ?".');