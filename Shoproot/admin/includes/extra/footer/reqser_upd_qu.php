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

          msreq_params = {ext: 'reqser_upd_qu_ajax', type: 'plain', reqser_request_on_start: 'true', msreq_api_key: '<?php echo $msreq_local_api_key; ?>'};
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['add_to_container'] && data_message['add_to_container'] != '' && data_message['container_content'] && data_message['container_content'] != '') {
                  var newDiv = $('<div>').html(data_message['container_content']); // Create a new div with text content
                  $('.' + data_message['add_to_container']).prepend(newDiv); // Prepend the new div to the specified container
                }
                console.log(data_message);
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
}

