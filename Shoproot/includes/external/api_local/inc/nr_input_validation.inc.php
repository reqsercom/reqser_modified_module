<?php
/***********************************************************
* file: nr_input_validation.inc.php
* path: /includes/external/api_local/inc/
* use: input validation for local API
*
* © copyright 08-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

***********************************************************/

function nr_input_validation($var, $type, $repl_chr = '') {
  switch($type) {
    case 'cPath':
      $repl_param = '#[^0-9_]#';
      break;
    case 'int':
      $repl_param = '#[^0-9]#';
      break;
    case 'char':
      $repl_param = '#[^a-zA-Z]#';
      break;
    case 'lang':
      $repl_param = '#[^a-zA-Z_\-]#';
      break;
    case 'products_id':
      $repl_param = '#[^0-9\{\}]#';
      break;
    case 'amount':
      $var = str_replace(",", ".", $var);
      $repl_param = '#[^0-9\.]#';
      break;
    case 'ns_html':
      $var = preg_replace('#<script(.*?)>(.*?)<\/script>#is', '', $var);
      $repl_param = '#<iframe(.*?)>(.*?)<\/iframe>#is';
      break;
  }

  $val = preg_replace($repl_param, $repl_chr, $var);

  return $val;
}
?>
