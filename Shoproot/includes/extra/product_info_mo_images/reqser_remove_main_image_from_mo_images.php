<?php

if (defined('MODULE_SYSTEM_REQSER_STATUS') && constant('MODULE_SYSTEM_REQSER_STATUS') == 'true' && defined('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') && constant('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') == 'true') {
    if (isset($more_images_data[0])){
        $info_smarty->assign('reqser_main_image_tag', $more_images_data);
        unset($more_images_data[0]);
    } 
}