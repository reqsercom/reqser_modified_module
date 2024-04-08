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
                if (data_message['reqser_boxes']) {
                  for (var key in data_message['reqser_boxes']) {
                    var box = data_message['reqser_boxes'][key];
                    if (box['add_to_container'] && box['add_to_container'] != '' && box['container_content'] && box['container_content'] != '') {
                        if($('.' + box['add_to_container']).length > 0) {
                            var newDiv = $('<div>').html(box['container_content']);
                            $('.' + box['add_to_container']).prepend(newDiv);
                        }
                    }
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
  if (basename($PHP_SELF) == 'check_update.php') {
    ?>
      <script>
      if ($('.boxCenterLeft').length > 0) {
        let version = '<?php echo constant('MODULE_SYSTEM_REQSER_INSTALLED_MODULE_VERSION'); ?>';
        let dir_admin = '<?php echo DIR_WS_ADMIN; ?>';
        var tableHtml = `<table class="tableBoxCenter collapse"><tbody><tr class="dataTableHeadingRow">
                          <td class="dataTableHeadingContent">Reqser.com</td>
                          <td class="dataTableHeadingContent txta-c" style="width:10%;">Installiert</td>
                          <td class="dataTableHeadingContent txta-c" style="width:10%;">Update Status</td>
                          <td class="dataTableHeadingContent txta-r" style="width:15%;">Version integriert</td>
                          <td class="dataTableHeadingContent txta-r" style="width:15%;">Version verfügbar</td>
                          <td class="dataTableHeadingContent txta-r" style="width:10%;">Aktion</td>
                        </tr>
                        <tr class="dataTableRowSelected" onmouseover="this.style.cursor='pointer'" style="cursor: pointer;">
                        <td class="dataTableContent">Modul Version</td>
                        <td class="dataTableContent txta-c">
                          <img src="images/icon_status_green.gif" alt="installiert" title="installiert" width="12" height="12" style="border:0;margin-left: 5px;">                        
                        </td>
                        <td class="dataTableContent txta-c">
                                                
                        </td>
                        <td class="dataTableContent txta-r">` + version + `</td>
                        <td class="dataTableContent txta-r"></td> 
                        <td class="dataTableContent txta-r"><a class="button" target="_blank" onclick="this.blur();" href="https://www.reqser.com/download_reqser_modified_modul_custom/` + dir_admin + `">Download</a></td>
                      </tr>
                      <tr><td colspan="5" style="height:35px;">&nbsp;</td></tr>
                        
                        </tbody></table>`;
                        //<img src="images/icon_status_green.gif" alt="aktuell" title="aktuell" width="12" height="12" style="border:0;margin-left: 5px;"> 
        $('.boxCenterLeft').prepend(tableHtml);
      }
      </script>
    <?php
    }  
}

