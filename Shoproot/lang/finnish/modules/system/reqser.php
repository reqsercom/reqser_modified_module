<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/finnish/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Automaattiset DeepL k&auml;&auml;nn&ouml;kset Reqser <i>.</i>comin kautta, moduulin versio %s<br />- build for <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> ja &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> J&auml;rjestelm&auml;moduuli k&auml;&auml;nn&ouml;sten aktivointiin ja konfigurointiin <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> kautta[[3]]');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Perusasetukset</h2>Aktivoi moduuli?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API-avain');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Voit sy&ouml;tt&auml;&auml; <i>Reqser.comin</i> API-avaimen t&auml;&auml;lt&auml;. N&auml;ytet&auml;&auml;n, kun muodostat yhteyden Modifiediin Reqseriss&auml;. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Suora linkki t&auml;h&auml;n</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'V&auml;liaikainen turvatunniste');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'V&auml;liaikainen suojausmerkki kauppaan teht&auml;vi&auml; ulkoisia kyselyj&auml; varten.<br /><span  class="alrt">M&auml;&auml;ritet&auml;&auml;n automaattisesti !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'V&auml;liaikaisen turvakoodin voimassaolo');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'V&auml;liaikainen turvamerkint&auml; on voimassa (ks. j&auml;ljemp&auml;n&auml;).<br />Kun se on vanhentunut, uusi luodaan pyynn&ouml;st&auml; ulkoisesta l&auml;hteest&auml;, ja se n&auml;ytet&auml;&auml;n sitten t&auml;ss&auml;.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Kielitaulukot</h2>Annetaanko Reqser.comille p&auml;&auml;sy kaikkiin jaetun taulukon sarakkeisiin ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Kyll&auml;" antaa Reqserille p&auml;&auml;syn kaikkiin julkaistujen taulukoiden sarakkeisiin, "Ei" voi johtaa virheisiin vanhoissa kauppaversioissa tai k&auml;ytett&auml;ess&auml; ei-standardeja malleja.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tietokannan taulukot');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'K&auml;&auml;nnett&auml;v&auml;t vakiotietokantataulukot.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Muita tietokantataulukoita');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Valitse muut k&auml;&auml;nnett&auml;v&auml;t tietokantataulukot t&auml;st&auml;');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Muut tietokantataulukot (ei valittavissa edell&auml;)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Kirjoita t&auml;h&auml;n pilkulla erotettuna lis&auml;&auml; k&auml;&auml;nnett&auml;vi&auml; tietokantatauluja.<br />(Laajennuksia varten, joissa on uusia "muuttamattomia vakiotauluja").');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'P&ouml;ytien poissulkeminen');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Kirjoita t&auml;h&auml;n k&auml;&auml;nn&ouml;sten ulkopuolelle j&auml;tett&auml;v&auml;t taulukot pilkulla erotettuna.<br />(Tarvitaan vain, jos kaikki vakiotaulukot on valittu edell&auml; ja osa niist&auml; halutaan j&auml;tt&auml;&auml; pois).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'K&auml;&auml;nt&auml;&auml; mist&auml; kielest&auml;?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Milt&auml; kielelt&auml; k&auml;&auml;nn&ouml;s olisi teht&auml;v&auml;?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Mille kielille voin k&auml;&auml;nt&auml;&auml;? ' . draw_tooltip('Lis&auml;kieli&auml; voidaan lis&auml;t&auml; osoitteessa <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Mille kielille se olisi k&auml;&auml;nnett&auml;v&auml;?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Englannin kielen&auml; k&auml;ytet&auml;&auml;n oletusarvoisesti Yhdysvaltain englantia');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Haluaisitko mieluummin brittil&auml;isen kirjoitusasun?<br />Kyll&auml; = brittil&auml;inen / Ei = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Lis&auml;asetukset</h2>Pit&auml;isik&ouml; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> sallia uuden kielen lis&auml;&auml;minen ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Kun t&auml;m&auml; asetus on asetettu "Kyll&auml;", uusia kieli&auml; voidaan lis&auml;t&auml; <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Jos asetus on "Ei", kielen on oltava jo olemassa myym&auml;l&auml;j&auml;rjestelm&auml;ss&auml; ja kieli on aktivoitava t&auml;ss&auml; moduulissa.<br />Luo kieli kauppaan: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Luo kieli kauppaan ?</a> &nbsp;&nbsp;<span class="alrt">!! Uusi kieli on k&auml;ytett&auml;viss&auml; kaupassa vasta 24-48 tunnin kuluttua. !!</span><br />Merkitse sitten t&auml;h&auml;n k&auml;&auml;nnett&auml;v&auml;ksi kieleksi');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'K&auml;&auml;nn&auml; palvelimen kielitiedostot?' . draw_tooltip('Kaikki palvelimen tiedostot kysyt&auml;&auml;n ja k&auml;&auml;nnet&auml;&auml;n</br>T&auml;m&auml; koskee my&ouml;s moduulien ja laajennusten kielitiedostoja. Kaikki kielitiedostot luodaan uudelleen, my&ouml;s olemassa olevat kielet.<br />Oletusarvoisesti Reqserin olemassa olevat vieraskieliset tekstit otetaan k&auml;ytt&ouml;&ouml;n eik&auml; niit&auml; k&auml;&auml;nnet&auml; uudelleen, mutta t&auml;t&auml; voidaan muuttaa Reqserin asetuksissa.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Ilman kielitiedostoja mik&auml;&auml;n vieras kieli ei toimi kaupassa, ja siell&auml; on "valkoinen" sivu!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Siirt&auml;&auml; kielitiedostoja automaattisesti?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Pit&auml;isik&ouml; k&auml;&auml;nnetyt kielitiedostot siirt&auml;&auml; automaattisesti myym&auml;l&auml;&auml;si vai pit&auml;isik&ouml; kukin kielitiedosto valita manuaalisesti Reqseriss&auml;?<br />Kyll&auml; = siirt&auml;&auml; kielitiedostot automaattisesti / Ei = siirt&auml;&auml; manuaalisesti.');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Turvallisuus</h2>Loki API-k&auml;yt&ouml;t?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Pit&auml;isik&ouml; API-k&auml;ynnit kirjata?<br />(Lokit l&ouml;ytyv&auml;t osoitteesta <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Testaa selaimessa ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testaa selaimessa l&auml;hett&auml;m&auml;tt&auml; otsikoita?<br /><span class="alrt">!!! On poistettava k&auml;yt&ouml;st&auml; API:n reaaliaikaisessa toiminnassa !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Moduuliin tallennettu "Reqserin API-avain" ei vastaa <i>reqser.com-sivustolle</i> tallennettua avainta.<br />Kirjaudu sis&auml;&auml;n <i>reqser</i>.com-sivustolle ja tarkista API-avain tai tarvittaessa hae se uudelleen ja tallenna se t&auml;nne.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-avain tallennettu onnistuneesti');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'API-avainta ei ole annettu! Kirjaudu sis&auml;&auml;n osoitteeseen <i>reqser.</i> com ja hanki t&auml;m&auml;n verkkosivuston API-avain ja tallenna se t&auml;nne moduuliin.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Module no language to be translated into selected !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"K&auml;&auml;nn&auml; mille kielille?" ei saa sis&auml;lt&auml;&auml; kielt&auml;, joka on valittu kohdassa "K&auml;&auml;nn&auml; milt&auml; kielelt&auml;?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Manuaalisesti lis&auml;tty&auml; taulukkoa <b>"%s</b> " ei l&ouml;ydy tietokannasta. Tarkista asetukset "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Reqser.com DeepL -moduuli k&auml;&auml;nt&auml;&auml; automaattisesti kaikki t&auml;m&auml;n tuotteen moduulissa aktivoidut vieraat kielet tallennuksen j&auml;lkeen.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator -moduulilla ei ole API-avainta, anna API-avain.');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator -moduuli ei ole aktivoitu, aktivoi moduuli Moduuli->J&auml;rjestelm&auml;moduuli -kohdassa.');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator module ei ole yhteydess&auml;!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com-yhteytt&auml; tarkistetaan, odota.');