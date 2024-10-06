<?php
/***********************************************************
* file: DbFuncs.php
* path: /includes/external/api_local/classes/
* use: Db methods for local api
*
* contributions: with ideas from https://codeshack.io/super-fast-php-mysql-database-class/
*
* © copyright 09-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © copyright 01-2024, JorisK, some Bugfixes and additions

***********************************************************/

namespace api_local;

class DbFuncs {
  private $db_conn;
  protected $show_err, 
            $use_pconnect, 
            $log_dir, 
            $store_db_transaction, 
            $store_db_slow_qu, 
            $store_db_slow_qu_time, 
            $store_db_datetime_format, 
            $email_swl_errs, $run_dir_admin;

  /**
   * public method __contruct
   *
   * @param string $svr (db server)
   * @param string $usr (db user)
   * @param string $pss (db password)
   * @param string $db (db name)
   * @param string $chrst (db connection charset)
   * @return nothing (connect to db)
   */
  public function __construct(string $svr, string $usr, string $pss, string $db, string $chrst) {
    //BOC config
    $this->show_err = false;
    $this->use_pconnect = defined('USE_PCONNECT') ? USE_PCONNECT : 'false';
    $this->log_dir = defined('DIR_FS_LOG') ? DIR_FS_LOG : (defined('DIR_FS_CATALOG') ? DIR_FS_CATALOG.'log/' : dirname(__FILE__, 6).'/log/' );
    $this->store_db_transaction = defined('STORE_DB_TRANSACTIONS') ? STORE_DB_TRANSACTIONS : 'false';
    $this->store_db_slow_qu = defined('STORE_DB_SLOW_QUERY') ? STORE_DB_SLOW_QUERY : 'false';
    $this->store_db_slow_qu_time = defined('STORE_DB_SLOW_QUERY_TIME') ? (float)STORE_DB_SLOW_QUERY_TIME : 1;
    $this->store_db_datetime_format = defined('STORE_PARSE_DATE_TIME_FORMAT') ? STORE_PARSE_DATE_TIME_FORMAT : 'Y-m-d_H:i:s';
    $this->email_swl_errs = defined('EMAIL_SQL_ERRORS') ? EMAIL_SQL_ERRORS : 'false';
    $this->run_dir_admin = defined('RUN_MODE_ADMIN') ? 'true' : 'false';
    //EOC config

    //mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $this->db_conn = $this->connectDb($svr, $usr, $pss, $db, $chrst);
  }

  /**
   * protected method connectDb
   *
   * @param string $svr (db server)
   * @param string $usr (db user)
   * @param string $pss (db password)
   * @param string $db (db name)
   * @param string $chrst (db connection charset)
   * @return db connection object
   */
  protected function connectDb(string $svr, string $usr, string $pss, string $db, string $chrst) {
    $port_socket = explode(':', $svr);
    $p = $this->use_pconnect === 'true';
    try {
      $db_conn = new \mysqli((($p === true ? 'p:' : '').$port_socket[0]), $usr, $pss, $db, (isset($port_socket[1]) ? $port_socket[1] : null), (isset($port_socket[2]) ? $port_socket[2] : null));
    } catch(Exception $e) {
      $err = 'Connection failed: '.$db_conn->connect_error;
    }

    try {
      $db_conn->set_charset($chrst);
    } catch(Exception $e) {
      $err = 'Couln\'t set charset for db connection: '.$db_conn->connect_error;
    }

    if(isset($err) && $err != '') {
      $this->apiDbError('', $err);
    }

    return $db_conn;
  }

  /**
   * public method apiDbQuery
   *
   * @param string $query (query string)
   * @param ...$params (variable number of parameters for prepared statement, as comma separated string or as array)
   * @return MySQL prepared statement result (mysqli_stmt) or query result
   */
  public function apiDbQuery(string $query, ...$params) {   
    if(isset($this->store_db_transaction) && $this->store_db_transaction == 'true') {
      $qu_start_time = microtime(true);
    }

    if(version_compare(PHP_VERSION, '7.4', '<')) {
      //JorisK the get_magic_quotes_gpc is not always actiavated also before 7.4
      if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
        $gmqu = get_magic_quotes_gpc();
      }
    }

    if(!empty($params)) {
      $types = '';
      $args = array();

      foreach($params as $param) {
        if(is_array($param)) {
          foreach($param as $prm) {
            if(isset($gmqu) && $gmqu === true)
              $prm = stripslashes($prm);

            $types .= $this->getType($prm);
            $args[] = $prm;
          }
        } else {
          if(isset($gmqu) && $gmqu === true)
            $param = stripslashes($param);

          $types .= $this->getType($param);
          $args[] = $param;
        }
      }

      try {
        $stmt = $this->db_conn->prepare($query);
      } catch(Exception $e) {
        $err = '('.$this->db_conn->errno.') Unable to prepare statement (check your syntax): '.$this->db_conn->error;
        $stmt = false;
      }

      if(isset($stmt) && $stmt !== false) {
        $bp = $stmt->bind_param($types, ...$args);
        if($bp === false) {
          $last_err = error_get_last();
          if($last_err !== null)
            $err = 'Unable to execute query: '.$last_err['message'].' in '.$last_err['file'];
        }

        $exct = $stmt->execute();
        if($exct === false) {
          $last_err = error_get_last();
          if($last_err !== null)
            $err = 'Unable to execute query: '.$last_err['message'].' in '.$last_err['file'];
        }

        //buffer for later use in num_rows() and potentially data_seek()
        $stmt->store_result();
      }

      $result = $stmt;
    } else {
      try {
        $res = $this->db_conn->query($query);
      } catch(Exception $e) {
        $err = '('.$this->db_conn->errno.') Query error: '.$this->db_conn->error;
        $res = false;
      }

      $result = $res;
    }

    if(isset($this->store_db_transaction) && $this->store_db_transaction == 'true') {
      $qu_end_time = microtime(true);
      $process_time = number_format(round($qu_end_time - $qu_start_time, 5), 5, '.', '');

      if(isset($this->store_db_slow_qu) && (($this->store_db_slow_qu == 'true' && $process_time >= $this->store_db_slow_qu_time) || $this->store_db_slow_qu == 'false')) {
        $this->apiDbSlowQuLog($process_time, $query, 'QUERY');
      }
      if(isset($err) && $err != '') {
        $this->apiDbSlowQuLog($process_time, $err, 'ERROR');
      }
    }

    if(isset($err) && $err != '') {
      $ph_query = !empty($args) ? str_replace('?', '%s', $query) : $query;
      $formated_qu = !empty($args) ? vsprintf($ph_query, $args) : $ph_query;
      $this->apiDbError($formated_qu, $err);
    }

    return $result;
  }

  /**
   * public method apiDbArrayToTable
   *
   * @param string $table (db table)
   * @param array $data_arr (array of values with field name as keys)
   * @param string $action ('insert' or 'update')
   * @param array $where (array with where parameters)
   * @return number of rows of query result
   */
  function apiDbArrayToTable(string $table, array $data_arr, string $action = 'insert', array $where = array()) {
    $cnt_datarr = count($data_arr);
    $act = strtolower($action);

    if(!is_array($data_arr) || $cnt_datarr < 1) {
      return false;
    }

    reset($data_arr);
    $values = rtrim(str_repeat('?,', $cnt_datarr), ',');
    $sql_arr = array();
    foreach($data_arr as $column => $param) {
      switch($param) {
        case '0': //JorisK 01-2024 Bugfix for ID 0
          $sql_arr[$column] = '0';
          break;
        case 'now()':
          $sql_arr[$column] = 'now()';
          break;
        case 'null':
          $sql_arr[$column] = 'null';
          break;
        default:
          $sql_arr[$column] = $param;
          break;
      }
    }

    if(strtolower($act) === 'insert') {
      $query = "INSERT INTO ".$table." (".implode(', ', array_keys($sql_arr)).") VALUES (".$values.")";
    }
    
    if(strtolower($act) === 'update') {
      $query = "UPDATE ".$table." SET ";
      $params_arr = array();
      foreach($sql_arr as $col => $val) {
        $query .= $col." = ?, ";
        $params_arr[] = $val;
      }
      $query = rtrim($query, ', ');
      if(!empty($where)) {
        $i = 0;
        foreach($where as $wcol => $wval) {
          $query .= ($i === 0 ? " WHERE " : " AND ").$wcol." = ?";
          $params_arr[] = $wval;

          $i++;
        }
      }   
    }

    if($stmt = $this->apiDbQuery($query, $act === 'insert' ? $sql_arr : $params_arr)) {
      return $stmt;
    }

    return false;
  }

  /**
   * public method apiDbFetchArray
   *
   * @param $stmt prepared statement object or query result object
   * @return array of results with field names as keys
   */
  public function apiDbFetchArray($stmt, $close = false) {
    //if(!is_iterable($stmt)) {
    if(!$this->custom_is_iterable($stmt)) {
      $params = array();
      $row = array();
      $meta = $stmt->result_metadata();
      while($field = $meta->fetch_field()) {
        $params[] = &$row[$field->name];
      }

      $stmt->bind_result(...$params);

      $result = array();
      if($stmt->fetch()) {
        foreach($row as $key => $val) {
          $result[$key] = $val;
        }
      }
    } else {
      $result = $stmt->fetch_array(MYSQLI_ASSOC);
    }

    if($close === true) {
      $stmt->close();
    }

		return $result;
	}

  /**
   * public method apiDbFetchArrayLoop
   *
   * @param $stmt prepared statement object or query result object
   * @param $lkey optional key for result array
   * @param optional callback func
   * @return array of results (with $lkey as key) with sub-array with field names as keys
   */
  public function apiDbFetchArrayLoop($stmt, $lkey = null, $close = false, $callback = null) {
    //echo '<pre style="padding:10px 0 0;">'.(is_iterable($stmt) ? 'is iterable' : 'is NOT iterable').'</pre>';
    //if(!is_iterable($stmt)) { //we have params to be bound
    if(!$this->custom_is_iterable($stmt)) {
      $params = array();
      $row = array();
      $meta = $stmt->result_metadata();
      while($field = $meta->fetch_field()) {
        $params[] = &$row[$field->name];
      }

      $stmt->bind_result(...$params);

      $result = array();
      while($stmt->fetch()) {
        $r = array();
        foreach($row as $key => $val) {
          if($lkey !== null) {
            if($lkey === $key) {
              $eff_key = $val;
            }
          }
          $r[$key] = $val;
        }
        if($callback != null && is_callable($callback)) {
          $value = call_user_func($callback, $r);
          if($value === 'break') break;
        } else {
          if(isset($eff_key)) {
            $result[$eff_key] = $r;
          } else {
            $result[] = $r;
          }
        }
      }
    } else {
      $result = array();
      while($row = $stmt->fetch_array(MYSQLI_ASSOC)) {
        if($lkey !== null) {
          $result[$row[$lkey]] = $row;
        } else {
          $result[] = $row;
        }
      }
    }

    if($close === true) {
      $stmt->close();
    }

		return $result;
	}

  /**
   * public method apiDbFetchRow
   *
   * @param $stmt prepared statement object or query result object
   * @return array of results with field names as keys
   */
  public function apiDbFetchRow($stmt, $close = false) {
    //if(!is_iterable($stmt)) {
    if(!$this->custom_is_iterable($stmt)) {
      $params = array();
      $row = array();
      $meta = $stmt->result_metadata();
      while($field = $meta->fetch_field()) {
        $params[] = &$row[$field->name];
      }

      $stmt->bind_result(...$params);
      $result = array();

      while($stmt->fetch()) {
        foreach($row as $val) {
          $result[] = $val;
        }
      }
    } else {
      $result = $stmt->fetch_array(MYSQLI_NUM);
    }

    if($close === true) {
      $stmt->close();
    }

		return $result;
	}

  /**
   * public method apiDbNumRows
   *
   * @param $stmt prepared statement object
   * @return number of rows of query result
   */
  public function apiDbNumRows($stmt, $close = false) {
    //if(!is_iterable($stmt)) {
    if(!$this->custom_is_iterable($stmt)) {
      $num_rows = $stmt->num_rows;
      if($close === true) {
        $stmt->close();
      }
    } else {
      $num_rows = $stmt->num_rows;
    }

		return $num_rows;
	}

  /**
   * public method apiDbDataSeek
   *
   * @param $stmt prepared statement object
   * @param $offset
   * @return if prepared statement nothing else boolean
   */
  public function apiDbDataSeek($stmt, $offset = 0) {
    return $stmt->data_seek($offset);
	}

  /**
   * public method apiDbAffectedRows
   *
   * @param $stmt prepared statement object
   * @return affected rows of query result
   */
  public function apiDbAffectedRows($stmt, $close = false) {
		if($close === true) {
      $stmt->close();
    }
    return $stmt->affected_rows;
	}

  /**
   * public method apiDbLastInsertId
   *
   * @return last inserted id
   */
  public function apiDbLastInsertId() {
    return $this->db_conn->insert_id;
  }

  /**
   * public method apiDbEscapeStr
   *
   * @param $str string to be escaped
   * @return escaped string
   */
  public function apiDbEscapeStr(string $str) {
    if(function_exists('mysqli_real_escape_string')) {
      return $this->db_conn->real_escape_string($str);
    }

    return addslashes($str);
  }

  /**
   * protected method apiDbError
   *
   * @param $query
   * @param $error
   * @return nothing, send mail if configured, trigger_error
   */
  protected function apiDbError(string $query, string $error) {
    // Send an email to the shop owner if a sql error occurs
    if(isset($this->email_swl_errs) && $this->email_swl_errs == 'true') {
      require_once (DIR_FS_INC.'xtc_php_mail.inc.php');
      $subject = 'DATA BASE ERROR at ' . STORE_NAME;
      $message = '<b style="color:#ff0000;">'.$error.'<br><br>'.$query.'<br><br>Request URL: '.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'<br><br><small style="color:#ff0000">[modified API SQL Error]</small></b>';
      $message_txt = preg_replace('#<br\s*/?>#i', "\n", $message);
      xtc_php_mail(STORE_OWNER_EMAIL_ADDRESS, 
                   STORE_OWNER, 
                   STORE_OWNER_EMAIL_ADDRESS, 
                   '', 
                   '', 
                   STORE_OWNER_EMAIL_ADDRESS, 
                   STORE_OWNER, 
                   '', 
                   '', 
                   $subject, 
                   nl2br($message),
                   strip_tags($message_txt));
    }

    trigger_error($error.'<br/><br/>'.$query, E_USER_WARNING);
  }

  /**
   * protected method apiDbStmtClose 
   *
   * @return close stmt object
   */
  public function apiDbStmtClose($stmt) {
		return $stmt->close();
	}

  /**
   * protected method close 
   *
   * @return close DB connection
   */
  public function apiDbClose() {
		return $this->db_conn->close();
	}

  /**
   * protected method getType
   *
   * @param $var
   * @return type of variable
   */
  private function getType($var) {
    switch(true) {
      case is_string($var):
        $ret = 's';
        break;
      case is_float($var):
        $ret = 'd';
        break;
      case is_int($var):
        $ret = 'i';
        break;
      default:
        $ret = 'b';
    }
    return $ret;
	}

  /**
   * protected method custom_is_iterable
   *
   * @param $var
   * @return whether $var is iterable (boolean)
   */
  function custom_is_iterable($var) {
    if(function_exists('is_iterable')) {
      return is_iterable($var);
    } else {
      return is_array($var) || $var instanceof \Traversable;
    }
  }

  /**
   * protected method apiDbSlowQuLog
   *
   * @param $process_time
   * @param $query
   * @param $type
   * @return nothing, writes log
   */
  protected function apiDbSlowQuLog($process_time, $query, $type) {
    $backtrace = debug_backtrace();

    $filename = $this->log_dir.'api_sql_'.($this->run_dir_admin == 'true' ? 'admin_' : '').strtolower(str_replace(' ', '_', $type)).'_'.date('Y-m-d').'.log';
    error_log(date($this->store_db_datetime_format).' '. $type.' found for URL: '.mod_error_url()."\n", 3, $filename);
    error_log(date($this->store_db_datetime_format).' '. $type.' ['.$process_time.'s] '.$query."\n", 3, $filename);
    $err = 0;
    for($i = 0, $n = count($backtrace); $i < $n; $i++) {
      if(isset($backtrace[$i]['file'])) {
        error_log(date($this->store_db_datetime_format).' Backtrace #'.$err.' - '.$backtrace[$i]['file'].' called at Line '.$backtrace[$i]['line'] . "\n", 3, $filename);
        $err ++;
      }
    }
  }

  /**
   * protected method showError
   *
   * @param $err (error message)
   * @return error and exit
   */
  protected function showError(string $err) {
    if($this->show_err === true) {
      exit($err);
    }
  }
}
?>
