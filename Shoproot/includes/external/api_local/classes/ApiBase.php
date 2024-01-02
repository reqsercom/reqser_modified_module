<?php
/***********************************************************
* file: ApiBase.php
* path: /includes/external/api_local/classes/
* use: basic methods for local api
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © 08-2023 by JorisK Reqser.com

***********************************************************/

namespace api_local;

if(!function_exists('xtc_create_password') || !function_exists('xtc_RandomString'))
  require_once(DIR_FS_INC.'xtc_create_password.inc.php');

class ApiBase {
  private $api_base_version, $shop_version;
  protected $debug_curl, $dev_mode, $api_db_conn, $log_path, $allowed_methods;
  public $browser_mode, $api_main_path, $api_sub_path;
  
  /**  
   * ApiBase constructor
   *
   * @param sub-directory in /api/ (
   * @return NULL
   */
  public function __construct($subp = '') {
    global $api_db_conn;

    $this->api_base_version = '1.4';
    $this->debug_curl == false;

    //JorisK Only if file_exists
    if(file_exists(DIR_ADMIN.'includes/version.php')) {
      require_once(DIR_ADMIN.'includes/version.php');
      $this->shop_version = PROJECT_MAJOR_VERSION.'.'.PROJECT_MINOR_VERSION.(defined('PROJECT_REVISION') && PROJECT_REVISION != '' ? ' rev'.PROJECT_REVISION : '');
    } else {
      $this->shop_version = 'undefined';
    }

    $this->browser_mode = false;
    $this->dev_mode = true;

    $this->api_db_conn = $api_db_conn;

    $this->log_path = '';

    $this->api_main_path = '/api/';
    $this->api_sub_path = NULL;
    if($subp != '') {
      $this->api_sub_path = $subp;
    }

    $this->allowed_methods = array();
  }

  /**  
   * protected method getShopVersion
   *
   * @return shop version
   */
  protected function getShopVersion() {
    return $this->shop_version;
  }

  /**  
   * protected method getApiBaseVersion
   * 
   * @return API version
   */
  protected function getApiBaseVersion() {
    return $this->api_base_version;
  }

  /**  
   * protected method getToken
   *
   * @return array of token and expiry
   */
  protected function getToken($mode) {   
    if($mode == 'fetch') {
      $ret_arr = $this->generateToken();
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

    return array('token' => $token,
                 'expiry' => $time);
  }

  /**  
   * protected method hashAuthHeader
   *
   * @return base64-encoded with colon concatenated string of API key and temporary token
   */
  protected function hashAuthHeader($api_key, $token) {
    $hash = base64_encode($api_key.':'.$token);
    return $hash;
  }
  
  /**  
   * protected method getHeaders
   *
   * @return array of headers of a request
   */
  protected function getHeaders() {
    //JorisK update for HTTP/2 where the authorization comes in lower case //meaning in HHTP/1.1 the header Authorization, noRiddle, 10-2023
    $headers = getallheaders();
    return array_combine(
      array_map(function($key) {
        return ucfirst(strtolower($key));
      }, array_keys($headers)),
      $headers
    );
  }

  /**  
   * protected method getUrlParts
   *
   * @param $url, requested URI
   * @return array of requested URL path parts
   */
  protected function getUrlParts($url) {
    if(isset($_SERVER['HTTPS']) && empty($_SERVER['HTTPS']) || !isset($_SERVER['HTTPS'])) {
      return array('error' => 'call via ssl necessary');
    }

    $path_str = parse_url($url, PHP_URL_PATH);
    $url_arr = explode( '/', ltrim($path_str, '/'));

    return $url_arr;
  }

  /**  
   * protected method getQueryStringParts
   *
   * @param $qu_str, GET string
   * @return array of sent GET params
   */
  protected function getQueryStringParts($qu_str) {
    parse_str($qu_str, $query_arr);

    return $query_arr;
  }

  /**  
   * protected method getShopLanguages
   *
   * @param $key to define key of returned array
   * @param $select to request only one field
   * @return array with important fields of shop languages
   */
  protected function getShopLanguages($key = '', $select = '') {
    if($key == '') $key = 'code';
    $allwd_keys = array('code', 'languages_id', 'directory');
    $langs_qu_str = "SELECT languages_id, code, language_charset, directory, status, status_admin FROM languages";
    $langs_qu = $this->api_db_conn->apiDbQuery($langs_qu_str); //xtc_db_query($langs_qu_str);
    $langs_array = array();
    //while($langs_arr = xtc_db_fetch_array($langs_qu)) {
    while($langs_arr = $this->api_db_conn->apiDbFetchArray($langs_qu)) {
      if($select != '' && array_key_exists($select, $langs_arr)) {
        if(in_array($key, $allwd_keys))
          $langs_array[$langs_arr[$key]] = $langs_arr[$select];
      } else {
        if(in_array($key, $allwd_keys))
          $langs_array[$langs_arr[$key]] = $langs_arr;
      }
      
    }

    return $langs_array;
  }

  /**  
   * protected method mapLanguageIdToIso
   *
   * @param $id, languages_id
   * @return language ISO code
   */
  protected function mapLanguageIdToIso($id) {
    $id = (int)$id;
    /*$code_qu_str = "SELECT code FROM languages WHERE languages_id = ".$id;
    $code_qu = xtc_db_query($code_qu_str);*/
    $code_qu_str = "SELECT code FROM languages WHERE languages_id = ?";
    $code_qu = $this->api_db_conn->apiDbQuery($code_qu_str, (int)$id);
    //if(xtc_db_num_rows($code_qu) > 0) {
    if($this->api_db_conn->apiDbNumRows($code_qu) > 0) {
      //$code_arr = xtc_db_fetch_array($code_qu);
      $code_arr = $this->api_db_conn->apiDbFetchArray($code_qu);
      return $code_arr['code'];
    }
    return 'lang code not exists';
  }

  /**  
   * protected method purifyResp
   *
   * @param $response, API response, string or array
   * @return sanitized strings
   */
  protected function purifyResp($response) {
    if(is_array($response)) {
      foreach ($response as $key => $value) {
        $response[$key] = $this->purifyResp($value);
      }
    } else {
      $response = preg_replace('/<script(.*?)>(.*?)<\/script>/is', '', $response);
      $response = preg_replace('/<iframe(.*?)>(.*?)<\/iframe>/is', '', $response);
    }

    return $response;
  }

  /**  
   * public method doRequest
   *
   * @param $url
   * @param $method (get or post)
   * @param $type_request_vals, type of vals to be sent in request (normal or json)
   * @param $type_accept, for Accept header
   * @param $vals, to be sent in request (array)
   * @param $auth, authentification for Authorization header (array, e.g.: array('user' => '', 'token' => ''))
   * @param $fp, resource for potential CURLOPT_FILE
   * @param $json_dec, json_decode response ? ('y' or 'n' for 'yes' or 'no')
   * @param $timeout, self explanatory
   * @return curl response or error
   */
  public function doRequest($url, $method, $type_request_vals, $type_accept, $vals = array(), $auth = array(), $fp = NULL, $json_dec = 'n', $timeout = '') {  
    if(!empty($auth)) {
      $hve_err = '';
      $post_or_get_vals = '';
    
      $headers = array();
      if($type_accept == 'json') {
        $headers[] = 'Accept: application/json';
      } else if($type_accept == 'csv') {
        $headers[] = 'Accept: text/csv';
      } else if($type_accept == 'xml') {
        $headers[] = 'Accept: application/xml';
      }

      if($type_request_vals == 'normal') {
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
      } else if($type_request_vals == 'json') {
        $headers[] = 'Content-Type: application/json';
      }

      if(isset($auth['token']) && $auth['token'] != '') {
        $headers[] = 'Authorization: Bearer '.$auth['token'];
        $post_or_get_vals = $type_request_vals == 'json' ? json_encode($vals) : http_build_query($vals);
      }

      $eff_url = $method == 'get' ? ($post_or_get_vals != '' ? $url.'?'.$post_or_get_vals : $url) : $url;

      $c_obj = curl_init();

      curl_setopt($c_obj, CURLOPT_URL, $eff_url);
      curl_setopt($c_obj, CURLOPT_RETURNTRANSFER, 1);
      //BOC debug
      if($this->debug_curl === true) {
        $fp_dbg = fopen(DIR_FS_LOG.'curllog_'.date('d-m-Y_H:i:s').'.txt', 'w');
        curl_setopt($c_obj, CURLOPT_VERBOSE, 1);
        curl_setopt($c_obj, CURLOPT_STDERR, $fp_dbg);
      }
      //EOC debug
      if(isset($fp) && $fp !== NULL && is_resource($fp)) {
        curl_setopt($c_obj, CURLOPT_FILE, $fp);
      }
      if($method == 'get') {
        curl_setopt($c_obj, CURLOPT_HTTPGET, 1);
      } else if($method == 'post') {
        curl_setopt($c_obj, CURLOPT_POST, 1);
        if($post_or_get_vals != '') {
          curl_setopt($c_obj, CURLOPT_POSTFIELDS, $post_or_get_vals);
        }
      }
      curl_setopt($c_obj, CURLOPT_HTTPHEADER, $headers);
      if(isset($timeout) && $timeout != '' && is_numeric($timeout)) {
        curl_setopt($c_obj, CURLOPT_TIMEOUT, (int)$timeout);
      }
      curl_setopt($c_obj, CURLOPT_SSL_VERIFYPEER, 1);

      $result = curl_exec($c_obj);
      if(curl_errno($c_obj)) {
        $hve_err = 'ERROR: '.curl_error($c_obj);
      }
      curl_close($c_obj);

      $ret_result = $json_dec == 'y' ? json_decode($result, true) : $result;
    } else {
      $hve_err = 'ERROR: No authentication provided !';
    }

    if($hve_err != '') {
      return $hve_err;
    }

    return $this->purifyResp($ret_result);
  }
  
  /**  
   * public method receiveRequest
   *
   * @param $requ_url, requested URL
   * @return array of url parts and query string parts, if applicable
   */
  public function receiveRequest(string $requ_url): array {
    $url_parts = $this->getUrlParts($requ_url);
    if(isset($url_parts['error']) ) {
      return array('error' => $url_parts['error']);
    }
    
    if(strpos($requ_url, '?') !== false && $_SERVER['QUERY_STRING'] != '') {
      $query_parts = $this->getQueryStringParts($_SERVER['QUERY_STRING']);
    }

    $ret_arr = array('url_parts' => $url_parts);
    if(isset($query_parts)) {
      $ret_arr['query_parts'] = $query_parts;
    }

    return $ret_arr;
  }

  /**  
   * public method callRestMethod
   *
   * @param $uri_arr, array of URI parts
   * @param $api_key, self-explanatory 
   * @param $api_token, self-explanatory
   * @param $api_valid_until, self-explanatory
   * @param $rem_add, optional IP address of 
   * @return
   */
  public function callRestMethod($uri_arr, $api_key, $api_token, $api_valid_until, $rem_add = '') {
    if(isset($uri_arr['error'])) {
      return json_encode(array('error' => $uri_arr['error']));
    }

    if($rem_add !== '') {
      $time_start = microtime(true);
    }

    $api_call = isset($uri_arr['url_parts'][3]) && $uri_arr['url_parts'][3] != '' ? $uri_arr['url_parts'][3] : NULL;
    $action = isset($uri_arr['url_parts'][4]) && $uri_arr['url_parts'][4] != '' ? $uri_arr['url_parts'][4] : NULL;
    $params = isset($uri_arr['query_parts']) && is_array($uri_arr['query_parts']) ? $uri_arr['query_parts'] : NULL;

    if(!empty($api_call) && !empty($action)) {
      //Authorization
      if($this->browser_mode === false) {
        $headers = $this->getHeaders();
        if($headers !== false && !empty($headers)) {
          //JorisK 01-2024 Bugfix es gibt Systeme welche "Authorization" obwohl im Call mitgegeben nicht im Header des Calls haben, deswegen wird immer ein Backup Authrorization mitgesendet
          if (!isset($headers['Authorization']) && isset($headers['Reqserauthorization'])) {
            $headers['Authorization'] = $headers['Reqserauthorization'];
          }
          if($api_call == 'temp_token' && ($action == 'fetch' || $action == 'renew')) {
            if(isset($headers['Authorization'])) {
              if($api_key == '') {
                $err = array('error' => 'no API Key Set'); //array('auth' => base64_decode($headers['Authorization']));
              } elseif(base64_decode($headers['Authorization']) != $api_key) {
                $err = array('error' => ($this->dev_mode === true ? 'wrong API Key' : 'restricted area, not authorized')); //array('auth' => base64_decode($headers['Authorization']));
              }
            } else {
              $err = array('error' => ($this->dev_mode === true ? 'authorization header missing' : 'restricted area, not authorized')); //array('auth' => base64_decode($headers['Authorization']));
            }
          } else {
            if(isset($headers['Authorization'])) {
              if($this->hashAuthHeader($api_key, $api_token) == $headers['Authorization']) {
                $headers_auth = base64_decode($headers['Authorization']);
                $headers_auth_arr = explode(':', $headers_auth);
                if($headers_auth_arr[0] != $api_key && $headers_auth_arr[1] != $api_token) {
                  $err = array('error' => ($this->dev_mode === true ? 'API key and/or token are not right' : 'restricted area, not authorized'));
                } else {
                  $valid_until = strtotime((string)$api_valid_until); 
                  $now = time();
                  if($valid_until < $now) {
                    $err = array('error' => ($this->dev_mode === true ? 'token validity expired' : 'restricted area, not authorized'));
                  }
                }
              } else {
                $err = array('error' => ($this->dev_mode === true ? 'hashed auth string doesn\'t correspond' : 'restricted area, not authorized'));
              }
            } else {
              $err = array('error' => ($this->dev_mode === true ? 'authorization header missing' : 'restricted area, not authorized'));
            }
          }
        } else {
          $err = array('error' => ($this->dev_mode === true ? 'headers empty or no headers sent' : 'restricted area, not authorized'));
        }
      }

      //execute call
      if(array_key_exists($api_call, $this->allowed_methods) && array_key_exists($action, $this->allowed_methods[$api_call])) {
        $method = $this->allowed_methods[$api_call][$action]['method'];
        if(strtolower($_SERVER['REQUEST_METHOD']) !== $method) {
          $err = array('error' => 'wrong method, method should be '.$method);
        }

        $method_name = 'call' . ucwords($api_call) . ucwords($action);
        if(!empty($params)) {
          $hve_prms = array_key_exists('params', $this->allowed_methods[$api_call][$action]);
          $sent_params = array_keys($params);

          if($hve_prms === true) {
            foreach($sent_params as $p) {
              if(!in_array($p, $this->allowed_methods[$api_call][$action]['params'])) {
                $temp_err = array('error' => 'params '.$p.' not allowed => allowed params '.json_encode($this->allowed_methods[$api_call][$action]['params']));
              }
            }
          } else {
            $temp_err = array('error' => 'no GET params allowed');
          }
        }

        if(!isset($temp_err)) {
          $api_call_response = call_user_func_array(array($this, $method_name), (!empty($params) ? $params : array()));
        } else {
          $err = $temp_err;
        }
      } else {
        $err = array('error' => 'unallowed API call test '.$action.' '.$api_call.print_r($this->allowed_methods, true)); 
      }
    } else {
      $err = array('error' => 'no proper API call');
    }

    //BOC log access ?
    if($rem_add !== '') {
      $time_end = microtime(true);

      if(!empty($params)) {
        $params_str = '';
        foreach($params as $k => $v) {
          $params_str .= $k.'='.$v.', ';
        }
      }
      if(isset($err)) {
        $err_str = '';
        foreach($err as $ka => $va) {
          $err_str .= $ka.' => '.$va;
        }
      }

      $hve_err_str = isset($err_str) ? $err_str : '';
      $hve_resp_err = isset($api_call_response) && array_key_exists('error', $api_call_response) ? $api_call_response['error'] : '';
      $exec_time = number_format(($time_end - $time_start), 4);
      $log_str = date('Y-m-d H:i:s').' | '.$rem_add.' | exec_time '.$exec_time.': '."\n"
                .'called: '.(isset($method_name) ? $method_name.'()' : '').(isset($params_str) ? ' with params: '.$params_str : '')."\n"
                .($hve_err_str != '' ? 'errors: '.$hve_err_str."\n" : ($hve_resp_err != '' ? 'errors: '.$hve_resp_err."\n" : ''))
                .'-----------------------------------'."\n";
      $fp = fopen($this->log_path.'api_access_'.date('Y-m-d').'.log', 'a');
      fwrite($fp, $log_str);
      fclose($fp);
    }
    //EOC log access ?

    return $this->browser_mode === false ? json_encode((isset($err) ? $err : $api_call_response)) : (isset($err) ? $err : $api_call_response);
  }
}
?>
