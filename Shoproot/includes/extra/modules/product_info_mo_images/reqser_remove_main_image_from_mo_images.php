<?php
/********************************************************************
* file: reqser_remove_main_image_from_mo_images.php
* path: \includes\extra\modules\product_info_mo_images\

* © copyright 03-2025, JorisK Reqser.com AG

Damit das wirksam wird muss iim Template die Bildanzeige angepasst werden!
Beispiel für Main Image Standard Nova Template templates\tpl_modified_nova\module\product_info\product_info_v1_tabs.html

Original suche nach:
<img class="lazyload" data-src="{$PRODUCTS_IMAGE|replace:"info_":"mini_"}" alt="{$PRODUCTS_NAME|onlytext}" title="{$PRODUCTS_NAME|onlytext}" />
<img class="lazyload" data-src="{$PRODUCTS_IMAGE|replace:"info_":"thumbnail_"}" alt="{$PRODUCTS_NAME|onlytext}" title="{$PRODUCTS_NAME|onlytext}" />

Neu einsetzen damit Tags angezeigt werden:
<img class="lazyload" data-src="{$PRODUCTS_IMAGE|replace:"info_":"mini_"}" alt="{if isset($reqser_main_image_tag) && $reqser_main_image_tag.IMAGE_ALT != ''}{$reqser_main_image_tag.IMAGE_ALT|onlytext}{else}{$PRODUCTS_NAME|onlytext}{/if}" title="{if isset($reqser_main_image_tag) && $reqser_main_image_tag.IMAGE_TITLE != ''}{$reqser_main_image_tag.IMAGE_TITLE|onlytext}{else}{$PRODUCTS_NAME|onlytext}{/if}" />
<img class="lazyload" data-src="{$PRODUCTS_IMAGE|replace:"info_":"thumbnail_"}" alt="{if isset($reqser_main_image_tag) && $reqser_main_image_tag.IMAGE_ALT != ''}{$reqser_main_image_tag.IMAGE_ALT|onlytext}{else}{$PRODUCTS_NAME|onlytext}{/if}" title="{if isset($reqser_main_image_tag) && $reqser_main_image_tag.IMAGE_TITLE != ''}{$reqser_main_image_tag.IMAGE_TITLE|onlytext}{else}{$PRODUCTS_NAME|onlytext}{/if}" />
                        


********************************************************************/

if (defined('MODULE_SYSTEM_REQSER_STATUS') 
    && constant('MODULE_SYSTEM_REQSER_STATUS') == 'true' 
    && defined('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') 
    && constant('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') == 'true'
    && defined('MODULE_SYSTEM_REQSER_LOAD_FRONTENT_MAIN_IMAGE')
    && constant('MODULE_SYSTEM_REQSER_LOAD_FRONTENT_MAIN_IMAGE') == 'true') {
    if (isset($more_images_data[0])){
        $info_smarty->assign('reqser_main_image_tag', $more_images_data[0]);
        unset($more_images_data[0]);
    } 
}