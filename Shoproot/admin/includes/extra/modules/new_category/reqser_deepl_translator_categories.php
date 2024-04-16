<?php
/* -----------------------------------------------------------------------------------------
* file: reqser_deepl_translator_categories.php
* path: \admin\includes\extra\modules\new_category\
* use: system module for DeepL translation via API
* Reqser.com Deepl Translator automation for Modified Shop
* JorisK 01-2024
   ---------------------------------------------------------------------------------------*/

  defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');
  include_once (DIR_FS_CATALOG . 'lang/'.$_SESSION['language'].'/modules/system/reqser.php');
  if(defined('MODULE_SYSTEM_REQSER_STATUS') && constant('MODULE_SYSTEM_REQSER_STATUS') == 'true' && defined('MODULE_SYSTEM_REQSER_REQUEST_ON_CATEGORIES_EDIT') && constant('MODULE_SYSTEM_REQSER_REQUEST_ON_CATEGORIES_EDIT') == 'true') {
    if (constant('MODULE_SYSTEM_REQSER_REQSER_API_KEY') != ''){
      if (defined('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS') && constant('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS') == ''){
        echo '<div class="messageStackError">'.MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR.'</div>';   
      } else {
      echo '<div id="reqser_check_activ_success" class="success_message" hidden></div>';
      echo '<div id="reqser_check_activ_error" class="error_message" hidden>'.MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION.'</div>';
      echo '<div id="reqser_check_activ_info" class="info_message" style="background-color: #f0f6fe; color: #2a4dd0; position: static;" hidden></div>';
      echo '<div id="reqser_check_activ_loading" class="success_message">'.MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING.'</div>';
        if (isset($_GET['cID']) && $_GET['cID'] > 0) {
          $reqser_cid = (int)$_GET['cID'];
        } else {
          $reqser_cid = 'new_entry';
        }
        $reqser_check_activ_postfields = array('website' => $_SERVER['HTTP_HOST']);
        $reqser_post_fields = array('website' => $_SERVER['HTTP_HOST'], 'table' => 'categories_description', 'id' => $reqser_cid, 'customer_id' => $_SESSION['customer_id']);
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
                $('div[id="reqser_check_activ_loading"]').attr('hidden', true);
                alert(data_message['warning_message']);
              } else if (data_message['info_message'] && data_message['info_message'] != ''){
                $('div[id="reqser_check_activ_info"]').removeAttr('hidden').html(data_message['info_message']);
                $('div[id="reqser_check_activ_loading"]').attr('hidden', true);
              } else if (data_message['success_message'] && data_message['success_message'] != '') {
                $('div[id="reqser_check_activ_success"]').removeAttr('hidden').html(data_message['success_message']);
                $('div[id="reqser_check_activ_loading"]').attr('hidden', true);
              } else {
                $('div[id="reqser_check_activ_error"]').removeAttr('hidden');
                $('div[id="reqser_check_activ_loading"]').attr('hidden', true);
              }
            } else {
                $('div[id="reqser_check_activ_error"]').removeAttr('hidden');
                $('div[id="reqser_check_activ_loading"]').attr('hidden', true);
            }
            });
            $('form[name="new_category"]').submit(function(e) {
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
      }
    } else {
      echo '<div class="messageStackError">'.MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY.'</div>';
    }
  } elseif (!defined('MODULE_SYSTEM_REQSER_STATUS') || constant('MODULE_SYSTEM_REQSER_STATUS') == 'false') {
    echo '<div class="messageStackError">'.MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED.'</div>';
  }  
?>