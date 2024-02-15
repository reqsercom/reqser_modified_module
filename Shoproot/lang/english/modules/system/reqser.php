<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.8 on the 15.02.2024
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

* © copyright JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatic DeepL translations via Reqser <i>.</i>com, module version %s<br />- build for <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> and &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> System module for the activation and configuration of translations via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Basic settings</h2>Activate module?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API key');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'You can enter the API key from <i>Reqser.com</i> here. Is displayed when connecting to Modified on Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Direct link here</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Temporary security token');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Temporary security token for external queries to the store.<br /><span  class="alrt">Is assigned automatically !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validity of the temporary security token');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'The temporary security token is valid until (see below).<br />When it has expired, a new one will be created externally on request and will then be displayed here.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Language tables</h2>Give Reqser.com access to all columns of the shared table ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Yes" gives Reqser access to all column entries of the released tables, a "No" can lead to errors with old store versions or when using non-standard templates.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Database tables');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard database tables to be translated.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Further database tables');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Select further database tables to be translated here');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Other database tables (not available for selection above)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Enter further database tables to be translated here, separated by commas.<br />(For extensions with new "non-modified standard" tables)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exclude tables');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Enter the tables to be excluded from translations here, separated by commas.<br />(Only necessary if all standard tables are marked above and some of them are to be excluded).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Translate from which language?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'From which language should the translation be done?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Which languages can I translate into? ' . draw_tooltip('Additional languages can be added at <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Which languages should be translated into?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'English is used as US English by default');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Would you prefer the British spelling?<br />Yes = British / No = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Further settings</h2>Should a new language be allowed to be added on <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'With this setting set to "Yes", new languages can be added to <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />With "No", the language must already exist in the store system and the language must be activated in this module.<br />Create language in the store: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Create language in store ?</a> &nbsp;&nbsp;<span class="alrt">!! The new language is only available in the store after 24-48 hours. !!</span><br />Then mark here as language to be translated');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Translate language files on the server?' . draw_tooltip('All files on the server are queried and translated</br>This also applies to the language files of the modules and extensions. All language files are regenerated, including existing languages.<br />By default, existing foreign language texts in Reqser are adopted and not newly translated, but this can be changed in the Reqser settings.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Without language files, no foreign language works in the store and there is a "white" page!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transfer language files automatically?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Should the translated language files be automatically transferred to your store or should each language file be selected manually in Reqser?<br />Yes = transfer language files automatically / No = transfer manually');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Security</h2>Log API accesses?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Should API accesses be logged?<br />(Logs can be found in <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test in the browser ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test in the browser without sending headers?<br /><span class="alrt">!!! Must be deactivated in live operation of the API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'The "Reqser API key" stored here in the module does not match the one stored at <i>reqser.com</i>.<br />Please log in to <i>reqser</i>.com and check the API key or, if necessary, retrieve it again and save it here.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API key successfully deposited');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'No API key has been entered! Please log in to <i>reqser.com</i> and get the API key for this website and save it here in the module.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'No language to be translated into selected !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Translate to which languages?" must not contain a language that was selected in "Translate from which language?".');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'The Reqser.com DeepL module will automatically translate all foreign languages activated in the module for this product after saving.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator module has no API key, please provide an API key');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator module not activated, please activate the module under Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator module has no connection!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com connection is being checked, please wait.');