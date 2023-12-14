<?php
/***********************************************************
* file: reqser_conf_helper_funcs.php
* path: /admin/includes/extra/functions/
* use: helper function for system module reqser
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © 08-2023 by JorisK Reqser.com

***********************************************************/

$nr_reqser_default_tables = array('banners',
                                  'categories_description',
                                  'content_manager',
                                  'content_manager_content',
                                  'coupons_description',
                                  'customers_status',
                                  'email_content', 
                                  'manufacturers_info',
                                  'orders_status',
                                  'products_content',
                                  'products_description',
                                  'products_options',
                                  'products_options_values',
                                  'products_tags_options',
                                  'products_tags_values',
                                  'products_vpe',
                                  'products_xsell_grp_name',
                                  'shipping_status',
                                );

//JorisK 12-2023 Tabellen die nicht ausgewählt werden können bzw. auch nicht manuell hinzugefügt werden können
$nr_reqser_exclude_tables = array('admin_access',
                                  'address_book',
                                  'banners_history',
                                  'cookie_consent_categories',
                                  'cookie_consent_cookies',
                                  'customers',
                                  'languages', //JorisK 12-2023 wird über die API gemanaged
                                  'orders',
                                  );

if(!function_exists('nr_cfg_multi_checkbox')) {
  function nr_cfg_multi_checkbox($format, $separator, $checked, $key = '') {   
    if (preg_match("'chr\(([0-9]{1,3})\)'",$separator, $matches)) {
      $separator  = chr($matches[1]);
    }
    $checkboxes = '';
    $checkedboxes = (array) explode($separator, $checked);
    $format_array =  (!is_array($format) && function_exists($format)) ? (array)$format() : (array)$format;

    $cnt_fa = count($format_array);
    $cntr = 1;
    foreach($format_array as $k => $val) {
      if (is_array($val)) {
        $k   = isset($val['id'])   ? $val['id']   : $k;
        $val = isset($val['text']) ? $val['text'] : $val;
      }
      $checkboxes .= '<label>';
      $checkboxes .= xtc_draw_checkbox_field('configuration['.$key.'][]', $k, (bool)in_array($k, $checkedboxes));
      $checkboxes .= $val . '</label>'.($cntr != $cnt_fa ? '<br>' : '');
      $cntr++;
    }
    return $checkboxes;
  }
}

if(!function_exists('nr_cfg_select_option')) {
  function nr_cfg_select_option($select_array, $key_value, $key = '') {
    $string = '';
    $name = (($key) ? 'configuration['.$key.']' : 'configuration_value');

    $option_array = array();
    foreach($select_array as $txt => $id) {
      $option_array[] = array(
        'id' => $id,
        'text' => xtc_multi_lang_values($txt),
      );
    }
    $string = xtc_draw_pull_down_menu($name, $option_array, $key_value);

    return $string;
  }
}

if(!function_exists('nr_cfg_select_option_langs')) {
  function nr_cfg_select_option_langs($select_array, $key_value, $key = '') {
    $select_array = get_langs_from_translate_as_array();
    $string = '';
    $name = (($key) ? 'configuration['.$key.']' : 'configuration_value');

    $option_array = array();
    foreach($select_array as $txt => $id) {
      $option_array[] = array(
        'id' => $id,
        'text' => xtc_multi_lang_values($txt),
      );
    }
    $string = xtc_draw_pull_down_menu($name, $option_array, $key_value);

    return $string;
  }
}

if(!function_exists('get_default_tables_to_translate')) {
  function get_default_tables_to_translate() {
    global $nr_reqser_default_tables;
    $tables_arr = $nr_reqser_default_tables;
    //JorisK Prüfen ob plugin_sq_ajax_add_to_cart_data und/oder plugin_language_snippets_data wenn ja in default nehmen, wegen Spezialfall für Language
    $plugin_sq_ajax_add_to_cart_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_sq_ajax_add_to_cart_data'");
    if (xtc_db_num_rows($plugin_sq_ajax_add_to_cart_data) > 0) {
      $tables_arr[] = 'plugin_sq_ajax_add_to_cart_data';
    }
    $plugin_language_snippets_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_language_snippets_data'");
    if (xtc_db_num_rows($plugin_language_snippets_data) > 0) {
      $tables_arr[] = 'plugin_language_snippets_data';
    }
    $tbls_arr = array();
    foreach($tables_arr as $tbl) {
      $tbls_arr[$tbl] = array('id' => $tbl,
                              'text' => $tbl);
    }

    return $tbls_arr;
  }
}

if(!function_exists('get_more_tables_to_translate')) {
  function get_more_tables_to_translate() {
    global $nr_reqser_default_tables;
    global $nr_reqser_exclude_tables;
    $default_tables_arr = $nr_reqser_default_tables;
    //JorisK für Template resolution
    $plugin_sq_ajax_add_to_cart_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_sq_ajax_add_to_cart_data'");
    if (xtc_db_num_rows($plugin_sq_ajax_add_to_cart_data) > 0) {
      $default_tables_arr[] = 'plugin_sq_ajax_add_to_cart_data';
    }
    $plugin_language_snippets_data = xtc_db_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'plugin_language_snippets_data'");
    if (xtc_db_num_rows($plugin_language_snippets_data) > 0) {
      $default_tables_arr[] = 'plugin_language_snippets_data';
    }

    $exclude_tables_arr = $nr_reqser_exclude_tables;

    $exclude_tables_arr = array_merge($default_tables_arr, $exclude_tables_arr);

    //tables with an auto_increment column, try to filter out tables with a column like 'lang%' which are not relevant for translation (e.g. content_manager is an exception, which we have in default tables but)
    $not_valid_tbls_qu = xtc_db_query("SELECT DISTINCT TABLE_NAME AS tbl FROM INFORMATION_SCHEMA.COLUMNS WHERE EXTRA = 'auto_increment' ORDER BY tbl ASC");
    $not_valid_tbls_array = array();
    while($not_valid_tbls_arr = xtc_db_fetch_array($not_valid_tbls_qu)) {
      $not_valid_tbls_array[] = $not_valid_tbls_arr['tbl'];
    }

    $more_tbls_qu_str = "SELECT DISTINCT TABLE_NAME as tbl
                           FROM INFORMATION_SCHEMA.COLUMNS
                          WHERE COLUMN_NAME LIKE 'lang%'  # IN ('language_id','languages_id')
                       ORDER BY tbl ASC";
    $more_tbls_qu = xtc_db_query($more_tbls_qu_str);
    $more_tbls_array = array();
    while($more_tbls_arr = xtc_db_fetch_array($more_tbls_qu)) {
      if(!in_array($more_tbls_arr['tbl'], $exclude_tables_arr) && !in_array($more_tbls_arr['tbl'], $not_valid_tbls_array)) {
        $moretbls_arr[$more_tbls_arr['tbl']] = array('id' => $more_tbls_arr['tbl'],
                                     'text' => $more_tbls_arr['tbl']);
      }
    }

    return $moretbls_arr;
  }
}

//not used yet (probably to dangerous, since customer may not be able to distinct tables with to be translated columns)
if(!function_exists('get_rest_tables_to_translate')) {
  function get_rest_tables_to_translate() {
    $default_tbls = get_default_tables_to_translate();
    $more_tbls = get_more_tables_to_translate();
    $more_tbls_add_qu = xtc_db_query("SHOW TABLES");
    $more_tbls_add_array = array();
    while($more_tbls_add_arr = xtc_db_fetch_row($more_tbls_add_qu)) {
      $tbls = $more_tbls_add_arr[0];
      if(!array_key_exists($tbls, $default_tbls) && !array_key_exists($tbls, $more_tbls)) {
        $more_tbls_add_array[$tbls] = $tbls;
      }
    }

    return $more_tbls_add_array;
  }
}

if(!function_exists('get_langs_to_translate')) {
  function get_langs_to_translate() {
    $langs_qu = xtc_db_query("SELECT code, languages_id FROM ".TABLE_LANGUAGES);
    $languages_arr = array();
    $idx = 0;
    while($langs_arr = xtc_db_fetch_array($langs_qu)) {
      $languages_arr[$idx] = array('id' => $langs_arr['languages_id'],
                                   'text' => strtoupper($langs_arr['code']));
      $idx++;
    }

    return $languages_arr;
  }
}

if(!function_exists('get_langs_from_translate')) {
  function get_langs_from_translate() {
    $lang_qu = xtc_db_query("SELECT code, languages_id
                               FROM ".TABLE_LANGUAGES."
                           ORDER BY sort_order");

    $lang_arr_str = 'array(';
    while($lang_arr = xtc_db_fetch_array($lang_qu)) {
      $lang_arr_str .= '\\\''.strtoupper($lang_arr['code']).'\\\' => \\\''.$lang_arr['languages_id'].'\\\', ';
    }
    $lang_arr_str = rtrim($lang_arr_str, ', ');
    $lang_arr_str .= ')';

    return $lang_arr_str;
  }
}

if(!function_exists('get_langs_from_translate_as_array')) {
  function get_langs_from_translate_as_array() {
    $lang_qu = xtc_db_query("SELECT code, languages_id
                               FROM ".TABLE_LANGUAGES."
                           ORDER BY sort_order");

    $lang_array = array();
    while($lang_arr = xtc_db_fetch_array($lang_qu)) {
      $lang_array[strtoupper($lang_arr['code'])] = $lang_arr['languages_id'];
    }

    return $lang_array;
  }
}
?>
