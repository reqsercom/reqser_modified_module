<?php
/* -----------------------------------------------------------------------------------------
* file: reqser_deepl_translator_products.php
* path: \admin\includes\extra\modules\new_product\
* use: system module for DeepL translation via API
* Reqser.com Deepl Translator automation for Modified Shop
* JorisK 01-2024
   ---------------------------------------------------------------------------------------*/

  defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

  if(constant('MODULE_SYSTEM_REQSER_STATUS') == 'true') {
    if (constant('MODULE_SYSTEM_REQSER_REQSER_API_KEY') != ''){
      include_once (DIR_FS_CATALOG . 'lang/'.$_SESSION['language'].'/modules/system/reqser.php');
      echo '<div id="reqser_check_activ_success" class="success_message" hidden></div>';
      echo '<div id="reqser_check_activ_error" class="error_message" hidden>'.MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION.'</div>';
      echo '<div id="reqser_check_activ_info" class="info_message" style="background-color: #f0f6fe; color: #2a4dd0" hidden></div>';
        if (isset($_GET['pID']) && $_GET['pID'] > 0) {
          $reqser_pid = (int)$_GET['pID'];
        } else {
          $reqser_pid = 'new_entry';
        }
        $reqser_check_activ_postfields = array('website' => $_SERVER['HTTP_HOST']);
        $reqser_post_fields = array('website' => $_SERVER['HTTP_HOST'], 'table' => 'products_description', 'id' => $reqser_pid);
        $msreq_local_api_key = defined('MODULE_SYSTEM_REQSER_REQSER_API_KEY') ? MODULE_SYSTEM_REQSER_REQSER_API_KEY : '';
        ?>
        <script>
          var isDocumentReady = false;
          $(document).ready(function() {
              if (!isDocumentReady) {
                  isDocumentReady = true;
                  executeajaxrequest();
              }
          });
          setTimeout(function() {
              if (!isDocumentReady) {
                  isDocumentReady = true;
                  executeajaxrequest();
              }
          }, 500);
          function executeajaxrequest() {
          const msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';
          const msreq_check_activ_params = {
            ext: 'reqser_upd_qu_ajax', 
            type: 'plain', 
            reqser_check_activ: 'true', 
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            'reqser_post_fields': '<?php echo json_encode($reqser_check_activ_postfields); ?>'
          };
          msreq_check_activ_params[msreq_tok_key] = msreq_tok_val;
          $.post("../ajax.php", msreq_check_activ_params, function(data) {
            if(data != '') {
              var data_message = JSON.parse(data);
              if (data_message['warning_message'] && data_message['warning_message'] != ''){
                $('div[id="reqser_check_activ_error"]').removeAttr('hidden').html(data_message['warning_message']);
                alert(data_message['warning_message']);
              } else if (data_message['info_message'] && data_message['info_message'] != ''){
                $('div[id="reqser_check_activ_info"]').removeAttr('hidden').html(data_message['info_message']);
              } else if (data_message['success_message'] && data_message['success_message'] != '') {
                $('div[id="reqser_check_activ_success"]').removeAttr('hidden').html(data_message['success_message']);
              } else {
                $('div[id="reqser_check_activ_error"]').removeAttr('hidden');
              }
            } else {
                $('div[id="reqser_check_activ_error"]').removeAttr('hidden');
            }
          });
          $('#new_product').submit(function(e) {
            const msreq_params = {
              ext: 'reqser_upd_qu_ajax', 
              type: 'plain', 
              reqser_instant_translate: 'true', 
              msreq_api_key: '<?php echo $msreq_local_api_key; ?>', 
              'reqser_post_fields': '<?php echo json_encode($reqser_post_fields); ?>'
            };
            msreq_params[msreq_tok_key] = msreq_tok_val;
            $.post("../ajax.php", msreq_params);
        });
        };

      </script>

        <?php
        
    } else {
      echo '<div class="messageStackError">'.MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY.'</div>';
    }
  } elseif (constant('MODULE_SYSTEM_REQSER_STATUS') == 'false') {
    echo '<div class="messageStackError">'.MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED.'</div>';
  }  
  ?>