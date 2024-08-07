<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
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

* © copyright JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Outils AI pour la traduction et le r&eacute;f&eacute;rencement via <i>Reqser.com</i>, version du module %s.<br />- build for <i>Reqser.com</i> - -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> et &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Module syst&egrave;me pour la connexion avec DeepL, OpenAI et Neuroflash via <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Param&egrave;tres de base</h2>Activer le module ?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser Cl&eacute; API');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Permet de saisir la cl&eacute; API de <i>Reqser.com</i>. S\'affiche lors de la connexion &agrave; Modified sur Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Lien direct ici</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Jeton de s&eacute;curit&eacute; temporaire');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Jeton de s&eacute;curit&eacute; temporaire pour les requ&ecirc;tes externes &agrave; la boutique.<br /><span  class="alrt">Est attribu&eacute; automatiquement !</span>.');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validit&eacute; du jeton de s&eacute;curit&eacute; temporaire');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Le jeton de s&eacute;curit&eacute; temporaire est valable jusqu\'&agrave; (voir ci-dessous).<br />Lorsqu\'il est expir&eacute;, un nouveau est cr&eacute;&eacute; sur demande de l\'ext&eacute;rieur et est alors affich&eacute; ici.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tables de langues</h2>Donner &agrave; Reqser.com l\'acc&egrave;s &agrave; toutes les colonnes de la table partag&eacute;e ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Oui" donne &agrave; Reqser l\'acc&egrave;s &agrave; toutes les entr&eacute;es de colonnes des tables partag&eacute;es, un "Non" peut entra&icirc;ner des erreurs dans les anciennes versions de la boutique ou en cas d\'utilisation d\'un mod&egrave;le non standard.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tables de la base de donn&eacute;es');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tables de base de donn&eacute;es standard &agrave; traduire.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Autres tables de la base de donn&eacute;es');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'S&eacute;lectionner ici d\'autres tables de base de donn&eacute;es &agrave; traduire');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Autres tables de la base de donn&eacute;es (qui ne sont pas disponibles ci-dessus)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Saisir ici d\'autres tables de la base de donn&eacute;es s&eacute;par&eacute;es par des virgules qui doivent &ecirc;tre traduites.<br />(Pour les extensions avec de nouvelles tables "non modifi&eacute;es par d&eacute;faut")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Exclure des tableaux');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Saisir ici, s&eacute;par&eacute;s par des virgules, les tableaux qui doivent &ecirc;tre exclus des traductions.<br />(Seulement n&eacute;cessaire si toutes les tables standard sont s&eacute;lectionn&eacute;es ci-dessus et que certaines doivent &ecirc;tre exclues).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'De quelle langue traduire ?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'A partir de quelle langue doit-on traduire ?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Dans quelles langues traduire ? ' . draw_tooltip('D\'autres langues peuvent &ecirc;tre ajout&eacute;es sur <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Dans quelles langues faut-il traduire ?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'L\'anglais est utilis&eacute; par d&eacute;faut comme anglais am&eacute;ricain');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Pr&eacute;f&eacute;rez-vous l\'orthographe britannique ?<br />Oui = Britannique / Non = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Autres param&egrave;tres</h2>Faut-il autoriser l\'ajout d\'une nouvelle langue sur <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Avec ce param&egrave;tre sur "Oui", de nouvelles langues peuvent &ecirc;tre ajout&eacute;es sur <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Avec "Non", la langue doit d&eacute;j&agrave; exister dans le syst&egrave;me de la boutique et il faut activer la langue dans le pr&eacute;sent module.<br />Cr&eacute;er une langue dans la boutique : <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Cr&eacute;er une langue dans la boutique ?</a> &nbsp;&nbsp;<span class="alrt"> !! La nouvelle langue n\'est disponible dans la boutique qu\'apr&egrave;s 24-48h. ! !</span><br />Ensuite, marquer ici la langue &agrave; traduire');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Traduire les fichiers de langue sur le serveur ?' . draw_tooltip('Tous les fichiers sur le serveur sont interrog&eacute;s et traduits</br>Cela vaut &eacute;galement pour les fichiers de langue des modules et des extensions. Tous les fichiers de langue sont r&eacute;g&eacute;n&eacute;r&eacute;s, m&ecirc;me ceux des langues d&eacute;j&agrave; existantes.<br />Par d&eacute;faut, les textes en langue &eacute;trang&egrave;re d&eacute;j&agrave; pr&eacute;sents dans Reqser sont repris et ne sont pas retraduits, mais cela peut &ecirc;tre modifi&eacute; dans les param&egrave;tres de Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Sans fichiers de langue, aucune langue &eacute;trang&egrave;re ne fonctionne dans la boutique et il y a une page "blanche" !');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transf&eacute;rer automatiquement les fichiers de langue ?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Les fichiers de langue traduits doivent-ils &ecirc;tre transf&eacute;r&eacute;s automatiquement dans votre boutique ou chaque fichier de langue doit-il &ecirc;tre s&eacute;lectionn&eacute; manuellement dans Reqser ?<br />Oui = transf&eacute;rer les fichiers de langue automatiquement / Non = transf&eacute;rer les fichiers de langue manuellement');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>S&eacute;curit&eacute;</h2>Journaliser les acc&egrave;s &agrave; l\'API ?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Les acc&egrave;s &agrave; l\'API doivent-ils &ecirc;tre journalis&eacute;s ?<br />(Les logs se trouvent dans <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Emp&ecirc;cher l\'&eacute;dition de la langue de base ?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Pour que l\'optimisation des textes pour les moteurs de recherche puisse se faire dans la langue de base, l\'&eacute;dition de la langue de base devrait &ecirc;tre autoris&eacute;e.<br />Oui = emp&ecirc;cher l\'&eacute;dition / Non = autoriser l\'&eacute;dition');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'Faut-il supprimer les "scripts" et les "iframes" des textes ?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Si des vid&eacute;os YouTube sont par exemple int&eacute;gr&eacute;es dans les textes ou si des animations sont pr&eacute;sentes, ces balises ne doivent pas &ecirc;tre supprim&eacute;es. Dans le cas contraire, les textes que nous traitons pourraient perdre en fonctionnalit&eacute;.<br />Oui = supprimer / Non = ne pas supprimer');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test dans le navigateur ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Tester dans le navigateur sans envoyer d\'en-t&ecirc;te ?<br /><span class="alrt"> !!! Doit &ecirc;tre d&eacute;sactiv&eacute; dans le fonctionnement en direct de l\'API ! !!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'La "cl&eacute; API Reqser" enregistr&eacute;e ici dans le module ne correspond pas &agrave; celle enregistr&eacute;e sur <i>reqser.com</i>.<br />Veuillez vous connecter &agrave; <i>reqser.com</i> et v&eacute;rifier la cl&eacute; API ou, le cas &eacute;ch&eacute;ant, la r&eacute;cup&eacute;rer et l\'enregistrer ici.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Cl&eacute; API d&eacute;pos&eacute;e avec succ&egrave;s');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Aucune cl&eacute; API n\'a &eacute;t&eacute; enregistr&eacute;e ! Veuillez vous connecter &agrave; <i>reqser.com</i> et obtenir la cl&eacute; API pour ce site web et l\'enregistrer ici dans le module.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR :<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Module pas de langue s&eacute;lectionn&eacute;e dans laquelle traduire !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Traduire en quelles langues ?" ne doit pas contenir une langue s&eacute;lectionn&eacute;e dans "Traduire de quelle langue ?');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'La table <b>"%s"</b> ajout&eacute;e manuellement n\'a pas pu &ecirc;tre trouv&eacute;e dans la base de donn&eacute;es. Veuillez v&eacute;rifier les param&egrave;tres de "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '" !');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Le module Reqser.com DeepL traduira automatiquement toutes les langues &eacute;trang&egrave;res activ&eacute;es dans le module apr&egrave;s les avoir enregistr&eacute;es pour ce produit.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator Module n\'a pas de cl&eacute; API, veuillez d&eacute;poser une cl&eacute; API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator Module non activ&eacute;, veuillez activer le module sous Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator Module ne se connecte pas !');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Connexion Reqser.com en cours de v&eacute;rification, veuillez patienter.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'Les param&egrave;tres SEO sont en cours de chargement, veuillez patienter.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Vos donn&eacute;es ne sont pas compl&egrave;tes, veuillez les v&eacute;rifier :');