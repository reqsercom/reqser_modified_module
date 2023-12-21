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

//JorisK 12-2023 von 2 auf 10 Sprachen erweitert, bis zu 10 Flaggen sollte original Adminbar noch darstellen können
if(isset($languages_array) && count($languages_array) > 10) {
  // PatrickK 12-2023 Remove current language from array
  $current_language_icon = '../lang/' .  $_SESSION['language'] .'/admin/images/' . 'icon.gif';
  $languages_array = array_filter($languages_array, function($lang) use ($current_language_icon) {
    return strpos($lang, 'src="' . $current_language_icon . '"') === false;
  });

  $nr_new_languages_string = '<div id="new-lng-str"><span class="op">' . xtc_image('../lang/' .  $_SESSION['language'] .'/admin/images/' . 'icon.gif', $_SESSION['language']). '</span>';
  $nr_new_languages_string .= '<span class="lngs">'.implode('</span><span class="lngs">', $languages_array).'</span>';
  $nr_new_languages_string .= '</div>';
  echo $nr_new_languages_string;
?>
<style>
#new-lng-str {
  padding:7px 10px 7px;
  color:#222;
}
#new-lng-str span {
  padding:5px 8px;
  background:#222;
  color:#fff;
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
  padding-top: 3px !important;
  margin-bottom: 5px;
  display:inline-block;
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
#new-lng-str span.op::after {
  content: '';
  display: inline-block;
  width: 0; 
  height: 0; 
  margin-left: 5px;
  vertical-align: middle;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid white; /* Adjust color and size as needed */
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
