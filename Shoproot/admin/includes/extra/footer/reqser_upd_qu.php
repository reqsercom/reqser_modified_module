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
          let version = '<?php echo constant('MODULE_SYSTEM_REQSER_INSTALLED_MODULE_VERSION'); ?>';
          let dir_admin = '<?php echo DIR_WS_ADMIN; ?>';
          let msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>';

          msreq_params = {ext: 'reqser_upd_qu_ajax', type: 'plain', reqser_upd_qu: 'true', msreq_api_key: '<?php echo $msreq_local_api_key; ?>'};
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['warning_message'] && data_message['warning_message'] != ''){
                  if (parseFloat(version) != parseFloat(data_message['current_module_version'])){   
                    var button = `<form action="` + dir_admin + `module_export.php?set=system" method="post">  
                                      <input type="hidden" name="reqser_modul_update" value="true">`;

                        // Adding CSRF hidden field if CSRF_TOKEN_SYSTEM is true
                        if ('<?php echo CSRF_TOKEN_SYSTEM; ?>' == 'true') {
                            button += `<input type="hidden" name="` + msreq_tok_key + `" value="` + msreq_tok_val + `">`;
                        }

                        button += `<button type="submit" id="reqser_auto_update_button" class="button">Modul Automatisiert Updaten</button>
                                   </form>`;
                    //Now add the button to $('div[id="module_export_reqser_header"]')
                    $('div[id="module_export_reqser_header"]').html(data_message['warning_message'] + button);
                    $('div[id="module_export_reqser_header"]').css('color', data_message['text_color']);
                  } else {
                    $('div[id="module_export_reqser_header"]').html(data_message['warning_message']);
                    $('div[id="module_export_reqser_header"]').css('color', data_message['text_color']);
                  }

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
          let msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>';
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
          var msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>';
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
          var msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>';
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
        let msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
            msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>';
        var tableHtml = `<table class="tableBoxCenter collapse"><tbody><tr class="dataTableHeadingRow">
                          <td class="dataTableHeadingContent">Reqser.com</td>
                          <td class="dataTableHeadingContent txta-c" style="width:10%;">Installiert</td>
                          <td class="dataTableHeadingContent txta-c" style="width:10%;">Update Status</td>
                          <td class="dataTableHeadingContent txta-r" style="width:15%;">Version integriert</td>
                          <td class="dataTableHeadingContent txta-r" style="width:15%;">Version verfügbar</td>
                          <td class="dataTableHeadingContent txta-r" style="width:10%;">Aktion</td>
                        </tr>
                        <tr class="dataTableRow" id="reqser_module_row">
                        <td class="dataTableContent">Modul Version</td>
                        <td class="dataTableContent txta-c">
                          <img src="images/icon_status_green.gif" alt="installiert" title="installiert" width="12" height="12" style="border:0;margin-left: 5px;">                        
                        </td>
                        <td class="dataTableContent txta-c" id="reqser_update_necessary">                          
                        </td>
                        <td class="dataTableContent txta-r">` + version + `</td>
                        <td class="dataTableContent txta-r" id="reqser_aviable_module_version"></td> 
                        <td class="dataTableContent txta-r">
                        <form action="` + dir_admin + `check_update.php" method="post">  
                          <input type="hidden" name="reqser_modul_update" value="true">
                        `;
        // Adding CSRF hidden field if CSRF_TOKEN_SYSTEM is true
        if ('<?php echo CSRF_TOKEN_SYSTEM; ?>' == 'true') {
          tableHtml += `<input type="hidden" name="` + msreq_tok_key + `" value="` + msreq_tok_val + `">`;
        }
        tableHtml +=  `<button type="submit" id="reqser_auto_update_button" class="button" hidden>Modul Automatisiert Updaten</button>
                        </form>
                        </td>
                      </tr>
                      <tr><td colspan="6" id="reqser_update_instruction_message"></td></tr>
                      <tr><td colspan="5" style="height:35px;">&nbsp;</td></tr>
                      
                    </tbody></table>`;
        $('.boxCenterLeft').prepend(tableHtml);
        $(function() {
          msreq_params = {ext: 'reqser_upd_qu_ajax', type: 'plain', reqser_upd_qu: 'true', msreq_api_key: '<?php echo $msreq_local_api_key; ?>'};
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['current_module_version'] && data_message['current_module_version'] != ''){
                  $('td[id="reqser_aviable_module_version"]').html(data_message['current_module_version']);
                  if (parseFloat(version) != parseFloat(data_message['current_module_version'])){
                    //Show Update Button
                    $('#reqser_auto_update_button').show();
                    $('td[id="reqser_update_necessary"]').html('<img src="images/icon_status_red.gif" alt="update notwendig" title="update" width="12" height="12" style="border:0;margin-left: 5px;">');
                    $('#reqser_module_row').css({'background-color': 'red', 'color': 'white'});
                    if (data_message['reqser_update_instruction_message'] && data_message['reqser_update_instruction_message'] != ''){
                      $('td[id="reqser_update_instruction_message"]').html(data_message['reqser_update_instruction_message']);
                    }
                  } else {
                    $('td[id="reqser_update_necessary"]').html('<img src="images/icon_status_green.gif" alt="aktuell" title="aktuell" width="12" height="12" style="border:0;margin-left: 5px;">');
                  }
                } 
              }
              if (data_message['alert_message'] && data_message['alert_message'] != ''){
                alert(data_message['alert_message']);
              }
            }
          );
        });

      }
      </script>
    <?php
    }    

    if (isset($_POST['reqser_modul_update']) && $_POST['reqser_modul_update'] == 'true') {
      if (!extension_loaded('zip')) {
        ?>
        <script>
          alert('ZIP PHP Extension is missing, please download and update manualy!');
        </script>
        <?php
      } else {
        function rrmdir_reqser($dir) {
          if (is_dir($dir)) {
              $objects = scandir($dir);
              foreach ($objects as $object) {
                  if ($object != "." && $object != "..") {
                      if (filetype($dir . "/" . $object) == "dir") {
                        rrmdir_reqser($dir . "/" . $object); // Recursive call
                      } else {
                          unlink($dir . "/" . $object); // Delete file
                      }
                  }
              }
              reset($objects);
              rmdir($dir); // Remove directory
          }
        }
        // Define the admin directory dynamically or set it directly
        $dir_admin = substr(DIR_WS_ADMIN, 0, -1); // Update this path as needed
    
        // Ensure the tmp directory is empty and re-created
        rrmdir_reqser('download_reqser/tmp');
        mkdir(DIR_FS_CATALOG . 'download_reqser/tmp', 0755, true);
    
        // Define the URL to download the ZIP file
        $url = "https://www.reqser.com/download_reqser_modified_modul_custom" . $dir_admin;
    
        // Specify path where the file will be saved
        $zipFile = DIR_FS_CATALOG . "download_reqser/tmp/reqser_modul.zip";
    
        // Download the file
        $fileData = file_get_contents($url);
        if ($fileData !== false) {
            // Save the downloaded file
            if (file_put_contents($zipFile, $fileData)) {
              // Unzip the file
              $zip = new ZipArchive;
              if ($zip->open($zipFile) === TRUE) {
                  $zip->extractTo(DIR_FS_CATALOG);
                  $zip->close();
                  // Clean up the tmp directory
                  rrmdir_reqser(DIR_FS_CATALOG . 'download_reqser');
                  unlink(DIR_FS_CATALOG . 'download_reqser');
                  ?>
                  <script>
                    alert('The Reqser Module is updated successfully.');
                  </script>
                  <?php
              } else {
                  ?>
                  <script>
                    alert('Failed to extract the file.');
                  </script>
                  <?php
              }
  
            } else {
                ?>
                <script>
                  alert('Failed to download the file.');
                </script>
                <?php
            }
        } else {
            ?>
            <script>
              alert('Failed to download the file.');
            </script>
            <?php
        }
      }

    }

  if(defined('MODULE_SYSTEM_REQSER_REQUEST_ON_SEO_PRODUCTS_EDIT')
    && constant('MODULE_SYSTEM_REQSER_REQUEST_ON_SEO_PRODUCTS_EDIT') == 'true'
    && basename($PHP_SELF) == 'categories.php' 
    && isset($_GET['action'])
    && $_GET['action'] == 'new_product'
    && $msreq_local_api_key != '') {

    $languages = array();
    $fwl_language = constant('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG');
    $languages[] = $fwl_language;

    $iwl_languages = explode(',', constant('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS'));
    array_walk($iwl_languages, function($iwl_languages) use (&$languages) {
      $languages[] = $iwl_languages;
    });
    ?>

    <script>
      var languages = <?php echo json_encode($languages); ?>;
      var form_inputs = [];

      $(document).ready(function() {

        // Add a placeholder for the Reqser SEO settings
        var product_description_id_underscore = $('#products_description_'+<?php echo $fwl_language ?>),
            product_description_id_bracket = $('#products_description\\['+<?php echo $fwl_language ?>+'\\]');
            product_description_selector = product_description_id_underscore.length > 0 ? product_description_id_underscore : product_description_id_bracket.length > 0 ? product_description_id_bracket : null,
            products_id = $('input[name="products_id"]').val() == 0 ? "new_product" : $('input[name="products_id"]').val(); // Set the products_id to "new_product" if it's 0, otherwise use the value
        
        var loadingMessage = "<?php echo MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING ?>";
        var content = '<div id="reqser_seo_product_description_placeholder_2" style="text-align: center; animation: pulse 2s infinite; margin: 40px 0 0;">' + loadingMessage + '</div><style> @keyframes pulse { 0% { opacity: 1;} 50% { opacity: 0.5; } 100% { opacity: 1; } } </style>';
        var original_text = '';

        if ($(product_description_selector).length > 0) {
          $(product_description_selector).after(content);
        }

        var msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
            msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>',
            fwl_language = '<?php echo $fwl_language; ?>',
            max_attempts = 5,
            attempt = 0,
            productDescriptions = [],
            productDescriptionsExists = 'false',
            product_description_id_underscore_exists,
            product_description_id_bracket_exists;

        function sendAjaxRequest() {
          msreq_params = {
            ext: 'reqser_upd_qu_ajax',
            type: 'plain',
            reqser_request_on_seo_products_edit: 'true', 
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            productDescriptions: productDescriptions,
            productDescriptionsExists: productDescriptionsExists,
            product_description_id_underscore_exists: product_description_id_underscore_exists,
            product_description_id_bracket_exists: product_description_id_bracket_exists,
            manufacturers_id: $('select[name="manufacturers_id"]').val(),
            products_id: products_id,
          };

          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);

                if (data_message['reqser_buttons'] && Array.isArray(data_message['reqser_buttons']) && data_message['reqser_buttons'].length > 0) {
                  
                  for (var i = 0; i < data_message['reqser_buttons'].length; i++) {
                    var button = data_message['reqser_buttons'][i];
                    if (button['add_to_container'] && button['add_to_container'] != '' && button['container_content'] && button['container_content'] != '') {
                      var container = button['add_to_container'];
                      if (container.startsWith('#') || container.startsWith('.')) {
                        // Use the container value directly if it has a # or . prefix
                        var selector = container.replace(/([\[\]])/g, "\\$1"); // escape special characters
                      } else {
                        // Assume it's an ID if there's no prefix
                        var selector = '#' + container.replace(/([\[\]])/g, "\\$1"); // escape special characters
                      }
                      $('#reqser_seo_product_description_placeholder_2').hide();
                      if ($(selector).length > 0) {
                        var content = $(button['container_content']);
                        $(selector).after(content);
                      } else {
                        // TODO: Handle the case where the container doesn't exist
                      }
                    }
                  }
                }
                if (data_message['form_inputs'] && Array.isArray(data_message['form_inputs']) && data_message['form_inputs'].length > 0) {
                  form_inputs = data_message['form_inputs'];
                }
                if (data_message['alert_message'] && data_message['alert_message'] != ''){
                  alert(data_message['alert_message']);
                }
              }
            }
          );
        }

        function checkProductsDescriptionEditorLoaded() {
          product_description_id_underscore_exists = $('#cke_products_description_'+fwl_language).length > 0 ? 'true' : 'false';
          product_description_id_bracket_exists = $('#cke_products_description\\['+fwl_language+'\\]').length > 0 ? 'true' : 'false';

          if ((product_description_id_underscore_exists == 'true' || product_description_id_bracket_exists == 'true')) {
            
            for (var i = 0; i < languages.length; i++) {
              // Check if an element with the id cke_products_description_ + language exists
              var productDescriptionUnderscore = $('#cke_products_description_' + languages[i]),
                  productDescriptionBracket = $('#cke_products_description\\[' + languages[i] + '\\]');

              var productDescription = productDescriptionUnderscore.length > 0 ? productDescriptionUnderscore : productDescriptionBracket.length > 0 ? productDescriptionBracket : null;
              
              // Find the body of the editor, if the productDescription element exists
              if (productDescription) {
                var productDescriptionBody = productDescription.contents().find('body');

                // Check if the body element exists
                if (productDescriptionBody) {
                  // Extend the productDescriptions array with a new object
                  productDescriptions.push({
                    language_id: languages[i],
                  });
                  productDescriptionsExists = 'true';
                }
              }
            }

            sendAjaxRequest();
          } else if (attempt < max_attempts) {
            attempt++;
            // Retry after a short delay if the iframe is not yet loaded
            setTimeout(checkProductsDescriptionEditorLoaded, 2000);
          } else {
            console.error('Reqser.com: Products description editor not found after maximum attempts. SEO settings may not work correctly.');
            sendAjaxRequest();
          }
        }

        checkProductsDescriptionEditorLoaded();
      });

      $(document).ready(function() {
        $(document).on('click', '#reqser_seo_product_description_edit_button_2', function() {

          var msreq_tok_key = '<?php echo $_SESSION['CSRFName'] ?? null; ?>',
              msreq_tok_val = '<?php echo $_SESSION['CSRFToken'] ?? null; ?>',
              msreq_params = {},
              products_id = $('input[name="products_id"]').val() == 0 ? "new_product" : $('input[name="products_id"]').val(), // Set the products_id to "new_product" if it's 0, otherwise use the value
              keywords_as_manufacturers_default = $('#reqser_seo_product_description_keywords_default_' + <?php echo $fwl_language ?>).is(':checked');
          
          // Loop through the form inputs and add them to the msreq_params object
          var seo_inputs = {};
          if (form_inputs.length > 0) {
            for (var i = 0; i < form_inputs.length; i++) {
              var form_input = form_inputs[i];
              var input;
              var value;
              var nameWithoutBrackets = form_input['name'].replace(/\[.*\]/g, '');

              if (form_input['type'] === 'radio') {
                input = $('input[name="'+form_input['name']+'"]');
                var checked = $('input[name="'+form_input['name']+'"]:checked');
                if (input.data('required') == true && checked.length === 0) {
                  alert("<?php echo MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING ?>" + " " + nameWithoutBrackets);
                  return; // Stop the function if a required field is empty
                }
                value = checked.val();
              } else {
                input = $(form_input['type']+'[name="'+form_input['name']+'"]');
                if (input.data('required') == true && input.val().trim() === '') {
                  alert("<?php echo MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING ?>" + " " + nameWithoutBrackets);
                  return; // Stop the function if a required field is empty
                }
                value = input.val();
              }

              seo_inputs[nameWithoutBrackets] = value;
            }
          }

          function sanitizeAndEncodeHTML(html) {
            var tempDiv = document.createElement('div');
            tempDiv.innerText = html;
            var encodedHTML = tempDiv.innerHTML;
            return encodeURIComponent(encodedHTML);
          }
          
          function revertSanitizeAndEncodeHTML(encodedHTML) {
            return decodeURIComponent(encodedHTML);
          }

          $('#reqser_seo_product_description_edit_2').hide();
          $('#reqser_seo_product_description_loader_2').show();

          var productDescriptionUnderscore = $('#cke_products_description_' + <?php echo $fwl_language ?>);
          var productDescriptionBracket = $('#cke_products_description\\[' + <?php echo $fwl_language ?> + '\\]');          
          var productDescription = productDescriptionUnderscore.length > 0 ? productDescriptionUnderscore : productDescriptionBracket.length > 0 ? productDescriptionBracket : null;          

          if (productDescription) {
            var iframe = productDescription.find('iframe');
            var textarea = productDescription.find('textarea');
            if (iframe.length > 0) {
              var iframeDocument = iframe[0].contentDocument || iframe[0].contentWindow.document;
              if (iframeDocument) {
                var body_element = $(iframeDocument).find('body.cke_editable');
                var bodyContent = body_element.html();
                original_text = bodyContent;
                var sanitizedContent = sanitizeAndEncodeHTML(bodyContent);
              } else {
                $('#reqser_seo_product_description_edit_2').show();
                $('#reqser_seo_product_description_loader_2').hide();
                $('#reqser_seo_product_description_reset_button_2').show();
                console.error('Reqser.com: Iframe document not found');
                return;
              }
            } else if (textarea.length > 0) {
              var body_element = textarea;
              var bodyContent = body_element.val();
              original_text = bodyContent;
              var sanitizedContent = sanitizeAndEncodeHTML(bodyContent);
            } else {
              $('#reqser_seo_product_description_edit_2').show();
              $('#reqser_seo_product_description_loader_2').hide();
              $('#reqser_seo_product_description_reset_button_2').show();
              console.error('Reqser.com: Neither iframe nor textarea found');
              return;
            }
          } else {
            $('#reqser_seo_product_description_edit_2').show();
            $('#reqser_seo_product_description_loader_2').hide();
            $('#reqser_seo_product_description_reset_button_2').show();
            console.error('Reqser.com: Product description not found');
            return;
          }

          msreq_params = {
            ext: 'reqser_upd_qu_ajax', 
            type: 'plain', 
            reqser_request_seo_edit: 'true',
            msreq_api_key: '<?php echo $msreq_local_api_key; ?>',
            text: sanitizedContent,
            products_id: products_id,
            products_name: $('input[name="products_name[2]"]').val(),
            column: 'products_description',
            table_name: 'products_description',
            seo_inputs: seo_inputs,
            language: "2",
            manufacturers_id: $('select[name="manufacturers_id"]').val(),
            keywords_as_manufacturers_default: keywords_as_manufacturers_default,
          };
          msreq_params[msreq_tok_key] = ""+msreq_tok_val+"";
          $.post("../ajax.php",
            msreq_params,
            function(data) {
              if(data != '') {
                var data_message = JSON.parse(data);
                if (data_message['seo_edited_text'] && data_message['seo_edited_text'] != '') {

                  var iframe = productDescription.find('iframe');
                  var textarea = productDescription.find('textarea');
                  if (iframe.length > 0) {
                    var iframeDocument = iframe[0].contentDocument || iframe[0].contentWindow.document;
                    if (iframeDocument) {
                      var body_element = $(iframeDocument).find('body.cke_editable');
                      body_element.html(data_message['seo_edited_text']);
                    } else {
                      console.error('Reqser.com: Iframe document not found');
                    }
                  } else if (textarea.length > 0) {
                    textarea.val(data_message['seo_edited_text']);
                  } else {
                    alert('Reqser.com: Something went wrong. Please try again later.');
                    console.error('Reqser.com: Neither iframe nor textarea found');
                  }
                }
                if (data_message['alert_message'] && data_message['alert_message'] != '') {
                  alert(data_message['alert_message']);
                }
              } else {
                alert('Reqser.com: Something went wrong. Please try again later.');
                console.error('Reqser.com: No data returned');
              }

              $('#reqser_seo_product_description_edit_2').show();
              $('#reqser_seo_product_description_loader_2').hide();
              $('#reqser_seo_product_description_reset_button_2').show();
            }
          );
        });
      });

      $(document).ready(function() {
        $(document).on('click', '#reqser_seo_product_description_reset_button_2', function() {

          var productDescriptionUnderscore = $('#cke_products_description_' + <?php echo $fwl_language ?>),
              productDescriptionBracket = $('#cke_products_description\\[' + <?php echo $fwl_language ?> + '\\]'),
              productDescription = productDescriptionUnderscore.length > 0 ? productDescriptionUnderscore : productDescriptionBracket.length > 0 ? productDescriptionBracket : null;

          if (productDescription) {
            var iframe = productDescription.find('iframe');
            var textarea = productDescription.find('textarea');
            if (iframe.length > 0) {
                var iframeDocument = iframe[0].contentDocument || iframe[0].contentWindow.document;
                if (iframeDocument) {
                    var body_element = $(iframeDocument).find('body.cke_editable');
                    body_element.html(original_text);
                } else {
                  console.error('Reqser.com: Iframe document not found');
                  return;
                }
            } else if (textarea.length > 0) {
              textarea.val(data_message['seo_edited_text']);
            } else {
              console.error('Reqser.com: Neither iframe nor textarea found');
              return;
            }
          } else {
            console.error('Reqser.com: Product description not found');
            return;
          }
        });
      });

    </script>
  <?php
  }
}

