<?php
/********************************************************************
* file: nr_admin_langs_menu.php
* path: /admin/includes/extra/footer/
* use: create a dropdown for languages in top admin bar
*      in case there is too many languages to display them in a row
*
* © copyright, noRiddle, 12-2023
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

********************************************************************/

//JorisK 12-2023 auf 10 Sprachen erweitert, da im Admin sonst zu viele Flaggen das Menu unbrauchbar machen
if(isset($languages_array) && count($languages_array) > 10) {
  $nr_new_languages_string = '<div id="new-lng-str"><span class="op">&raquo; languages</span>';
  $nr_new_languages_string .= '<span class="lngs">'.implode('</span><span class="lngs">', $languages_array).'</span>';
  $nr_new_languages_string .= '</div>';
  echo $nr_new_languages_string;
?>
<style>
#new-lng-str {
  padding:7px 10px 7px;
  color:#fff;
}
#new-lng-str span {
  padding:5px 8px;
  background:#fff;
  color:#000;
}
.row_adminbar ul li.language #new-lng-str span a {
  padding:0 !important;
  display:block;
  height:12px;
  line-height:12px;
}
.row_adminbar ul li.language #new-lng-str span a:hover {
  background:none !important;
  opacity:0.75;
}
.row_adminbar ul li.language #new-lng-str span a img {
  padding:0;
}
#new-lng-str span.op {
  display:block;
  cursor:pointer;
}
#new-lng-str span.lngs {
  display:none;
  padding:0;
}
.row_adminbar ul li.language #new-lng-str span.lngs a {
  padding:5px 8px !important;
}
#new-lng-str:hover span.lngs {
  display:block;
}
</style>
<script>
$(function() {
  let $lang_li = $('li.language'),
      $new_lang_str = $('#new-lng-str');
  $lang_li.empty().html($new_lang_str);
});
</script>
<?php
}
?>
