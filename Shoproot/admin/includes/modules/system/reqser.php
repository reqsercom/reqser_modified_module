<?php
/***********************************************************
* file: reqser.php
* path: /admin/includes/modules/system/
* use: system module for DeepL translation via API
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © copyright 08-2023 by JorisK Reqser.com

***********************************************************/

defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

class reqser {
  private $module_version, $mn_const, $langs_arr_str, $shop_version_lt_2060;
  public $code, $title, $description, $enabled, $sort_order;

  function __construct() {
    global $messageStack;

    $this->module_version = '1.9';
    $this->code = 'reqser';
    $this->mn_const = 'MODULE_SYSTEM_'.strtoupper($this->code).'_'; //module name, first constant part
    $this->title = sprintf($this->get_const('TITLE'), $this->module_version);
    $this->description = $this->get_const('DESCRIPTION');
    $this->sort_order = $this->get_const('SORT_ORDER');
    $this->enabled = $this->get_const('STATUS') == 'true' ? true : false;

    $this->langs_arr_str = get_langs_from_translate();

    $this->shop_version_lt_2060 = (defined('PROJECT_MAJOR_VERSION') && PROJECT_MAJOR_VERSION == '2' && defined('PROJECT_MINOR_VERSION') && str_replace('.', '', PROJECT_MINOR_VERSION) < str_replace('.', '', '0.6.0')) || !function_exists('xtc_cfg_multi_checkbox');

    //BOC check for new version, Joris, noRiddle, 11-2023
    static $reqser_update_request = false;
    static $reqser_error_message = '';
    $local_api_key = defined($this->mn_const.'REQSER_API_KEY') ? constant($this->mn_const.'REQSER_API_KEY') : '';
    if($local_api_key != '' && $this->check() !== false && $reqser_update_request !== true) {
      require_once(DIR_FS_EXTERNAL.'api_local/classes/ApiBase.php');
      $api_base = new api_local\ApiBase();
      $url_credential = 'https://reqser.com/api/token';
      $vals_credential = array('key' => $local_api_key);
      //JorisK 12-2023 Timout 1 sec
      $token_verify = $api_base->doRequest($url_credential, 'post', 'normal', 'json', $vals_credential, array('token' => $local_api_key), NULL, 'y', 1);
      if(isset($token_verify['access_token']) && !isset($token_verify['warning_message'])) {
        $url_requ = 'https://reqser.com/api/module_request';
        $post_fields = array('cms' => 'Modified','cms_version' => PROJECT_MAJOR_VERSION.'.'.PROJECT_MINOR_VERSION, 'php_version' => phpversion(), 'module_version' => $this->module_version);
        //JorisK 12-2023 Timout 1 sec
        $result_request = $api_base->doRequest($url_requ, 'post', 'json', 'json', $post_fields, array('token' => $token_verify['access_token']), NULL, 'y', 1);
        if(isset($result_request['warning_message']) && $result_request['warning_message'] != ''){
          $this->title .= '<br><span style="color:red;">'.$result_request["warning_message"].'</span>';
          $reqser_error_message = $result_request["warning_message"];
        }
      }
      $reqser_update_request = true;
    } elseif ($reqser_update_request === true && $reqser_error_message != '') {
      $this->title .= '<br><span style="color:red;">'.$reqser_error_message.'</span>';
    }
    //EOC check for new version, Joris, noRiddle, 11-2023


    if(isset($_GET['module']) && $_GET['module'] == $this->code && isset($_GET['action']) && $_GET['action'] == 'save') {
      if($_POST['configuration'][$this->mn_const.'STATUS'] == 'true') {
        //verify API key ?
        if($_POST['configuration'][$this->mn_const.'VERIFY_KEY_ON_SAVE'] == 'true' && $_POST['configuration'][$this->mn_const.'REQSER_API_KEY'] != '') {
          $this->verify_api_token($_POST['configuration'][$this->mn_const.'REQSER_API_KEY']);
        }

        //chosen languages okay ?
        if ($_POST['configuration'][$this->mn_const.'REQSER_API_KEY'] == ''){
          $messageStack->add_session(MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR, 'warning');
        } elseif(!isset($_POST['configuration'][$this->mn_const.'INTO_WHICH_LANGS'])) {
          $messageStack->add_session(MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR, 'warning');
        } else {
          $post_fwl = $_POST['configuration'][$this->mn_const.'FROM_WHICH_LANG'];
          $post_iwl = $_POST['configuration'][$this->mn_const.'INTO_WHICH_LANGS'];
          foreach($post_iwl as $lang_id) {
            if($lang_id == $post_fwl) {
              $messageStack->add_session(MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR, 'warning');
            }
          }
        }
      }
    }
  }

  function process($file) {
    //do nothing
  }

  function display() {
    return array('text' => '<br>'.xtc_button(BUTTON_SAVE).'&nbsp;'.xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set='.$_GET['set'].'&module='.$this->code)));
  }

  function check() {
    if(!isset($this->_check)) {
      if(defined($this->mn_const.'STATUS')) {
        $this->_check = true;
      } else {
        $check_query = xtc_db_query("SELECT configuration_value FROM ".TABLE_CONFIGURATION." WHERE configuration_key = '".$this->mn_const."STATUS'");
        $this->_check = xtc_db_num_rows($check_query);
      }
    }
    return $this->_check;
  }

  function install() {
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'STATUS'."', 'true', '6', '1', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) VALUES ('".$this->mn_const."REQSER_API_KEY', '', '6', '2', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'VERIFY_KEY_ON_SAVE'."', 'true', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) VALUES ('".$this->mn_const."TEMP_SHOP_TOKEN', '', '6', '4', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) VALUES ('".$this->mn_const."TST_VALID_UNTIL', '', '6', '5', now())");

    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'ALLOW_ALL_ROW_ACCESS'."', 'true', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    $default_tables = 'banners,categories_description,content_manager,content_manager_content,coupons_description,customers_status,email_content,manufacturers_info,orders_status,products_content,products_description,products_options,products_options_values,products_tags_options,products_tags_values,products_vpe,products_xsell_grp_name,shipping_status';
    //Prüfen ob plugin_sq_ajax_add_to_cart_data und/oder plugin_language_snippets_data wenn ja in default nehmen, wegen Spezialfall für Language
    $check_plugin_sq_ajax_add_to_cart_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_sq_ajax_add_to_cart_data'");
    if (xtc_db_num_rows($check_plugin_sq_ajax_add_to_cart_data) > 0) {
      $default_tables .= ',plugin_sq_ajax_add_to_cart_data';
    }
    $check_plugin_language_snippets_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_language_snippets_data'");
    if (xtc_db_num_rows($check_plugin_language_snippets_data) > 0) {
      $default_tables .= ',plugin_language_snippets_data';
    }
 
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." ( configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('".$this->mn_const."TABLES_TO_TRANSL', '".$default_tables."',  '6', '6', '', 'nr_cfg_multi_checkbox(\'get_default_tables_to_translate\', \'chr(44)\',', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." ( configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('".$this->mn_const."MORE_TABLES', '',  '7', '6', '', 'nr_cfg_multi_checkbox(\'get_more_tables_to_translate\', \'chr(44)\',', now())");
    
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) VALUES ('".$this->mn_const."MORE_TABLES_ADD', '', '6', '8', now())");
    //xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, date_added) VALUES ('".$this->mn_const."LESS_TABLES', '', '6', '9', now())");

    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." ( configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('".$this->mn_const."FROM_WHICH_LANG', '2',  '6', '10', '', 'nr_cfg_select_option(".$this->langs_arr_str.",', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." ( configuration_key, configuration_value, configuration_group_id, sort_order, use_function, set_function, date_added) VALUES ('".$this->mn_const."INTO_WHICH_LANGS', '',  '6', '11', '', 'nr_cfg_multi_checkbox(\'get_langs_to_translate\', \'chr(44)\',', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'INTO_ENGLISH_BRITISH'."', 'false', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'ADD_LANGUAGE_ALLOWED'."', 'true', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");

    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'LANGUAGE_FILES'."', 'true', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'LANGUAGE_FILES_SETTING'."', 'true', '6', '3', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");

    xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'PROTOCOL_ACC'."', 'false', '6', '12', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
    //xtc_db_query("INSERT INTO ".TABLE_CONFIGURATION." (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('".$this->mn_const.'BROWSER_TEST'."', 'false', '6', '13', 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())"); //we better don't let users have power over this, we'll do this in ClassReqser
  }

  function remove() {
    xtc_db_query("DELETE FROM ".TABLE_CONFIGURATION." WHERE configuration_key LIKE '".$this->mn_const."%'");
  }

  function keys() {
    return array($this->mn_const.'STATUS',
                 $this->mn_const.'REQSER_API_KEY',
                 $this->mn_const.'FROM_WHICH_LANG',
                 $this->mn_const.'INTO_WHICH_LANGS',
                 $this->mn_const.'INTO_ENGLISH_BRITISH',
                 $this->mn_const.'LANGUAGE_FILES',
                 $this->mn_const.'LANGUAGE_FILES_SETTING',
                 $this->mn_const.'ALLOW_ALL_ROW_ACCESS',
                 $this->mn_const.'TABLES_TO_TRANSL',
                 $this->mn_const.'MORE_TABLES',
                 $this->mn_const.'MORE_TABLES_ADD',
                 //$this->mn_const.'LESS_TABLES',
                 $this->mn_const.'ADD_LANGUAGE_ALLOWED', 
                 $this->mn_const.'PROTOCOL_ACC',
                 $this->mn_const.'VERIFY_KEY_ON_SAVE',
                 $this->mn_const.'TEMP_SHOP_TOKEN',
                 $this->mn_const.'TST_VALID_UNTIL',
                 //$this->mn_const.'BROWSER_TEST'
                );
  }

  //BOC helper functions
  private function verify_api_token($token) {
    global $messageStack;
    //send reqser api token to reqser to verify it
    $local_api_key = $_POST['configuration'][$this->mn_const.'REQSER_API_KEY'];
    $url = 'https://reqser.com/api/token'; //?key='.$local_api_key;
    $vals = array('key' => $local_api_key);
    $headers = array();
    $headers[] = 'Accept: application/json';

    require_once(DIR_FS_EXTERNAL.'api_local/classes/ApiBase.php');
    $api_base = new api_local\ApiBase();
    $token_verify = $api_base->doRequest($url, 'post', 'normal', 'json', $vals, array('token' => $local_api_key), NULL, 'y', 5);

    if(is_array($token_verify) && isset($token_verify['access_token'])) {
      $messageStack->add_session(MODULE_SYSTEM_REQSER_API_KEY_SUCCESS, 'success');
      /*if($token_verify['access_token'] != $local_api_key) {
        $messageStack->add_session(MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR, 'warning');
      } else {
        $messageStack->add_session(MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR, 'warning');
      }*/
    } else {
      $messageStack->add_session(sprintf(MODULE_SYSTEM_REQSER_CURL_ERR, (is_array($token_verify) ? '<pre>'.print_r($token_verify, true).'</pre>' : $token_verify)), 'warning');
    }
  }

  //define constants flexibly
  private function get_const($suffix = '') {
    $full_const = $this->mn_const.$suffix;
    return defined($full_const) ? constant($full_const) : ''; 
  }
  //EOC helper functions
}
?>
