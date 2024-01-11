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

        /* JorisK funktioniert irgendwie noch nicht
        $reqser_local_api_key = constant('MODULE_SYSTEM_REQSER_REQSER_API_KEY');
        $reqser_url = ''; 
        $reqser_pid = ((isset($_GET['pID']) && $_GET['pID'] > 0 ) ? $_GET['pID'] : 'new_product');
        $reqser_vals = array('website' => $_SERVER['HTTP_HOST'], 'table' => 'products_description', 'id' => $reqser_pid);
        $reqser_headers = array();
        $reqser_headers[] = 'Accept: application/json';
        ?>
        <script>
          $(document).ready(function() {
              $('new_product').submit(function(e) {
                  e.preventDefault(); 
                  alert('Form submitted. Preventing default behavior.');
                  console.log('Form submitted. Preventing default behavior.');
                  $.ajax({
                        type: 'POST',
                        url: 'https://reqser.com/api/translator/request_translation',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            reqser_vals: <?php echo json_encode($reqser_vals); ?>
                        }),
                        success: function(response) {
                            // Handle the success response
                            console.log(response);
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                            console.error(xhr.responseText);
                        }
                    });
              });
          });
          </script> 
        <?php
        */
    } else {
      echo '<div class="messageStackError">Reqser Deepl Translator Modul hat kein API Key, bitte ein API Key hinterlegen</div>';
    }
  } elseif (constant('MODULE_SYSTEM_REQSER_STATUS') == 'false') {
    echo '<div class="messageStackError">Reqser Deepl Translator Modul nicht aktiviert, bitte aktivieren Sie das Modul in den Einstellungen</div>';
  }



  
  ?>