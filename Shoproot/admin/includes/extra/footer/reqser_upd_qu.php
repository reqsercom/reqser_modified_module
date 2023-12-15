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

********************************************************************/

if(defined('MODULE_SYSTEM_REQSER_STATUS') && MODULE_SYSTEM_REQSER_STATUS == 'true') {
  if(basename($PHP_SELF) == 'module_export.php' && isset($_GET['set']) && $_GET['set'] == 'system') {
    if(!isset($_SESSION['msreq_upd_requested'])) {
      $msreq_local_api_key = defined('MODULE_SYSTEM_REQSER_REQSER_API_KEY') ? MODULE_SYSTEM_REQSER_REQSER_API_KEY : '';
      if($msreq_local_api_key != '') {
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
        $('div[id="module_export_reqser_header"]').html(data);
        $('div[id="module_export_reqser_header"]').css('color', 'red');
      }
    }
  );
});
</script>
<?php
      }
    }
  }
}