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

$act_dir = dirname(__FILE__, 3);
chdir($act_dir);

include_once('includes/application_top_api.php');

if(defined('MODULE_SYSTEM_REQSER_STATUS') && MODULE_SYSTEM_REQSER_STATUS == 'true') {
  require_once(DIR_FS_EXTERNAL.'api_local/classes/reqser/ClassReqser.php');
  $reqser = new api_local\reqser\ClassReqser('reqser');

  if(!in_array('curl', get_loaded_extensions()) && !function_exists('curl_init')) {
    $reqser_connector_error = array('error' => 'no cURL available on this machine');
  }

  $reqser_api_key = MODULE_SYSTEM_REQSER_REQSER_API_KEY;
  $reqser_token = '';
  $reqser_token_validity = '';
  if(strpos($_SERVER['REQUEST_URI'], '/temp_token/') === false) {
    $reqser_token = MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN;
    $reqser_token_validity = MODULE_SYSTEM_REQSER_TST_VALID_UNTIL;

    if($reqser_api_key == '') {
      $reqser_connector_error = array('error' => 'API key is not set in shop', 'error_code' => '1202');
    } elseif($reqser_token == '') {
      $reqser_connector_error = array('error' => 'API token is not set in shop', 'error_code' => '1101');
    } elseif($reqser_token_validity == '') {
      $reqser_connector_error = array('error' => 'API token validity is not set in shop', 'error_code' => '1203');
    }
  }

  if(isset($_SERVER['REQUEST_URI'])) {
    //JorisK 05-2024: Fix if the Shop is placed in a Subdirectory
    $api_position = strpos($_SERVER['REQUEST_URI'], '/api/reqser/connector.php');
    if ($api_position !== false) {
        $modified_request_uri = substr($_SERVER['REQUEST_URI'], $api_position);
    } else {
        $modified_request_uri = $_SERVER['REQUEST_URI']; 
    }
    $uri_arr = $reqser->receiveRequest($modified_request_uri);

    $rem_add = $reqser->protoc === true ? xtc_get_ip_address() : '';
    $response = $reqser->callRestMethod($uri_arr, $reqser_api_key, $reqser_token, $reqser_token_validity, $rem_add);

    //response
    if($reqser->browser_mode === false) {
      header_remove();
      header('Content-Type: application/json');
      header('Accept: application/json');
      
      if(isset($reqser_connector_error)) {
        echo json_encode($reqser_connector_error); exit;
      }

      echo $response; exit;
    } else {
      //echo '<pre>'.print_r($response, true).'</pre>';
      //echo '<pre>'.base64_encode($reqser_api_key);
      echo '<pre>'.base64_encode($reqser_api_key.':'.(isset($response['token']) ? $response['token'] : $reqser_token));
    }
  }
} else {
  echo json_encode(array('error' => 'API not active', 'error_code' => '1204'));
}
?>
