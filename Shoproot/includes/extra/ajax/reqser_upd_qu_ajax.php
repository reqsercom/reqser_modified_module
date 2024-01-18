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
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_url_credential = 'https://reqser.com/api/token';
  //authenticate ?
  $msreq_vals_credential = array('key' => $msreq_local_api_key);
  $msreq_token_verify = $msreq_api_reqser->doRequest($msreq_url_credential, 'post', 'normal', 'json', $msreq_vals_credential, array('token' => $msreq_local_api_key), NULL, 'y', 5);
  //update available ?
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/module_request';
    $post_fields = array('cms' => 'Modified','cms_version' => PROJECT_MAJOR_VERSION.'.'.PROJECT_MINOR_VERSION, 'php_version' => phpversion(), 'module_version' => $msreq_api_reqser->getApiReqserVersion());
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', 5);
    if(isset($msreq_result_request['warning_message']) && $msreq_result_request['warning_message'] != '') {
      echo $msreq_result_request['warning_message']; exit;
    } else {
      exit;
    }
  }
} elseif(isset($_POST['reqser_instant_translate']) && $_POST['reqser_instant_translate'] == 'true' && (isset($_POST['msreq_api_key']) && $_POST['msreq_api_key'] != '')) {
  //JorisK 01-2024
  $reqser_error_message = '';
  $msreq_local_api_key = $_POST['msreq_api_key'];
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $msreq_api_reqser = new api_local\reqser\ClassReqser('reqser');
  $msreq_url_credential = 'https://reqser.com/api/token';
  //authenticate ?
  $msreq_vals_credential = array('key' => $msreq_local_api_key);
  $msreq_token_verify = $msreq_api_reqser->doRequest($msreq_url_credential, 'post', 'normal', 'json', $msreq_vals_credential, array('token' => $msreq_local_api_key), NULL, 'y', 5);
  //update available ?
  if(isset($msreq_token_verify['access_token']) && !isset($msreq_token_verify['warning_message'])) {
    $msreq_url_requ = 'https://reqser.com/api/instant_translate';
    $post_fields = json_decode($_POST['reqser_post_fields']);
    $msreq_result_request = $msreq_api_reqser->doRequest($msreq_url_requ, 'post', 'json', 'json', $post_fields, array('token' => $msreq_token_verify['access_token']), NULL, 'y', 5);
    if(isset($msreq_result_request['warning_message']) && $msreq_result_request['warning_message'] != '') {
      echo $msreq_result_request['warning_message']; exit;
    } else {
      exit;
    }
  }

}