<?php
/***********************************************************
* file: application_top_api.php
* path: /includes/
* use: application_top for local API
*
* © copyright 08-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

***********************************************************/

// start the timer for the page parse time log
define('PAGE_PARSE_START_TIME', microtime());

// set the level of error reporting
@ini_set('display_errors', false);
error_reporting(0);

// Set the local configuration parameters - mainly for developers - if exists else the mainconfigure
if (file_exists(dirname(__FILE__).'/local/configure.php')) {
  include_once(dirname(__FILE__).'/local/configure.php');
} else {
  include_once(dirname(__FILE__).'/configure.php');
}

// minimum requirement
if (version_compare(PHP_VERSION, '7.0', '<')) {
  return array('error' => 'APi Version too low min PHP 7.0 Shop has '.PHP_VERSION);
}

// default time zone
defined('DEFAULT_TIMEZONE') OR define('DEFAULT_TIMEZONE', 'Europe/Berlin');
date_default_timezone_set(DEFAULT_TIMEZONE);

// new error handling
if (is_file(DIR_WS_INCLUDES.'error_reporting.php')) {
  require_once (DIR_WS_INCLUDES.'error_reporting.php');
}

if(!function_exists('xtc_get_ip_address')) {
  require_once(DIR_FS_INC.'xtc_get_ip_address.inc.php');
}
if(!function_exists('xtc_input_validation')) {
  require_once(DIR_FS_EXTERNAL.'api_local/inc/nr_input_validation.inc.php');
}
// security inputfilter for GET/POST/COOKIE
require_once (DIR_FS_INC.'html_encoding.php');
require (DIR_WS_CLASSES.'class.inputfilter.php');
$InputFilter = new InputFilter();

$_GET = $InputFilter->process($_GET);
$_POST = $InputFilter->process($_POST);
$_REQUEST = $InputFilter->process($_REQUEST);
$_GET = $InputFilter->safeSQL($_GET);
$_POST = $InputFilter->safeSQL($_POST);
$_REQUEST = $InputFilter->safeSQL($_REQUEST);

// auto include
require_once (DIR_FS_INC . 'auto_include.inc.php');
  
// define the project version
define('PROJECT_VERSION', 'modified eCommerce Shopsoftware');

define('TAX_DECIMAL_PLACES', 0);

// set the type of request (secure or not)
if (file_exists(DIR_WS_INCLUDES.'request_type.php')) {
  include (DIR_WS_INCLUDES.'request_type.php');
} else {
  $request_type = 'NONSSL';
}

// Base/PHP_SELF/SSL-PROXY
require_once(DIR_FS_INC . 'set_php_self.inc.php');
$PHP_SELF = set_php_self();

// include the list of project filenames
require(DIR_WS_INCLUDES . 'filenames.php');

// include the list of project database tables
require(DIR_WS_INCLUDES . 'database_tables.php');

// Store DB-Querys in a Log File
define('STORE_DB_TRANSACTIONS', 'false');

// Database
require_once (DIR_FS_INC.'db_functions_'.DB_MYSQL_TYPE.'.inc.php');
require_once (DIR_FS_INC.'db_functions.inc.php');

// make a connection to the database... now
xtc_db_connect() or die('Unable to connect to database server!');

// set the application parameters
$configuration_query = xtc_db_query('select configuration_key as cfgKey, configuration_value as cfgValue from ' . TABLE_CONFIGURATION);
while ($configuration = xtc_db_fetch_array($configuration_query)) {
  defined($configuration['cfgKey']) OR  define($configuration['cfgKey'], stripslashes($configuration['cfgValue'])); //Web28 - 2012-08-09 - fix slashes
}

//compatibility for modified eCommerce Shopsoftware 1.06 files
defined('DIR_WS_BASE') OR define('DIR_WS_BASE', '');
?>
