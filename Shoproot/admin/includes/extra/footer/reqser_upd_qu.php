<?php
/********************************************************************
* file: reqser_upd_qu.php
* path: /admin/includes/extra/footer/
* use: request for newer versions of reqser module
*      for DeepL translation via API
*
* © copyright 12-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* © copyright 03-2024, JorisK Reqser.com

********************************************************************/

if(defined('MODULE_SYSTEM_REQSER_STATUS') && MODULE_SYSTEM_REQSER_STATUS == 'true') {
  $msreq_local_api_key = defined('MODULE_SYSTEM_REQSER_REQSER_API_KEY') ? MODULE_SYSTEM_REQSER_REQSER_API_KEY : '';
  if(basename($PHP_SELF) == 'module_export.php' && isset($_GET['set']) && $_GET['set'] == 'system' && $msreq_local_api_key != '') {
        ?>
        <script>
        $(function() {
          let msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';

          msreq_params = {ext: 'reqser_upd_qu_ajax', type: 'plain', reqser_upd_qu: 'true', msreq_api_key: '<?php echo $msreq_local_api_key; ?>'};
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['warning_message'] && data_message['warning_message'] != ''){
                  $('div[id="module_export_reqser_header"]').html(data_message['warning_message']);
                  $('div[id="module_export_reqser_header"]').css('color', data_message['text_color']);
                } else if (data_message['success_message'] && data_message['success_message'] != '') {
                  $('div[id="module_export_reqser_header"]').html(data_message['success_message']);
                  $('div[id="module_export_reqser_header"]').css('color', data_message['text_color']);
                }
              }
            }
          );
        });
        </script>
        <?php
  }
  if (defined('MODULE_SYSTEM_REQSER_REQUEST_ON_START') && MODULE_SYSTEM_REQSER_REQUEST_ON_START == 'true' && basename($PHP_SELF) == 'start.php' && $msreq_local_api_key != ''){
        ?>
        <script>
        $(function() {
          let msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';
          let admincolRightExists = $('.admincol_right').length > 0 ? 'true' : 'false';
          let admincolLeftExists = $('.admincol_left').length > 0 ? 'true' : 'false';
          let admincolExists = $('.admincol').length > 0 ? 'true' : 'false';
          let admin_containerExists = $('.admin_container').length > 0 ? 'true' : 'false';
          let admincol_full_exists = $('.admincol_full').length > 0 ? 'true' : 'false';

          msreq_params = {
            ext: 'reqser_upd_qu_ajax', 
            type: 'plain', 
            reqser_request_on_start: 'true', 
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            admincol_right_exists: admincolRightExists,
            admincol_left_exists: admincolLeftExists,
            admincol_exists: admincolExists,
            admin_container_exists: admin_containerExists,
            admincol_full_exists: admincol_full_exists,
          };
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['add_to_container'] && data_message['add_to_container'] != '' && data_message['container_content'] && data_message['container_content'] != '') {
                  if($('.' + data_message['add_to_container']).length > 0) {
                    var newDiv = $('<div>').html(data_message['container_content']);
                    $('.' + data_message['add_to_container']).prepend(newDiv);
                  }
                }
                if (data_message['alert_message'] && data_message['alert_message'] != ''){
                  alert(data_message['alert_message']);
                }
              }
            }
          );
        });
        </script>
        <?php
  }
  if (defined('MODULE_SYSTEM_REQSER_REQUEST_ON_ORDERS_EDIT') && MODULE_SYSTEM_REQSER_REQUEST_ON_ORDERS_EDIT == 'true' && basename($PHP_SELF) == 'orders.php' && isset($_GET['action']) && $_GET['action'] == 'edit' && isset($order->info['languages_id']) && $msreq_local_api_key != ''){
    //Get Base Language
    if (defined('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG')){
      //JorisK 04-2024, die Änderung in der Sprache im Backend einer Bestellung ändert nur die langauge aber nicht die langauges_id, deshalb wird doppelt geprüft
      require_once (DIR_FS_INC . 'get_lang_id_by_directory.inc.php');
      $base_language_id = constant('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG');
      if (get_lang_id_by_directory($order->info['language']) != (int)$_SESSION['languages_id']){
        ?>

        <script>
        $(function() {
          var msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';
          let commentsExists = $('#comments').length > 0 ? 'true' : 'false';

          msreq_params = {
            ext: 'reqser_upd_qu_ajax', 
            type: 'plain', 
            reqser_request_on_orders_edit: 'true', 
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            comments_exists: commentsExists,
            fwl: '<?php echo $_SESSION['language']; ?>',
            iwl: '<?php echo $order->info['language']; ?>',
          };
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['add_to_container'] && data_message['add_to_container'] != '' && data_message['container_content'] && data_message['container_content'] != '') {
                  var container = data_message['add_to_container'];
                  if (container.startsWith('#') || container.startsWith('.')) {
                    // Use the container value directly if it has a # or . prefix
                    var selector = container;
                  } else {
                    // Assume it's an ID if there's no prefix
                    var selector = '#' + container;
                  }
                  if ($(selector).length > 0) {
                    var content = $(data_message['container_content']);
                    $(selector).after(content);
                  }
                }
                if (data_message['alert_message'] && data_message['alert_message'] != ''){
                  alert(data_message['alert_message']);
                }
              }
            }
          );
        });

        $(document).on('click', '#reqser_translate_button', function() {
          $('#reqser_translate_button').hide().prop('disabled', true);
          $('#reqser_product_edit_message').hide();
          var textareaContent = $('#comments').val();
          textareaContent = textareaContent.replace(/\n/g, '&#10;');
          var msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';
          msreq_params = {
            ext: 'reqser_upd_qu_ajax', 
            type: 'plain', 
            reqser_request_text_translation: 'true', 
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            text: textareaContent,
            fwl: '<?php echo $_SESSION['language']; ?>',
            iwl: '<?php echo $order->info['language']; ?>',
          };
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['translated_text'] && data_message['translated_text'] != ''){
                  $('#comments').val(data_message['translated_text']);
                } 
              }
          });
      });
        </script>
        <?php
      } 

    } 

  }
}

