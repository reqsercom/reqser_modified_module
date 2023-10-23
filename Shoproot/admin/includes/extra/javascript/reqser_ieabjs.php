<?php
/***********************************************************
* file: reqser_ieabjs.php
* path: /admin/includes/extra/javascript/
* use: helper js for system module reqser
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

***********************************************************/

if(basename($PHP_SELF, '.php') == 'module_export' 
    && isset($_GET['set']) && $_GET['set'] == 'system' 
    && isset($_GET['module']) && $_GET['module'] == 'reqser' 
    && isset($_GET['action']) && $_GET['action'] == 'edit'
  )
{
?>
<script>
$(function() {
  //read only for token and token expiry fields
  $('input[name="configuration[MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN]"], input[name="configuration[MODULE_SYSTEM_REQSER_TST_VALID_UNTIL]"]').prop('disabled', true);

  //make sending no value possible on cfg_multi_checkbox
  $('input[type="checkbox"][name^="configuration[MODULE_SYSTEM_REQSER_"]').on('change', function(idx) {
    let $this = $(this),
        $name = $this.attr('name'),
        first_of_name = $('input[type="checkbox"][name="'+$name+'"]').eq(0),
        hve_hid = first_of_name.length,
        hve_chckd = $('input[type="checkbox"][name="'+$name+'"]:checked').length;

    //console.log(hve_chckd);

    if(hve_chckd == 0) {
      if(hve_hid) first_of_name.prev('input[type="hidden"]').remove();
      $cln = $this.clone().attr({type:'hidden', name:$name, value:''});
      $cln.insertBefore(first_of_name);
    } else {
      if(hve_hid) first_of_name.prev('input[type="hidden"]').remove();
    }
  });
});
</script>
<?php  
}
?>