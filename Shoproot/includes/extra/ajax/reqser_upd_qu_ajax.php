<?php
/********************************************************************
* file: reqser_upd_qu_ajax.php
* path: /includes/extra/ajax/
* use: handle ajax request for newer versions of reqser module
*      for DeepL translation via API
*
* © copyright 12-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © copyright 01-2024, JorisK Reqser.com

********************************************************************/

if(isset($_POST['reqser_upd_qu']) && $_POST['reqser_upd_qu'] == 'true' && (isset($_POST['msreq_api_key']) && $_POST['msreq_api_key'] != '')) {
  $reqser_error_message = '';
  $msreq_local_api_key = $_POST['msreq_api_key'];
  if(!class_exists('DbFuncs') && (!isset($api_db_conn) || !is_object($api_db_conn))) {
    require_once(DIR_FS_EXTERNAL.'api_local/classes/db/DbFuncs.php');
    $api_db_conn = new api_local\DbFuncs(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, DB_SERVER_CHARSET);
  }
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_token_verify = $msreq_api_reqser->getsendToken();
  if ($msreq_token_verify['access_token'] == '' && $msreq_token_verify['message'] != ''){
    $msreq_result_request['info_message'] = $msreq_token_verify['message'];
    echo $msreq_token_verify['message']; exit;
  }
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/module_request';
    $post_fields = array('website' => $_SERVER['HTTP_HOST'], 'cms' => 'Modified','cms_version' => PROJECT_MAJOR_VERSION.'.'.PROJECT_MINOR_VERSION, 'php_version' => phpversion(), 'module_version' => $msreq_api_reqser->getApiReqserVersion());
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', 5);
    if((isset($msreq_result_request['warning_message']) && $msreq_result_request['warning_message'] != '') || (isset($msreq_result_request['info_message']) && $msreq_result_request['info_message'] != '') || (isset($msreq_result_request['success_message']) && $msreq_result_request['success_message'] != '')) {
      echo json_encode($msreq_result_request); exit;
    } else {
      exit;
    }
  }
} elseif(isset($_POST['reqser_instant_translate']) && $_POST['reqser_instant_translate'] == 'true' && (isset($_POST['msreq_api_key']) && $_POST['msreq_api_key'] != '')) {
  //JorisK 01-2024
  $reqser_error_message = '';
  $msreq_local_api_key = $_POST['msreq_api_key'];
  if(!class_exists('DbFuncs') && (!isset($api_db_conn) || !is_object($api_db_conn))) {
    require_once(DIR_FS_EXTERNAL.'api_local/classes/db/DbFuncs.php');
    $api_db_conn = new api_local\DbFuncs(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, DB_SERVER_CHARSET);
  }
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_token_verify = $msreq_api_reqser->getsendToken();
  if ($msreq_token_verify['access_token'] == '' && $msreq_token_verify['message'] != ''){
    $msreq_result_request['info_message'] = $msreq_token_verify['message'];
    echo json_encode($msreq_result_request); exit;
  }
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/instant_translate';
    $jsonString = trim(stripslashes($_POST['reqser_post_fields']));
    $post_fields = json_decode($jsonString, true);
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', 5);
    if(isset($msreq_result_request['warning_message']) && $msreq_result_request['warning_message'] != '') {
      echo $msreq_result_request['warning_message']; exit;
      exit;
    } else {
      exit;
    }
  }
} elseif(isset($_POST['reqser_check_activ']) && $_POST['reqser_check_activ'] == 'true' && (isset($_POST['msreq_api_key']) && $_POST['msreq_api_key'] != '')) {
  //JorisK 01-2024
  $reqser_error_message = '';
  $msreq_local_api_key = $_POST['msreq_api_key'];
  if(!class_exists('DbFuncs') && (!isset($api_db_conn) || !is_object($api_db_conn))) {
    require_once(DIR_FS_EXTERNAL.'api_local/classes/db/DbFuncs.php');
    $api_db_conn = new api_local\DbFuncs(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, DB_SERVER_CHARSET);
  }
  
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_token_verify = $msreq_api_reqser->getsendToken();
  if ($msreq_token_verify['access_token'] == '' && $msreq_token_verify['message'] != ''){
    $msreq_result_request['info_message'] = $msreq_token_verify['message'];
    echo json_encode($msreq_result_request); exit;
  }
  
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/check_activ';
    $jsonString = trim(stripslashes($_POST['reqser_post_fields']));
    $post_fields = json_decode($jsonString, true);
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', 5);
    
    if((isset($msreq_result_request['warning_message']) && $msreq_result_request['warning_message'] != '') || (isset($msreq_result_request['info_message']) && $msreq_result_request['info_message'] != '') || (isset($msreq_result_request['success_message']) && $msreq_result_request['success_message'] != '')){
      echo json_encode($msreq_result_request); exit;
    } else {
      exit;
    }
  }
} elseif ((
    (isset($_POST['reqser_request_on_start']) && $_POST['reqser_request_on_start'] == 'true') 
      || (isset($_POST['reqser_request_on_orders_edit']) && $_POST['reqser_request_on_orders_edit'] == 'true')
      || (isset($_POST['reqser_request_text_translation']) && $_POST['reqser_request_text_translation'] == 'true')
      || (isset($_POST['reqser_request_on_seo_products_edit']) && $_POST['reqser_request_on_seo_products_edit'] == 'true')
      || (isset($_POST['reqser_request_seo_edit']) && $_POST['reqser_request_seo_edit'] == 'true')
    )  
    && (isset($_POST['msreq_api_key']) && $_POST['msreq_api_key'] != '')) {
  //JorisK 04-2024
  $reqser_error_message = '';
  $msreq_local_api_key = $_POST['msreq_api_key'];
  if(!class_exists('DbFuncs') && (!isset($api_db_conn) || !is_object($api_db_conn))) {
    require_once(DIR_FS_EXTERNAL.'api_local/classes/db/DbFuncs.php');
    $api_db_conn = new api_local\DbFuncs(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE, DB_SERVER_CHARSET);
  }
  
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_token_verify = $msreq_api_reqser->getsendToken();
  if ($msreq_token_verify['access_token'] == '' && $msreq_token_verify['message'] != ''){
    $msreq_result_request['info_message'] = $msreq_token_verify['message'];
    echo json_encode($msreq_result_request); exit;
  }
  
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/module_request';
    $post_fields = array('website' => $_SERVER['HTTP_HOST'], 'cms' => 'Modified','cms_version' => PROJECT_MAJOR_VERSION.'.'.PROJECT_MINOR_VERSION, 'module_version' => $msreq_api_reqser->getApiReqserVersion());
    $timeout = 5;
    if (isset($_POST['reqser_request_on_orders_edit']) && $_POST['reqser_request_on_orders_edit'] == 'true') {
      $post_fields['reqser_request_on_orders_edit'] = 'true';
      $post_fields['comments_exists'] = $_POST['comments_exists'];
      $timeout = 10;
    } elseif (isset($_POST['reqser_request_on_start']) && $_POST['reqser_request_on_start'] == 'true') {
      $post_fields['reqser_request_on_start'] = 'true';
      $post_fields['admincol_right_exists'] = $_POST['admincol_right_exists'];
      $post_fields['admincol_left_exists'] = $_POST['admincol_left_exists'];
      $post_fields['admincol_exists'] = $_POST['admincol_exists'];
      $post_fields['admin_container_exists'] = $_POST['admin_container_exists'];
      $post_fields['admincol_full_exists'] = $_POST['admincol_full_exists'];
    } elseif (isset($_POST['reqser_request_text_translation']) && $_POST['reqser_request_text_translation'] == 'true'){
      $post_fields['reqser_request_text_translation'] = 'true';
      $post_fields['text'] = $_POST['text'];
      $timeout = 20;
    } elseif (isset($_POST['reqser_request_on_seo_products_edit']) && $_POST['reqser_request_on_seo_products_edit'] == 'true'){
      $post_fields['reqser_request_on_seo_products_edit'] = 'true';
      $post_fields['product_descriptions'] = $_POST['productDescriptions'];
      $post_fields['product_descriptions_exists'] = $_POST['productDescriptionsExists'];
      $post_fields['product_description_id_underscore_exists'] = $_POST['product_description_id_underscore_exists'];
      $post_fields['product_description_id_bracket_exists'] = $_POST['product_description_id_bracket_exists'];
      $post_fields['manufacturers_id'] = $_POST['manufacturers_id'];
      $post_fields['products_id'] = $_POST['products_id'];
    } elseif (isset($_POST['reqser_request_seo_edit']) && $_POST['reqser_request_seo_edit'] == 'true'){
      $post_fields['reqser_request_seo_edit'] = 'true';
      $post_fields['text'] = $_POST['text'];
      $post_fields['products_name'] = $_POST['products_name'];
      $post_fields['products_id'] = $_POST['products_id'];
      $post_fields['column'] = $_POST['column'];
      $post_fields['table_name'] = $_POST['table_name'];
      $post_fields['language_id'] = $_POST['language'];
      $post_fields['manufacturers_id'] = $_POST['manufacturers_id'];
      $post_fields['keywords_as_manufacturers_default'] = $_POST['keywords_as_manufacturers_default'];
      if (isset($_POST['seo_inputs']) && is_array($_POST['seo_inputs'])) {
        foreach ($_POST['seo_inputs'] as $key => $value) {
          $post_fields[$key] = $value;
        }
      }
      $timeout = 60;
    }
    if (isset($_SESSION['customer_id'])) $post_fields['customer_id'] = $_SESSION['customer_id'];
    if (isset($_POST['fwl'])) $post_fields['fwl']  = $_POST['fwl'];
    if (isset($_POST['iwl'])) $post_fields['iwl']  = $_POST['iwl'];
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', $timeout);
    if(isset($msreq_result_request)) {
      echo json_encode($msreq_result_request); exit;
    } else {
      exit;
    }
  }
} 