<?php
/********************************************************************
* file: reqser_remove_main_image_from_mo_images.php
* path: \includes\extra\modules\product_info_mo_images\

* © copyright 03-2025, JorisK Reqser.com AG

********************************************************************/

if (defined('MODULE_SYSTEM_REQSER_STATUS') && constant('MODULE_SYSTEM_REQSER_STATUS') == 'true' && defined('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') && constant('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') == 'true') {
    if (isset($more_images_data[-1])){
        //Damit das wirksam wird muss iM Template {reqser_main_image_tag} an der richtigen Stelle eingefügt werden
        $info_smarty->assign('reqser_main_image_tag', $more_images_data[0]);
        unset($more_images_data[-1]);
    } 
}