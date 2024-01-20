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
        echo '<div class="success_message">Das Reqser.com DeepL Modul wird alle im Modul aktivierten Fremdsprachen automatisch nach dem Speichern für dieses Produkt übersetzen.</div>';
        if (isset($_GET['pID']) && $_GET['pID'] > 0) {
          $reqser_pid = $_GET['pID'];
        } else {
          $reqser_pid = 'new_entry';
        }
        $reqser_post_fields = array('website' => $_SERVER['HTTP_HOST'], 'table' => 'products_description', 'id' => $reqser_pid);
        $msreq_local_api_key = defined('MODULE_SYSTEM_REQSER_REQSER_API_KEY') ? MODULE_SYSTEM_REQSER_REQSER_API_KEY : '';
        ?>
        <script>
          $(document).ready(function() {
            $('#new_product').submit(function(e) {
              e.preventDefault();
              let msreq_tok_key = '<?php echo $_SESSION['CSRFName']; ?>',
                  msreq_tok_val = '<?php echo $_SESSION['CSRFToken']; ?>';

              msreq_params = {ext: 'reqser_upd_qu_ajax', type: 'plain', reqser_instant_translate: 'true', msreq_api_key: '<?php echo $msreq_local_api_key; ?>', 'reqser_post_fields': '<?php echo json_encode($reqser_post_fields); ?>'};
              msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
              $.post("../ajax.php",
                msreq_params,
                function(data) {
                  if(data != '') {
                    var userConfirmed = confirm(data);
                    if(userConfirmed) {
                        e.currentTarget.submit();
                    }
                  }
                }
              );
            });
          });
          </script> 
        <?php
        
    } else {
      echo '<div class="messageStackError">Reqser Deepl Translator Modul hat kein API Key, bitte ein API Key hinterlegen</div>';
    }
  } elseif (constant('MODULE_SYSTEM_REQSER_STATUS') == 'false') {
    echo '<div class="messageStackError">Reqser Deepl Translator Modul nicht aktiviert, bitte aktivieren Sie das Modul in den Einstellungen</div>';
  }



  
  ?>