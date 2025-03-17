<?php
/********************************************************************
* file: reqser_add_main_image_from_mo_images.php
* path: includes\extra\modules\categories_listing\categories_smarty\

* © copyright 03-2025, JorisK Reqser.com AG

Damit das wirksam wird muss im Template die Bildanzeige angepasst werden!
Beispiel für Main Image Standard Nova Template templates\tpl_modified_nova\module\includes\product_box.html

Original suche nach 2x:
<img class="lazyload" data-src="{$module_data.PRODUCTS_IMAGE}" alt="{$module_data.PRODUCTS_NAME|onlytext}" title="{$module_data.PRODUCTS_NAME|onlytext}">

2x Neu einsetzen damit Tags angezeigt werden:
<img class="lazyload" data-src="{$module_data.PRODUCTS_IMAGE}" alt="{if isset($module_data.reqser_main_image_tag.image_alt) && $module_data.reqser_main_image_tag.image_alt != ''}{$module_data.reqser_main_image_tag.image_alt|onlytext}{else}{$module_data.PRODUCTS_NAME|onlytext}{/if}" title="{if isset($module_data.reqser_main_image_tag.image_title) && $module_data.reqser_main_image_tag.image_title != ''}{$module_data.reqser_main_image_tag.image_title|onlytext}{else}{$module_data.PRODUCTS_NAME|onlytext}{/if}">

********************************************************************/

if (defined('MODULE_SYSTEM_REQSER_STATUS') 
    && constant('MODULE_SYSTEM_REQSER_STATUS') == 'true' 
    && defined('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') 
    && constant('MODULE_SYSTEM_REQSER_IMAGE_TAGS_ACTIVE') == 'true'
    && defined('MODULE_SYSTEM_REQSER_LOAD_FRONTENT_MAIN_IMAGE')
    && constant('MODULE_SYSTEM_REQSER_LOAD_FRONTENT_MAIN_IMAGE') == 'true') {
    if (isset($module_content) && count($module_content) > 0) {
        $all_product_ids = array_keys($module_content);
        if ($language_id == '') $language_id = $_SESSION['languages_id'];
        // Convert the array of product IDs to a comma-separated list of integers.
        $product_ids_list = implode(', ', $all_product_ids);

        // Use the IN clause in your query to fetch records for all product IDs.
        $products_main_image_tags_query = xtc_db_query("SELECT pid.products_id, pid.image_title, pid.image_alt
                                        FROM " . TABLE_PRODUCTS_IMAGES . " pi
                                        INNER JOIN " . TABLE_PRODUCTS_IMAGES_DESCRIPTION . " pid
                                            ON pi.image_id = pid.image_id
                                        WHERE pi.image_nr = 0
                                        AND pid.language_id = '" . (int)$language_id . "'
                                        AND pi.products_id IN (" . $product_ids_list . ")");
            
        while ($row = xtc_db_fetch_array($products_main_image_tags_query)) {
            if (isset($module_content[$row['products_id']])) $module_content[$row['products_id']]['reqser_main_image_tag'] = ['image_title' => $row['image_title'], 'image_alt' => $row['image_alt']];
        }
    }
}