<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 0.9 on the 23.10.2023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/french/modules/system/
* use: language file for system module
*
* © copyright 07-2023, noRiddle
             ____
            |    |       |     | |
  __   ___  |____/ °  ___|  ___| |  ___
|/  | |   | |   \  | |   | |   | | |___|
|   n |___o |    R i |___d |__ d l |__e

* Edit by JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'traductions via <i>Reqser.com</i> et DeepL, version du module %s<br />- build for <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> et &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Module syst&egrave;me pour l\'activation et la configuration des traductions via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a><br /><span style="color:#c00;"> ! !! Si vous souhaitez modifier quelque chose dans la structure de votre base de donn&eacute;es (par exemple, cela peut aussi &ecirc;tre fait par Wawis), de sorte que les identifiants dans les tables &agrave; traduire puissent &ecirc;tre modifi&eacute;s, il faut absolument d&eacute;sactiver ce module avant ! !!</span>.');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', 'Activer le module ?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser Cl&eacute; API');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Saisir ici la cl&eacute; API de <i>Reqser.com</i>. S\'affiche lors de la connexion &agrave; Modified sur Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Lien direct ici</a> ');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_TITLE', 'V&eacute;rifier la cl&eacute; API ?');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_DESC', 'V&eacute;rifier la cl&eacute; API en direct lors de l\'enregistrement du module ?');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Jeton de s&eacute;curit&eacute; temporaire');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Jeton de s&eacute;curit&eacute; temporaire pour les requ&ecirc;tes externes vers la boutique.<br /><span  class="alrt">Est attribu&eacute; automatiquement !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validit&eacute; du jeton de s&eacute;curit&eacute; temporaire');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Le jeton de s&eacute;curit&eacute; temporaire est valable jusqu\'&agrave; (voir ci-dessous).<br />Lorsqu\'il est expir&eacute;, un nouveau jeton est cr&eacute;&eacute; sur demande de l\'ext&eacute;rieur et est alors affich&eacute; ici.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr />donner &agrave; Reqser.com l\'acc&egrave;s &agrave; toutes les colonnes de la table partag&eacute;e ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Oui" donne &agrave; Reqser l\'acc&egrave;s &agrave; toutes les entr&eacute;es de colonnes des tableaux partag&eacute;s, un "Non" peut entra&icirc;ner des erreurs pour les anciennes versions de la boutique ou des entr&eacute;es inexistantes.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tables DB');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tables DB standard &agrave; traduire.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Autres tables DB');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'S&eacute;lectionner ici d\'autres tables DB &agrave; traduire');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Autres tables DB (qui ne sont pas disponibles ci-dessus)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Entrez ici les autres tables de la base de donn&eacute;es &agrave; traduire, s&eacute;par&eacute;es par des virgules<br />(Pour les extensions avec de nouvelles tables "non modifi&eacute;es par d&eacute;faut")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exclure des tableaux');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Inscrire ici-s&eacute;par&eacute;ment les tables qui doivent &ecirc;tre exclues des traductions<br />(Seulement n&eacute;cessaire si toutes les tables standard sont s&eacute;lectionn&eacute;es ci-dessus et que certaines doivent en &ecirc;tre exclues).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '<hr />Traduire &agrave; partir de quelle langue ?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'A partir de quelle langue doit-on traduire ?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Dans quelles langues traduire ? ' . draw_tooltip('Si vous s&eacute;lectionnez ici une langue qui fait partie du standard de modified (par exemple l\'anglais) :<br />Dans ce cas, les fichiers de langue correspondants peuvent &ecirc;tre diff&eacute;rents de ceux fournis par modified apr&egrave;s traduction par Reqser.<br /> Si vous souhaitez uniquement traduire des fichiers pour les extensions, r&eacute;glez "Transf&eacute;rer automatiquement les fichiers de langue ?"2]]Sur Reqser.com, vous pouvez &eacute;galement d&eacute;finir si les textes en langue &eacute;trang&egrave;re doivent &ecirc;tre repris ou si la langue compl&egrave;te doit &ecirc;tre traduite.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Dans quelles langues doit-on traduire ?<br />Pour les nouvelles langues, voir une entr&eacute;e plus haut.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'L\'anglais est utilis&eacute; par d&eacute;faut comme anglais am&eacute;ricain');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Pr&eacute;f&eacute;rez-vous l\'orthographe britannique ?<br />Oui = Britannique / Non = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', 'Faut-il autoriser l\'ajout d\'une nouvelle langue sur <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Avec ce r&eacute;glage sur "Oui", de nouvelles langues peuvent &ecirc;tre ajout&eacute;es sur <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Avec "Non", la langue doit d&eacute;j&agrave; exister dans le syst&egrave;me de la boutique et elle doit &ecirc;tre activ&eacute;e dans le pr&eacute;sent module.<br />Cr&eacute;er une langue dans la boutique : <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Cr&eacute;er une langue dans la boutique ?</a>   <span class="alrt"> !! La nouvelle langue n\'est disponible dans la boutique qu\'apr&egrave;s 24-48h. ! !</span><br />Marquer ensuite ici comme langue &agrave; traduire');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '<hr />Traduire les fichiers de langue sur le serveur ?' . draw_tooltip('Sans le système de fichiers, les fichiers de langue doivent être ajoutés de manière autonome dans le dossier lang/ et à tous les autres endroits dans chaque langue étrangère.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Tous les fichiers du serveur sont interrog&eacute;s et traduits.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transf&eacute;rer automatiquement les fichiers de langue ?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Les fichiers de langue traduits doivent-ils &ecirc;tre transf&eacute;r&eacute;s automatiquement dans votre boutique ou chaque fichier de langue doit-il &ecirc;tre s&eacute;lectionn&eacute; manuellement dans Reqser ?<br />Oui = fichiers de langue transf&eacute;r&eacute;s automatiquement / Non = transf&eacute;r&eacute;s manuellement');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr />Enregistrer les acc&egrave;s &agrave; l\'API ?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Les acc&egrave;s &agrave; l\'API doivent-ils &ecirc;tre journalis&eacute;s ?<br />(les journaux se trouvent dans <i>/api/reqser/logs/</i>).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test dans le navigateur ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Tester dans le navigateur sans envoyer d\'en-t&ecirc;te ?<br /><span class="alrt"> !!! Doit &ecirc;tre d&eacute;sactiv&eacute; en mode live de l\'API ! !!</span>.');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'La "cl&eacute; API Reqser" enregistr&eacute;e ici dans le module ne correspond pas &agrave; celle enregistr&eacute;e sur <i>reqser.com</i>.<br />Veuillez vous connecter &agrave; <i>reqser.com</i> et v&eacute;rifier la cl&eacute; API ou, le cas &eacute;ch&eacute;ant, la r&eacute;cup&eacute;rer et l\'enregistrer ici.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Cl&eacute; API d&eacute;pos&eacute;e avec succ&egrave;s');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'La "cl&eacute; API Reqser" demand&eacute;e est vide et ne peut donc pas &ecirc;tre compar&eacute;e &agrave; celle d&eacute;pos&eacute;e ici dans le module.<br />Veuillez contacter <i>reqser.com</i>.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR :<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Pas de langue s&eacute;lectionn&eacute;e dans laquelle traduire !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Traduire en quelles langues ?" ne peut pas contenir une langue s&eacute;lectionn&eacute;e dans "Traduire de quelle langue ?');