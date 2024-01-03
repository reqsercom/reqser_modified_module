<?php
/***********************************************************
* file: ClassReqser.php
* path: /includes/external/api_local/classes/reqser/
* use: methods for reqser requests
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © 08-2023 by JorisK Reqser.com

***********************************************************/

namespace api_local\reqser;

require_once(DIR_FS_EXTERNAL.'api_local/classes/ApiBase.php');
use api_local;

defined('ENCODE_DEFINED_CHARSETS') || define('ENCODE_DEFINED_CHARSETS','ASCII,UTF-8,ISO-8859-1,ISO-8859-15,cp866,cp1251,cp1252,KOI8-R,GB18030,SJIS,EUC-JP');

class ClassReqser extends api_local\ApiBase {
  public $browser_mode, $protoc;
  protected $api_reqser_version, $dev_mode, $allowed_methods, $log_path, $shop_languages, $path, $path_file_name;
  private $write_control_mode, $at, $mt, $mtad, $lt, $aara, $fwl, $iwl, $lf, $ala;

  /**  
   * ClassReqser constructor
   *
   * @param sub-path for /api/ (here 'reqser')
   * @return NULL
   */
  public function __construct($subp = '') {
    parent::__construct($subp);

    $this->api_reqser_version = '2.3';
    $this->browser_mode = false;
    $this->dev_mode = true;
    $this->write_control_mode = false;

    $this->protoc = defined('MODULE_SYSTEM_REQSER_PROTOCOL_ACC') && MODULE_SYSTEM_REQSER_PROTOCOL_ACC == 'true' ? true : false;
    $this->log_path = DIR_FS_API.$subp.'/logs/';

    $this->shop_languages = parent::getShopLanguages();

    $this->at = defined('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL') && MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL != '' ? preg_replace('#[^a-z0-9_\,]#i','',MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL) : '';
    $this->mt = defined('MODULE_SYSTEM_REQSER_MORE_TABLES') && MODULE_SYSTEM_REQSER_MORE_TABLES != '' ? preg_replace('#[^a-z0-9_\,]#i','',MODULE_SYSTEM_REQSER_MORE_TABLES) : '';
    $this->mtad = defined('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD') && MODULE_SYSTEM_REQSER_MORE_TABLES_ADD != '' ? preg_replace('#[^a-z0-9_\,]#i','',MODULE_SYSTEM_REQSER_MORE_TABLES_ADD) : '';
    $this->lt = defined('MODULE_SYSTEM_REQSER_LESS_TABLES') && MODULE_SYSTEM_REQSER_LESS_TABLES != '' ? preg_replace('#[^a-z0-9_\,]#i','',MODULE_SYSTEM_REQSER_LESS_TABLES) : '';
    $this->aara = defined('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS') && MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS == 'true';

    $this->fwl = defined('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG') && MODULE_SYSTEM_REQSER_FROM_WHICH_LANG != '' ? preg_replace('#[^0-9]#', '', MODULE_SYSTEM_REQSER_FROM_WHICH_LANG) : '';
    $this->iwl = defined('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS') && MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS != '' ? preg_replace('#[^0-9\,]#i', '', MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS) : '';
    $this->fwl_and_iwl_arr = array('fwl' => $this->fwl, 'iwl' => explode(',', $this->iwl)); //new var for all allowed langs, noRiddle, 10-2023
    $this->lf = defined('MODULE_SYSTEM_REQSER_LANGUAGE_FILES') && MODULE_SYSTEM_REQSER_LANGUAGE_FILES == 'true';
    $this->ala = defined('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED') && MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED == 'true';

    //JorisK all allowed Path for Files Translation
    $this->path = array(
      'root_language' => DIR_FS_CATALOG . 'lang/',
      'template' => DIR_FS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/lang/',
      'template_admin_mail' => DIR_FS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/admin/mail/',
      'template_mail' => DIR_FS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/mail/',
      'admin' => DIR_FS_CATALOG . (defined('DIR_ADMIN') ? DIR_ADMIN : 'admin/') . 'lang/',
      'magnalister' => DIR_FS_CATALOG . 'includes/external/magnalister/lang/',
      'payone' => DIR_FS_CATALOG . 'includes/external/payone/lang/',
      'paypal' => DIR_FS_CATALOG . 'includes/external/paypal/lang/',
      'shopgate' => DIR_FS_CATALOG . 'includes/external/shopgate/base/lang/',
    );

    //JorisK werden nicht in allen Templates verwendet
    if(file_exists(DIR_FS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/buttons/')) {
      $this->path['template_buttons'] = DIR_FS_CATALOG . 'templates/' . CURRENT_TEMPLATE . '/buttons/';
    } 

    //JorisK Files Sturkturen die kein eigenen Ordner pro Sprache haben sondern anhand vom Dateiname erkannt werden
    $this->path_file_name = array('template', 'payone', 'paypal');

    $this->allowed_methods = array('api_calls' => array('info' => array('method' => 'get',
                                                                        'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/api_calls/info',
                                                                                        'desc' => 'get information about possible shop API calls',
                                                                                        'returns' => 'an array with the possible shop API calls',
                                                                                        'api_base_version' => $this->getApiBaseVersion(),
                                                                                        'module_version' => $this->getApiReqserVersion(),
                                                                                        'shop_version' => $this->getShopVersion(),
                                                                                        'files_activated' => ($this->lf === true ? '1' : '0'),
                                                                                        'files_automated' => (($this->lf === true && MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING == 'true') ? '1' : '0'),
                                                                                        'language_add_allowed' => ($this->ala === true ? '1' : '0'),
                                                                                        'reseller_id' => $this->getResellerId(),
                                                                                       )
                                                                       )
                                                       ),
                            
                                   'temp_token' => array('fetch' => array('method' => 'get',
                                                                          'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/temp_token/fetch',
                                                                                          'desc' => 'get token for shop API calls (valid 1 month)',
                                                                                          'returns' => 'an array with the token and its expiry'
                                                                                         )
                                                                         ),
                                                         'renew' => array('method' => 'get',
                                                                          'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/temp_token/renew',
                                                                                          'desc' => 'renew token (e.g. because expired) for shop API calls (valid 1 month)',
                                                                                          'returns' => 'an array with the token and its expiry'
                                                                                         )
                                                                         )
                                                        ),
                                   'languages' => array('data' => array('method' => 'get',
                                                                        'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/languages/data',
                                                                                        'returns' => 'an array with the available languages, its charsets, its ISO-2 Code and if the language is activated in the shop'
                                                                                       )
                                                                       ),
                                                        'add_language' => array('method' => 'post',
                                                                                'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/languages/add_language',
                                                                                                'params' => 'an array to add or update to table languages',
                                                                                                'desc' => 'write new foreign language to shop DB',
                                                                                                'return' => 'a success or on failure an error message'
                                                                                               )
                                                                               ),
                                                       ),
                                   'tables' => array('which_translate' => array('method' => 'get',
                                                                                'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/tables/which_translate',
                                                                                                'returns' => 'an array with the allowed tables with fields to be translated'
                                                                                               )
                                                                               ),
                                                     'count_tbl_records' => array('method' => 'get',
                                                                                  'params' => array('table', 'lang', 'language_field', 'use_language_code'),
                                                                                  'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/tables/count_tbl_records?table=X&lang=Y&language_field=Z',
                                                                                                  'params' => array('table=TABLE_NAME' => 'for the specified table',
                                                                                                                    'lang=ISO_CODE' => 'for the specified language (e.g. de, for German, en for English, fr for french, etc.)',
                                                                                                                    'language_field=LANGUAGE_FIELD' => 'row name of language field',
                                                                                                                    'use_language_code=BOOLEAN' => 'use language code instead of language id',
                                                                                                                   ),
                                                                                                  'desc' => 'count table records',
                                                                                                  'returns' => 'an array with the number of records'
                                                                                                 )
                                                                                 ),
                                                     'get_transfields' => array('method' => 'get',
                                                                                'params' => array('table', 'unique_field', 'lang', 'language_field', 'use_language_code', 'select_fields', 'from', 'chunks'),
                                                                                'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/tables/get_transfields?table=X&unique_field=Y&lang=Z&from=A&chunks=C',
                                                                                                'params' => array('table=TABLE_NAME' => 'for the specified table',
                                                                                                                  'lang=ISO_CODE' => 'for the specified language (e.g. de, for German, en for English, fr for french, etc.)',
                                                                                                                  'language_field' => 'row name of language field',
                                                                                                                  'use_language_code' => 'use language code instead of language id',
                                                                                                                  'select_fields' => 'answers fields needed',
                                                                                                                  'from' => 'counter for chunks',
                                                                                                                  'chunks' => 'how many records in one call for chunks'
                                                                                                                 ),
                                                                                                'desc' => 'get content of fields of shop DB to be translated',
                                                                                                'returns' => 'an array with the contents of the fields in the requested language'
                                                                                               )
                                                                               ),
                                                     'write_transfields' => array('method' => 'post',
                                                                                  'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/tables/write_transfields',
                                                                                                  'params' => 'an array of the same structure as provided by the method get_transfields',
                                                                                                  'desc' => 'write translations to fields in shop DB, should happen in chunks',
                                                                                                  'return' => 'a success or on failure an error message'
                                                                                                 )
                                                                                 ),
                                                     'get_table_row_information' => array('method' => 'get',
                                                                                          'params' => array('table'),
                                                                                          'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/tables/get_table_row_information?table=X',
                                                                                                          'params' => array('table=TABLE_NAME' => 'for the specified table'),
                                                                                                          'desc' => 'get row names and type',
                                                                                                          'returns' => 'an array with the row information, needed to add more than predefined rows for translation'
                                                                                                         )
                                                                                         ),
                                                  ),
                                   'files' => array('get_all_language_files' => array('method' => 'get',
                                                                                      'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/files/get_all_language_files',
                                                                                                      'desc' => 'get all language files',
                                                                                                      'returns' => 'returns all files',
                                                                                                     )
                                                                                     ),
                                                    'get_file' => array('method' => 'get',
                                                                        'params' => array('file'),
                                                                        'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/files/get_file?file=X',
                                                                                        'params' => array('file=FILE_NAME' => 'for the specified file path beginning from root without beginning slash'),
                                                                                        'desc' => 'get a base64 encoded file',
                                                                                        'returns' => 'Returns the File as base64 encoded string'
                                                                                       )
                                                                       ),
                                                    'send_file' => array('method' => 'post',
                                                                         'expl' => array('call' => HTTPS_SERVER.'/api/reqser/connector.php/files/send_file',
                                                                                         'params' => 'an array of data',
                                                                                         'desc' => 'recieve a base64 encoded file',
                                                                                         'returns' => 'bool or error'
                                                                                        )
                                                                        ),

                                                  ),
                                  );
  }

  /**  
   * public method getApiReqserVersion
   *
   * @return version of present reqser api (which is an extension of BaseApi with its own version)
   */
  public function getApiReqserVersion() {
    return $this->api_reqser_version;
  }
  
  /**  
   * public method getAllowedMethods
   *
   * @return allowed REST requests
   */
  public function getAllowedMethods() {
    return $this->allowed_methods;
  }

  //******* methods for REST calls *******

  /**  
   * private method callApi_callsInfo
   *
   * @return allowed API call methods
   */
  protected function callApi_callsInfo() {
    return $this->allowed_methods;
  }

  /**  
   * private method callTemp_tokenFetch
   *
   * @return token
   */
  protected function callTemp_tokenFetch() {
    return $this->getToken('fetch');
  }

  /**  
   * private method callTemp_tokenRenew
   *
   * @return token
   */
  protected function callTemp_tokenRenew() {
    return $this->getToken('renew');
  }
  
      /**  
   * private method callFilesGet_all_language_files
   *
   * @return array with language files to be translated
   */
  protected function callFilesGet_all_language_files() {
    if($this->lf === false)
      return array('error' => 'Get_all_language_files not allowed!');

    $return_array = array();
    $fwl_array = array(); //initialize param, noRiddle, 10-2023
    $iwl_array = array();//initialize param, noRiddle, 10-2023

    $iwl_arr = explode(',', $this->iwl);
    if($this->fwl != '') {
      //BOC use new param for getShopLanguages(), noRiddle, 10-2023
      $language_array = $this->getShopLanguages('languages_id');
      if(is_array($language_array) && sizeof($language_array) > 0) {
        if(array_key_exists($this->fwl, $language_array)) {
          $fwl_array = $language_array[$this->fwl];
        }
        if(sizeof($iwl_arr) > 0) {
          foreach($iwl_arr as $iwl_id) {
            if(array_key_exists($iwl_id, $language_array)) {
              $iwl_array[] = $language_array[$iwl_id];
            }
          }
        }
        //EOC use new param for getShopLanguages(), noRiddle, 10-2023

        if(count($fwl_array) > 0) {
          //Get Files from muttersprache
          //Check if Folder exists 
          if($fwl_array['directory'] != '') {
            if(!isset($return_array['fwl'][$fwl_array['directory']])) {
              $return_array['fwl'][$fwl_array['directory']] = array();
            }
            foreach($this->path as $key => $basePath) {
              $pathToCheck = $basePath . $fwl_array['directory'];
              $basePathNoSlash = substr($basePath, 0, -1);
              if(file_exists($pathToCheck)) {
                // Append the result to the array
                $return_array['fwl'][$fwl_array['directory']] = array_merge($return_array['fwl'][$fwl_array['directory']], $this->scanAllFiles($pathToCheck));
              } elseif(file_exists($basePathNoSlash) && in_array($key, $this->path_file_name)) {
                $return_array['fwl'][$fwl_array['directory']] = array_merge($return_array['fwl'][$fwl_array['directory']], $this->scanAllFiles($basePathNoSlash));
              } 
            }
          }
          if(count($iwl_array) > 0) {
            foreach($iwl_array as $iwl) {
              if($iwl['directory'] != '') {
                if(!isset($return_array['iwl'][$iwl['directory']])) {
                  $return_array['iwl'][$iwl['directory']] = array();
                } 
                foreach($this->path as $key => $basePath) {
                  $pathToCheck = $basePath . $iwl['directory'];
                  $basePathNoSlash = substr($basePath, 0, -1);
                  if(file_exists($pathToCheck)) {
                    // Append the result to the array
                    $return_array['iwl'][$iwl['directory']] = array_merge($return_array['iwl'][$iwl['directory']], $this->scanAllFiles($pathToCheck));
                  } elseif(file_exists($basePathNoSlash) && in_array($key, $this->path_file_name)) {
                    $return_array['iwl'][$iwl['directory']] = array_merge($return_array['iwl'][$iwl['directory']], $this->scanAllFiles($basePathNoSlash));
                  } 
                }
              }
            }
          }
        }
      }
    }
    return $return_array;
  }

  /**  
   * private method scanAllFiles
   *
   * @return array with relative file paths
   */
  private function scanAllFiles($dir) {
    $files = array();
    $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir), \RecursiveIteratorIterator::SELF_FIRST);

    foreach($iterator as $fileinfo) {
      if($fileinfo->isFile()) {
        $relativePath = substr($fileinfo->getPathname(), strlen(DIR_FS_CATALOG));
        $files[] = $relativePath;
      }
    }

    return $files;
  }

  /**  
   * private method callLanguagesAdd_language
   *
   * @return array with success or error message
   */
  protected function callLanguagesAdd_language() { //made code more concise, noRiddle, 10-2023
    $return_array = array();
    $check_langs_arr = $this->getShopLanguages();
    $iwl_arr = explode(',', $this->iwl);

    $received_data = file_get_contents('php://input');
    if($received_data != '') {
      if($this->ala !== true) return array('error' => 'Add Language not allowed!', 'add_language_not_allowed' => true);
      $dec_rec_data = json_decode($received_data, true);
      if($this->fwl == (int)$this->shop_languages[strtolower($dec_rec_data['language_code'])]['languages_id'])
        return array('error' => 'adding language '.$dec_rec_data['language_code'].' not allowed, it is "from which language to tanslate"!');

      if($dec_rec_data['language_charset'] == '') {
        $language_array = $this->getShopLanguages('languages_id');
        if(array_key_exists($this->fwl, $language_array)) {
          $dec_rec_data['language_charset'] = $language_array[$this->fwl]['language_charset'];
        } else {
          return array('error' => '"from which language to tanslate" is not in array of shop languages! Language_charset could not be determined');
        }
      }
      if(!array_key_exists($dec_rec_data['code'], $check_langs_arr)) { //Prüfen ob es language_code schon gibt
        $ins_qu_str = "INSERT INTO languages (name, code, image, directory, sort_order, language_charset, status, status_admin) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $ins_vals_arr = array($dec_rec_data['name'],
                              nr_input_validation($dec_rec_data['code'], 'lang'),
                              $dec_rec_data['image'],
                              $dec_rec_data['directory'],
                              (int)$dec_rec_data['sort_order'],
                              $dec_rec_data['language_charset'],
                              (int)$dec_rec_data['status'],
                              (int)$dec_rec_data['status_admin']
                             );
        if($ins_qu = $this->api_db_conn->apiDbQuery($ins_qu_str, $ins_vals_arr)) {
          $new_lang_id = $this->api_db_conn->apiDbLastInsertId();
          $this->api_db_conn->apiDbStmtClose($ins_qu);
          $return_array = array('success' => 'new language '.$dec_rec_data['code'].' created in DB table languages');
        } else {
          return array('error' => 'new language '.$dec_rec_data['code'].' could not be created in DB table languages');
        }
        //JorisK Sprache zu Translate Array hinzufügen
        if(isset($new_lang_id)) { //added condition, noRiddle, 10-2023
          $iwl_arr[] = $new_lang_id;
        }

        //BOC configuration
        //JorisK Prüfen ob für diese Sprache die Configuration Keys exisitieren, falls nicht erweitern
        //Hier wird einfachheitshalber immer der Englische verwendet, falls nicht vorhanden der erste Eintrag kopiert
        $configuration_email_key_array = array('CONTACT_US_EMAIL_ADDRESS',
                                         'CONTACT_US_REPLY_ADDRESS',
                                         'EMAIL_SUPPORT_ADDRESS',
                                         'EMAIL_SUPPORT_REPLY_ADDRESS',
                                         'EMAIL_BILLING_ADDRESS',
                                         'EMAIL_BILLING_REPLY_ADDRESS',
                                         'EMAIL_BILLING_FORWARDING_STRING',
                                         'CONTACT_US_EMAIL_SUBJECT',
                                         'EMAIL_SUPPORT_NAME',
                                         'EMAIL_SUPPORT_SUBJECT',
                                         'EMAIL_BILLING_NAME',
                                         'EMAIL_BILLING_SUBJECT',
                                         'EMAIL_BILLING_SUBJECT_ORDER',
                                         'CUSTOM_SHIPPING_TITLE',
                                         'CONTACT_US_NAME');
        foreach($configuration_email_key_array as $configuration_email_key) {
          if(defined($configuration_email_key)) {
            $check_for_entry = explode("||", constant($configuration_email_key));
            $current_language_exists = false;
            $english_entry_found = false;
            foreach($check_for_entry as $entry) {
              if(strpos($entry, strtoupper($dec_rec_data['code']).'::') !== false) {
                $current_language_exists = true;
              } 
              if(strtoupper($dec_rec_data['code']) != 'EN' && strpos($entry, 'EN::') !== false) {
                $english_entry_found = $entry;
              }
            }
            if($current_language_exists == false && sizeof($check_for_entry) > 0) {
              //JorisK den englischen Eintrag kopieren, falls nicht vorhanden den ersten Eintrag
              if($english_entry_found == false) {
                $check_for_entry[] = strtoupper($dec_rec_data['code']).'::'.substr($check_for_entry[0], strpos($check_for_entry[0], '::')+2);
              } else {
                $check_for_entry[] = strtoupper($dec_rec_data['code']).'::'.substr($english_entry_found, strpos($english_entry_found, '::')+2);
              }
              $updated_entry = implode("||", $check_for_entry);
              $upd_conf_qu_str = "UPDATE configuration SET configuration_value = '".$updated_entry."' WHERE configuration_key = ?";
              if($upd_qu = $this->api_db_conn->apiDbQuery($upd_conf_qu_str, $configuration_email_key)) {
                $this->api_db_conn->apiDbStmtClose($upd_qu);
              }
            }
          }
        }
        //EOC configuration

      } else {
        //JorisK Sprache existiert bereits somit alles i.o.
        if($dec_rec_data['set_active'] == 'true') {
          $upd_qu_str = "UPDATE languages SET status = 1, status_admin = 1 WHERE code = ?";
          if($upd_qu = $this->api_db_conn->apiDbQuery($upd_qu_str, nr_input_validation($dec_rec_data['code'], 'lang'))) {
            $this->api_db_conn->apiDbStmtClose($upd_qu);
            $return_array = array('success' => 'status of language '.$dec_rec_data['code'].' activated');
          }
        }
        //Get the Language ID and add to the $iwl_array
        $iwl_arr[] = $check_langs_arr[$dec_rec_data['code']]['languages_id'];
      }
      if(count($iwl_arr) > 0) {
        sort($iwl_arr);
        $upd_conf_qu_str = "UPDATE configuration SET configuration_value = ? WHERE configuration_key = ?";
        if($upd_conf_qu = $this->api_db_conn->apiDbQuery($upd_conf_qu_str, implode(',', $iwl_arr), 'MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS')) {
          $this->api_db_conn->apiDbStmtClose($upd_conf_qu);
          if(isset($return_array['success'])) {
            $return_array['success'] .= ' and language '.$dec_rec_data['code'].' added to "Into which languages shall be translated"';
          } else {
            $return_array['success'] = 'Language '.$dec_rec_data['code'].' added to "Into which languages shall be translated"';
          }
          
        } else {
          return array('error' => 'new language '.$dec_rec_data['code'].' could not be added to "Into which languages shall be translated" in DB table configuration');
        }
      }
    } else {
      $return_array = array('error' => 'Empty Request Send File');
    }
    return $return_array;
  }

  /**  
   * private method callFilesSend_file
   * 
   * @return array with success or error message
   */
  protected function callFilesSend_file() { //made code more concise, noRiddle, 10-2023
    $received_data = file_get_contents('php://input');
    if($received_data != '') {
      $dec_rec_data = json_decode($received_data, true);
      if($this->lf === false)
        return array('error' => 'Send File not allowed!');

      $dec_rec_data = $this->purifyResp($dec_rec_data); //sanitize, noRiddle, 08-2023
      $langs_arr = $this->getShopLanguages('directory');

      //Prüfen ob language_directory in zu übersetzenden Sprachen drin
      if(!array_key_exists($dec_rec_data['lang_directory'], $langs_arr)) {
        return array('error' => 'Language Directory not allowed! '.$dec_rec_data['type'].' '.$dec_rec_data['lang_directory'].' '.json_encode($langs_arr));
      } 

      //Prüfen ob die Sprache auch in den zu übersetzenden Sprachen vorhanden ist 
      $iwl_erlaubt = false;
      $iwl_arr = explode(',', $this->iwl);
      if(in_array($langs_arr[$dec_rec_data['lang_directory']]['languages_id'], $iwl_arr)) {
        $iwl_erlaubt = true;
      }

      $directory = DIR_FS_CATALOG.$dec_rec_data['file_name'];
      //Prüfen ob directory erlaubt 
      $directory_erlaubt = false;
      foreach($this->path as $key => $path) {
        if($path == substr($directory, 0, strlen($path))) {
          $directory_erlaubt = true;
          break; //stop loop, noRiddle, 10-2023
        }
      }
      //Prüfen ob es in den erlaubten Sprachordner schreibt 
      $sprache_erlaubt = false;
      $path_components = explode('/', $dec_rec_data['file_name']);
      foreach($langs_arr as $dir => $lang_vals_arr) {
        if(in_array($dir, $path_components) || strpos(basename($dec_rec_data['file_name']), $dir) !== false) {
          $sprache_erlaubt = true;
          break;
        }
      }

      if($directory_erlaubt === true && $sprache_erlaubt === true && $iwl_erlaubt === true) {
        $filename = $dec_rec_data['file_name'];
        $directory = dirname($filename);
   
        $fullPath = $filename;
        // Check if directory exists
        if(!file_exists($directory)) {
          // If not, create the directory
          mkdir($directory, 0777, true);  // 0777 is the default mode. 'true' is for recursive directory creation.
        }
        // Save the file
        file_put_contents($fullPath, base64_decode($dec_rec_data['file_content']));
        $return_array = array('success' => 'File Added '.$filename);
      } else {
        return array('error' => 'Directory Or Language not allowed! '.$directory.' '.json_encode($this->path));
      }
    } else {
      $return_array = array('error' => 'Empty Request Send File');
    }
    return $return_array;
  }

  /**  
   * private method callFilesGet_file
   *
   * @param $file = which file
   * @return array with success or error message
   */
  protected function callFilesGet_file($file = '') {
    if($this->lf === false)
      return array('error' => 'Get_file not allowed!');

    if($file != '') {
      //BOC allowed language ?, noRiddle, 10-2023
      $path_components = explode('/', $file);
      $lang_allwd = false;
      $shop_langs_arr = $this->getShopLanguages('directory');
      foreach($shop_langs_arr as $dir => $lang_vals_arr) {
        if(in_array($dir, $path_components) || strpos($file, $dir) !== false) {
          $lng_id = $lang_vals_arr['languages_id'];
          break;
        }
      }
      if(isset($lng_id) && (in_array($lng_id, $this->fwl_and_iwl_arr) || in_array($lng_id, $this->fwl_and_iwl_arr['iwl']))) {
        $lang_allwd = true;
      }
      //EOC allowed language ?, noRiddle, 10-2023
      
      //JorisK Prüfen ob der Path erlaubt ist 
      $path_erlaubt = false;
      foreach($this->path as $path) {
        if($path == substr(DIR_FS_CATALOG.$file, 0, strlen($path))) { //verify whether lang allowed, noRiddle, 10-2023
          $path_erlaubt = true;
          break; //stop loop, noRiddle, 10-2023
        }
      }

      if($lang_allwd === true) {
        if($path_erlaubt === true) {
          if(file_exists(DIR_FS_CATALOG.$file)) {
            $file_content = file_get_contents(DIR_FS_CATALOG.$file);
            $return_array = array('file' => $file, 'content' => base64_encode($file_content));
          } else {
            $return_array = array('error' => 'File '.$file.' does not exist!', 'file_doesnt_exists' => true);
          }
        } else {
          $return_array = array('error' => 'Path not allowed! '.$file.' dirname '.$file.' allowed Path '.json_encode($this->path));
        }
      } else {
        $return_array = array('error' => 'Language directory is not allowed, neither in "from which language" nor in "into which languages"');
      }
    } else {
      $return_array = array('error' => 'No file provided!');
    }
    return $return_array;
  }

  /**  
   * private method callTablesGetTableRowInformation
   *
   * @param $table DB table
   * @return array with table information
   */
  protected function callTablesGet_table_row_information($table = '') {
    $allowed_tables = $this->allowedTables();
    if(!in_array($table, $allowed_tables)) {
      return array('error' => 'table '.$table.' in shop not allowed');
    }
    //Get the table row information from this table 
    $qu = $this->api_db_conn->apiDbQuery("DESCRIBE " . $table);
    while($row = $this->api_db_conn->apiDbFetchArray($qu)) {
        $out_arr[] = $row;
    }
    $this->api_db_conn->apiDbStmtClose($qu);

    return $out_arr;
  }

  /**  
   * private method callTablesWhich_translate
   *
   * @return array of to be translated tables
   */
  protected function callTablesWhich_translate() {
    if($this->at != '' || $this->mt != '' || $this->mtad != '' && ($this->fwl != '' && $this->iwl != '')) {
      $allowed_tables = $this->allowedTables();
      foreach($allowed_tables as $table) {
        $tbl_exists_qu = $this->api_db_conn->apiDbQuery("SHOW TABLES LIKE '".$table."'");
        if(!$this->api_db_conn->apiDbNumRows($tbl_exists_qu, true) > 0) {
          $key = array_search($table, $allowed_tables);
          $allowed_tables[$key] .= ' !! non existent table';
        }
      }
    } else {
      $allowed_tables = array('error' => 'shop has got no tables or no languages marked to translate');
    }
    return $allowed_tables;
  }

  /**  
   * private method callLanguagesData
   *
   * @return array of language from and languages into to translate
   */
  protected function callLanguagesData() {
    $langs_arr = $this->getShopLanguages();
    $iwl_arr = explode(',', $this->iwl);

    foreach($langs_arr as $code => $data) {
      if($data['languages_id'] != $this->fwl && !in_array($data['languages_id'], $iwl_arr)) {
        unset($langs_arr[$code]);
      } else {
        $langs_arr[$code]['purpose'] = ($data['languages_id'] == $this->fwl ? 'from' : 'to');
        if($code == 'en') {
          if(MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH == 'true') {
            $langs_arr[$code]['en_choice'] = 'en-gb';
          } else {
            $langs_arr[$code]['en_choice'] = 'en-us';
          }
        }
      }
    }

    return $langs_arr;
  }

  /**  
   * private method callTablesCount_tbl_records
   *
   * @param $table 
   * @param $lang 
   * @param $language_field
   * @param $use_language_code
   * @return array of number of table records or errors
   */
  protected function callTablesCount_tbl_records($table = '', $lang = '', $language_field = '', $use_language_code = 0) {
    if($table != '' && $lang != '' && $language_field != '') {
      if($this->at != '' || $this->mt != '' || $this->mtad != '' && ($this->fwl != '' && $this->iwl != '')) {
        $allowed_tables = $this->allowedTables();
        $iwl_arr = explode(',', $this->iwl);
        if(array_key_exists(strtolower($lang), $this->shop_languages)) {
          $lang_id = (int)$this->shop_languages[strtolower($lang)]['languages_id'];
        }
      
        if(in_array($table, $allowed_tables) && isset($lang_id) && (in_array($lang_id, $iwl_arr) || $lang_id == $this->fwl)) {
          $fields = $this->nameTablesFields($table);
          //Sofern definiert prüfen ob richtig
          if(isset($fields['lang']) && $fields['lang'] != $language_field) {
            $out_arr = array('error' => 'Language Field '.$language_field.' not allowed use '.$fields['lang'].' instead!');
            return $out_arr;
          }
          $language_field = preg_replace('#[^a-z0-9\_]#', '', $language_field);
          if($use_language_code == 1) {
            $lang_id = strtolower(nr_input_validation($lang, 'lang'));
          }
          $qu_str = "SELECT COUNT(*) AS records FROM ".$table." WHERE ".$language_field." = ?";
          if($qu = $this->api_db_conn->apiDbQuery($qu_str, $lang_id)) {
            $qu_arr = $this->api_db_conn->apiDbFetchArray($qu, true);
            $out_arr = array('table' => $table, 'lang' => $lang, 'records' => $qu_arr['records'], 'sql_request' => $qu_str);
          } else {
            $out_arr = array('error' => 'Query '.$qu_str.' could not be executed, please consult log files of shop');
          }
        } else {
          if(!in_array($table, $allowed_tables)) {
            $out_arr = array('error' => 'table '.$table.' in Modified Modul not allowed, allowed Tables '.implode(", ", $allowed_tables));
          } else {
            $out_arr = array('error' => 'language '.$lang.' in shop not allowed, allowed languages '.implode(", ", $iwl_arr));
          }
          
        }
      }
    } else {
      $out_arr = array('error' => 'no table and/or no language provided for call');
    }

    return $out_arr;
  }

  /**  
   * private method callTablesGet_transfields
   *
   * @param $table = which table
   * @param $lang = which language (iso code)
   * @return array of fields and their contents of the requested table in the requested language
   */
  protected function callTablesGet_transfields($table = '', $unique_field = '', $lang = '', $language_field = '', $use_language_code = 0, $select_fields = '', $from = 0, $chunks = 0) {
    if($table != '' && $lang != '' && $unique_field != '' && $select_fields != '' && $language_field != '') {
      $out_arr = array();

      if($this->at != '' || $this->mt != '' || $this->mtad != '' && ($this->fwl != '' && $this->iwl != '')) {
        $allowed_tables = $this->allowedTables();
        $iwl_arr = explode(',', $this->iwl);
        
          if(array_key_exists(strtolower($lang), $this->shop_languages)) {
            $lang_id = (int)$this->shop_languages[strtolower($lang)]['languages_id'];
            if(in_array($lang_id, $iwl_arr) || $lang_id == $this->fwl) {
              //JorisK Spezialfall da die Tabelle plugin_language_snippets_data nicht die ID sondern den Language Code hat
              if($use_language_code == 1) {
                $lang_id = strtolower($lang);
              }
              if(in_array($table, $allowed_tables) && isset($lang_id)) {
                $fields = $this->nameTablesFields($table);
                //JorisK Absicherung für MYSQL Injection sofern Tabelle vordefiniert
                if(isset($fields['lang']) && $fields['lang'] != $language_field) {
                  $out_arr = array('error' => 'Language Field '.$language_field.' not allowed use '.$fields['lang'].' instead!');
                } else {
                  //JorisK Einschränkung auf Spalten bei vordefinierten Tabellen
                  if(isset($fields['fields']) && $this->aara === false) {
                    $select_fields_array = explode(";", $select_fields);
                    $field_not_allowed_array = array();
                    foreach($select_fields_array as $value) {
                      if(!in_array($value, $fields['fields']) && $fields['unique_key'] != $value) {
                        $field_not_allowed_array[] = $value;
                      }
                    }
                    $sel_fields = implode(', ', $select_fields_array);
                    if(sizeof($field_not_allowed_array) > 0) {
                      $out_arr = array('error' => 'Select Field '.implode(", ", $field_not_allowed_array).' not allowed to view!');
                      return $out_arr;
                    }
                  } else {
                    $select_fields_array = explode(";", $select_fields);
                    $select_fields_array = array_map(function($v) {return preg_replace('#[^a-z0-9\_]#', '', $v);}, $select_fields_array);
                    $sel_fields = implode(', ', $select_fields_array);
                  }
                 
                  
                  $uk = preg_replace('#[^a-z0-9\_]#', '', $unique_field);
                  //JorisK Absicherung für MYSQL Injection sofern Tabelle vordefiniert
                  if((isset($fields['unique_key']) && $uk != $fields['unique_key']) && $this->aara === false) {
                    $out_arr = array('error' => 'Unique Field '.$uk.' not allowed');
                  } elseif($uk != '') {
                    $limit = ($chunks > 0) ? " LIMIT ".(int)$from.','.(int)$chunks : '';
           
                    //JorisK Fehler falls eine ältere Shopversion verwendet wird die ggf diese Spalten gar nicht hat!
                    $qu_str = "SELECT ".$uk.", ".$sel_fields." FROM ".$table." WHERE ".$language_field." = ? ORDER BY ".$uk." ASC".$limit;
                    $qu = $this->api_db_conn->apiDbQuery($qu_str, $lang_id);
                    if($this->api_db_conn->apiDbNumRows($qu) > 0) {
                      $chrst = $this->getShopCharset();
                      while($qu_arr = $this->api_db_conn->apiDbFetchArray($qu)) {
                        foreach($qu_arr as $key => $value) {
                          $value = $this->encode_utf8($chrst, $value, false, true); //JorisK must be set to utf-8 11-2023
                          $out_arr[$qu_arr[$uk]][$key] = $value;      
                        }
                      }
                      $this->api_db_conn->apiDbStmtClose($qu);
                    } else {
                      $out_arr = array('error' => 'no values to translate in table '.$table.' Selected Fields = '.$sel_fields.'  Language Field = '.$language_field);
                    }
                  } else {
                    $out_arr = array('error' => 'Unique Field failure');
                  }
                }
              } else {
                $out_arr = array('error' => 'Table '.$table.'  in shop not allowed');
              }
            } else {
              $out_arr = array('error' => 'Language '.$lang_id.'  in shop not allowed');
            }
          
          }
      } else {
        $out_arr = array('error' => 'shop has got no tables and/or no languages marked to translate');
      }
    } else {
      $out_arr = array('error' => 'no table and/or no language provided for call');
    }

    return $out_arr;
  }

  /**  
   * private method callTablesWrite_transfields
   *
   * @param $tables = write into which table
   * @param $lang = write in which language (iso code)
   * @return success or error
   */
  protected function callTablesWrite_transfields() {
    if($this->at != '' || $this->mt != '' || $this->mtad != '' && ($this->fwl != '' && $this->iwl != '')) {
      $allowed_tables = $this->allowedTables();
      $iwl_arr = explode(',', $this->iwl);

      $received_data = file_get_contents('php://input');
      if($received_data != '') {
        $dec_rec_data = json_decode($received_data, true);
        $dec_rec_data = $this->purifyResp($dec_rec_data); //sanitize, noRiddle, 08-2023
        if(in_array($dec_rec_data['table'], $allowed_tables)) {
          $table = $dec_rec_data['table'];
          $lang = $dec_rec_data['lang'];
          
          if(array_key_exists(strtolower($lang), $this->shop_languages)) {
            $lang_id = (int)$this->shop_languages[strtolower($lang)]['languages_id'];
            if(isset($lang_id) && in_array($lang_id, $iwl_arr)) {
              //JorisK Spezialfall da die Tabelle plugin_language_snippets_data nicht die ID sondern den Language Code hat
              if($dec_rec_data['use_language_code'] == 1) {
                $lang_id = strtolower($lang);
              } 
              //JorisK Prüfen sofern Spalten Einschränkung vorhanden und Tabelle vordefiniert ob erlaubte Spalten mitgesendet wurden 
              $fields = $this->nameTablesFields($table);
              if((isset($fields['fields']) && $this->aara === false)) {
                //Unique Field prüfen 
                if($dec_rec_data['unique_field'] != $fields['unique_key']) {
                  $out_arr = array('error' => 'Unique Key Field '.$dec_rec_data['unique_field'].' in table '.$table.' not allowed!');
                  return $out_arr;
                } 
                //Language Field prüfen
                if($dec_rec_data['language_field'] != $fields['lang']) {
                  $out_arr = array('error' => 'Language Field '.$dec_rec_data['language_field'].' in table '.$table.' not allowed!');
                  return $out_arr;
                }
              }
              if($dec_rec_data['charset'] == '') {
                $out_arr = array('error' => 'Missing Charset');
                return $out_arr;
              }

              if($dec_rec_data['data'] && sizeof($dec_rec_data['data']) > 0) {
                foreach($dec_rec_data['data'] as $unique_key => $table_data) {
                  $update_string = '';
                  $update_param_arr = array();
                  $upd_sql_arr = array(); //better version ?, noRiddle, 10-2023
                  if($table_data && sizeof($table_data) > 0) {
                    $field_not_allowed_array = array();
                    foreach($table_data as $field_name => $field_value) {
                      if((isset($fields['fields']) && $this->aara === false)) {
                        if(!in_array($field_name, $fields['fields'])) {
                          $field_not_allowed_array[] = $field_name;
                        }
                      }
                      //JorisK funktioniert bis jetzt am besten, ist noch für UTF-8 zu testen
                      if(strtoupper($dec_rec_data['charset']) != 'UTF-8') {
                        $field_value = mb_convert_encoding($field_value, strtoupper($dec_rec_data['charset']), 'UTF-8');
                      }
                      $update_string .= $field_name." = ?, ";
                      $update_param_arr[] = $field_value;
                      $upd_sql_arr[$field_name] = $field_value; //better version ?, noRiddle, 10-2023
                    }
                  }
                  if(sizeof($field_not_allowed_array) == 0) {
                    if($dec_rec_data['transfer_type'] == 'insert') {
                      //JorisK Insert weil es den Eintrag noch nicht gibt
                      //Aus Muttersprache kopieren und nur language_id abändern, damit anschliessend update möglich ist.
                      //JorisK Achtung bei Auto Increment funktioniert das nicht, z.B. content_manager hat die content_id als Auto Increment
                      $auto_increment = '';
                      $check_for_auto_increment_qu_str = "SHOW COLUMNS FROM ".$table." WHERE Extra = 'auto_increment'";
                      //$check_for_auto_increment_query = xtc_db_query("SHOW COLUMNS FROM ".$table." WHERE Extra = 'auto_increment'");
                      $check_for_auto_increment_query = $this->api_db_conn->apiDbQuery($check_for_auto_increment_qu_str);
                      if($this->api_db_conn->apiDbNumRows($check_for_auto_increment_query) > 0) {
                        //$check_for_auto_increment = xtc_db_fetch_array($check_for_auto_increment_query);
                        $check_for_auto_increment = $this->api_db_conn->apiDbFetchArray($check_for_auto_increment_query, true);
                        $auto_increment = $check_for_auto_increment['Field'];
                      }
                      //Prüfen ob Eintrag wirklich nicht existiert 
                      $check_entry_exist_qu_str = "SELECT * FROM ".$table." WHERE ".$dec_rec_data['unique_field']." = ? AND ".$dec_rec_data['language_field']." = ?";
                      //$check_entry_exist_query = xtc_db_query("SELECT * FROM ".$table." WHERE ".$dec_rec_data['unique_field']." = '".$unique_key."' AND ".$dec_rec_data['language_field']." = ".$lang_id);
                      $check_entry_exist_query = $this->api_db_conn->apiDbQuery($check_entry_exist_qu_str, array((int)$unique_key, $lang_id));
                      if($this->api_db_conn->apiDbNumRows($check_entry_exist_query, true) == 0) {
                        //Eintrag von Muttersprache holen 
                        if($dec_rec_data['use_language_code'] == 1) {
                          $language_array = $this->getShopLanguages('languages_id');
                          if(isset($language_array[$this->fwl])) $fwl_language = $language_array[$this->fwl]['code'];
                          if(!isset($fwl_language)) {
                            $out_arr = array('error' => 'Base Language Code not found!');
                            return $out_arr;
                          }
                        } else {
                          $fwl_language = (int)$this->fwl;
                        }

                        $get_muttersprach_entry_qu_str = "SELECT * FROM ".$table." WHERE ".$dec_rec_data['unique_field']." = ? AND ".$dec_rec_data['language_field']." = ?";
                        $get_muttersprach_entry_query = $this->api_db_conn->apiDbQuery($get_muttersprach_entry_qu_str, array((int)$unique_key, $fwl_language));
                        if($this->api_db_conn->apiDbNumRows($get_muttersprach_entry_query) > 0) {
                          $get_muttersprach_entry = $this->api_db_conn->apiDbFetchArray($get_muttersprach_entry_query, true);
                          $insert_array = array();
                          foreach($get_muttersprach_entry as $column => $field_value) {
                            if($column == $auto_increment) continue;
                            if($column == $dec_rec_data['language_field']) $field_value = $lang_id;
                            $insert_array[$column] = $field_value;
                          }
                          if(sizeof($insert_array) > 0) {
                            if($insert_qu = $this->api_db_conn->apiDbArrayToTable($table, $insert_array)) {
                              $this->api_db_conn->apiDbStmtClose($insert_qu);
                              $out_arr[$unique_key]['success_duplicate'] = 'successfully duplicated '.$sql;
                            } else {
                              $out_arr[$unique_key]['error'] = 'could not execute query: '.$sql;
                              continue;
                            }
                          }
                        } else {
                          $out_arr = array('error' => 'Insert Error, Base Language Entry not found! '.$query);
                          return $out_arr;
                        }
                      } 
                    }
                    if($update_string != '') {
                      $update_string = rtrim($update_string, ', ');
                      $update_string .= " WHERE ".$dec_rec_data['unique_field']." = ? AND ".$dec_rec_data['language_field']." = ?";
                      $update_param_arr = array_merge($update_param_arr, array($unique_key, (int)$lang_id));
                      $update_string = "UPDATE ".$table." SET ".$update_string;

                      if($this->write_control_mode === true) {
                        $out_arr['debug'][$table][$id] = $update_string;
                      } else {
                        if($update_qu = $this->api_db_conn->apiDbQuery($update_string, $update_param_arr)) {
                        //we could use apiDbArrayToTable() also, better version ?, noRiddle
                          $out_arr['success'][$unique_key] = 'executed successfully';
                        } else {
                          $update_string = str_replace('?', '%s', $update_string);
                          $update_string = vsprintf($update_string, $update_param_arr);
                          $out_arr['error'][$unique_key] = 'could not execute query: '.$update_string;
                        }
                      }
                    }
                  } else {
                    $out_arr = array('error' => 'Not allowed field values for update! '.implode(', ', $field_not_allowed_array));
                  }
                }
              }
            } else {
              $out_arr = array('error' => 'into the indicated language '.$lang.' is not allowed to write');
            }
          } else {
            $out_arr = array('error' => 'wrong shop configuration for language '.$lang);
          }
        } else {
          $out_arr = array('error' => 'table '.$tables.' in call not allowed');
        }
      }
    } else {
      $out_arr = array('error' => 'shop has got no tables and/or no languages marked to translate');
    }

    return $out_arr;
  }


  //******* helper methods *******
  
  /**  
   * protected method getShopCharset
   *
   * @return charset of "from which language to translate" language
   */
  protected function getShopCharset() {
    if($this->fwl != '') {
      $chrst_qu_str = "SELECT language_charset FROM languages WHERE languages_id = ?";
      $chrst_qu = $this->api_db_conn->apiDbQuery($chrst_qu_str, (int)$this->fwl);
      $chrst_arr = $this->api_db_conn->apiDbFetchArray($chrst_qu, true);
      return $chrst_arr['language_charset'];
    }
    return false;
  }
  

  /**  
   * protected method encode_utf8
   *
   * @param $charset
   * @param $string, string to be encoded
   * @param $encoding, e.g. utf-8
   * @param $force_utf8, false or true
   * @return string converted if necessary
   */
  protected function encode_utf8($charset, $string, $encoding = '', $force_utf8 = false) {
    if(strtolower($charset) == 'utf-8' || $force_utf8 === true) {
      $supported_charsets = explode(',', strtoupper(ENCODE_DEFINED_CHARSETS));  
      $cur_encoding = (!empty($encoding) && $encoding !== false) && in_array(strtoupper($encoding), $supported_charsets) ? strtoupper($encoding) : mb_detect_encoding($string, ENCODE_DEFINED_CHARSETS, true);
      if($cur_encoding == 'UTF-8' && mb_check_encoding($string, 'UTF-8')) {
        return $string;
      } else {
        return mb_convert_encoding($string, 'UTF-8', $cur_encoding);
      }
    } else {
      return $string;
    }
  }
  
  /**  
   * protected method getToken
   *
   * @return array of token and expiry
   */
  protected function getToken($mode) {   
    if($mode == 'fetch') {
      if(defined('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN') && MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN !== '') {
        $now = time();
        $valid_until = strtotime((string)MODULE_SYSTEM_REQSER_TST_VALID_UNTIL);
        $valid_tok = $valid_until >= $now;

        if($valid_tok === true) {
          $token = MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN;
          $time = MODULE_SYSTEM_REQSER_TST_VALID_UNTIL;
          $ret_arr = array('token' => $token,
                           'expiry' => $time);
        }
      } else {
        $ret_arr = $this->generateToken();
      }
    } elseif($mode == 'renew') {
      $ret_arr = $this->generateToken();
    }

    return $ret_arr;
  }

  /**  
   * protected method generateToken
   *
   * @return array of token and expiry
   */
  protected function generateToken() {
    $token = xtc_RandomString(32);
    $now = date('Y-m-d H:i:s');
    $time = date('Y-m-d H:i:s', strtotime($now.' +1 month'));
    $tok_upd_qu = $this->api_db_conn->apiDbQuery("UPDATE configuration SET configuration_value = '".$token."' WHERE configuration_key = 'MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN'");
    $tme_upd_qu = $this->api_db_conn->apiDbQuery("UPDATE configuration SET configuration_value = '".$time."' WHERE configuration_key = 'MODULE_SYSTEM_REQSER_TST_VALID_UNTIL'");
    return array('token' => $token,
                 'expiry' => $time);
  }

  /**  
   * protected method haveTableRecord
   *
   * @return WHAT IS THIS FOR ?, noRiddle
   */
  protected function haveTableRecord($tbl, $id_field, $id, $lng_field, $lng, $orig_lng) {
    $verify_qu1_str = "SELECT ".$id_field." FROM ".$tbl." WHERE ".$id_field." = ? AND ".$lng_field." = ?";
    $verify_qu1 = $this->api_db_conn->apiDbQuery($verify_qu1_str, array((int)$id, (int)$lng));
    if($this->api_db_conn->apiDbNumRows($verify_qu1) == 0) {
      $fields = false;
    } else {
      $verify_qu2_str = "SELECT * FROM ".$tbl." WHERE ".$id_field." = ? AND ".$lng_field." = ?";
      $verify_qu2 = $this->api_db_conn->apiDbQuery($verify_qu2_str, array((int)$id, (int)$orig_lng));
      $verify_arr2 = $this->api_db_conn->apiDbFetchArray($verify_qu2);
      $fields = $verify_arr2;
    }

    return $fields;
  }

  /**  
   * private method allowedTables
   *
   * @return array of allowed db tables to be translated
   */
  private function allowedTables() {
    $allowed_tables = explode(',', $this->at);
    if($this->mt != '') {
      $more_tables = explode(',', $this->mt);
      $allowed_tables = array_merge($allowed_tables, $more_tables);
    }
    if($this->mtad != '') {
      $more_tables_add = explode(',', $this->mtad);
      $allowed_tables = array_merge($allowed_tables, $more_tables_add);
    }
    if($this->lt != '') {
      $less_tables = explode(',', $this->lt);
      foreach($less_tables as $tbl) {
        $k = array_search($tbl, $allowed_tables);
        unset($allowed_tables[$k]);
      }
    }

    sort($allowed_tables);

    return $allowed_tables;
  }

  /**  
   * private method nameTablesFields
   *
   * @param table name
   * @return array of to be translated fields and the field name of the unique language
   */
  private function nameTablesFields($table) {
    switch($table) {
      case 'banners':
        $fields = array('fields' => array('banners_title', 'banners_image_title', 'banners_image_alt', 'banners_html_text'),
                        'unique_key' => 'banners_group_id',
                        'lang' => 'languages_id');
        break;
      case 'categories_description':
        $fields = array('fields' => array('categories_name', 'categories_heading_title', 'categories_description', 'categories_meta_title', 'categories_meta_description', 'categories_meta_keywords'),
                        'unique_key' => 'categories_id',
                        'lang' => 'language_id');
        break;
      case 'content_manager':
        $fields = array('fields' => array('content_title', 'content_heading', 'content_text', 'content_meta_title', 'content_meta_description', 'content_meta_keywords', 'last_modified'),
                        'unique_key' => 'content_group',
                        'lang' => 'languages_id');
        break;
      case 'content_manager_content':
        $fields = array('fields' => array('content_name', 'file_comment'),
                        'unique_key' => 'content_id',
                        'lang' => 'languages_id',
                        'diff_id_for_lng' => 'true');
        break;
      case 'coupons_description':
        $fields = array('fields' => array('coupon_name', 'coupon_description'),
                        'unique_key' => 'coupon_id',
                        'lang' => 'language_id');
        break;
      case 'customers_status':
        $fields = array('fields' => array('customers_status_name'),
                        'unique_key' => 'customers_status_id',
                        'lang' => 'language_id');
        break;
      case 'email_content':
        $fields = array('fields' => array('content_name', 'file_comment'),
                        'unique_key' => 'customers_status_id',
                        'lang' => 'languages_id');
        break;
      case 'manufacturers_info':
        $fields = array('fields' => array('manufacturers_title', 'manufacturers_description', 'manufacturers_meta_title', 'manufacturers_meta_description', 'manufacturers_meta_keywords'),
                        'unique_key' => 'manufacturers_id',
                        'lang' => 'languages_id');
        break;
      case 'orders_status':
        $fields = array('fields' => array('orders_status_name'),
                        'unique_key' => 'orders_status_id',
                        'lang' => 'language_id');
        break;
      case 'products_content':
        $fields = array('fields' => array('content_name', 'file_comment'),
                        'unique_key' => 'content_id',
                        'lang' => 'languages_id',
                        'diff_id_for_lng' => 'true');
        break;
      case 'products_description':
        $fields = array('fields' => array('products_name', 'products_heading_title', 'products_description', 'products_short_description', 'products_meta_title', 'products_meta_description', 'products_order_description', 'last_update'),
                        'unique_key' => 'products_id',
                        'lang' => 'language_id');
        break;
      case 'products_images_description':
        $fields = array('fields' => array('image_title', 'image_alt'),
                        'unique_key' => 'image_id',
                        'lang' => 'language_id');
        break;
      case 'products_options':
        $fields = array('fields' => array('products_options_name'),
                        'unique_key' => 'products_options_id',
                        'lang' => 'language_id');
        break;
      case 'products_options_values':
        $fields = array('fields' => array('products_options_values_name'),
                        'unique_key' => 'products_options_values_id',
                        'lang' => 'language_id');
        break;
      case 'products_tags_options':
        $fields = array('fields' => array('options_name', 'options_description'),
                        'unique_key' => 'options_id',
                        'lang' => 'languages_id');
        break;
      case 'products_tags_values':
        $fields = array('fields' => array('values_name', 'values_description'),
                        'unique_key' => 'values_id',
                        'lang' => 'languages_id');
        break;
      case 'products_vpe':
        $fields = array('fields' => array('products_vpe_name'),
                        'unique_key' => 'products_vpe_id',
                        'lang' => 'language_id');
        break;
      case 'products_xsell_grp_name':
        $fields = array('fields' => array('groupname'),
                        'unique_key' => 'products_xsell_grp_name_id',
                        'lang' => 'language_id');
        break;
      case 'reviews_description':
        $fields = array('fields' => array('reviews_text'),
                        'unique_key' => 'reviews_id',
                        'lang' => 'languages_id');
        break;
      case 'shipping_status':
        $fields = array('fields' => array('shipping_status_name'),
                        'unique_key' => 'shipping_status_id',
                        'lang' => 'language_id');
        break;
    }

    return $fields;
  }

    /**  
   * public method getResellerID
   *
   * @return if Reseller ID File exists, return Reseller ID, else return false
   */
  public function getResellerID() {
    if (file_exists(DIR_FS_API.'reqser/reseller_id.txt')){
      $reseller_id = file_get_contents(DIR_FS_API.'reqser/reseller_id.txt');
      return $reseller_id;
    } else {
      return false;
    }
  }

}
?>
