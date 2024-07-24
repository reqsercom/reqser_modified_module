<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/slovenian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Orodja AI za prevode in SEO prek Reqser <i>.</i>com, različica modula %s<br />- zgraditi za <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> in &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Sistemski modul za povezavo z DeepL, OpenAI in Neuroflash prek <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Osnovne nastavitve</h2>Aktivacija modula?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Zahtevani ključ API');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Ključ API iz <i>storitve Reqser.com</i> lahko vnesete tukaj. Prikaže se, ko se povežete s programom Modified na portalu Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Neposredna povezava tukaj</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Začasni varnostni žeton');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Začasni varnostni žeton za zunanje poizvedbe v trgovini.<br /><span  class="alrt">Se dodeli samodejno !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Veljavnost začasnega varnostnega žetona');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Začasni varnostni žeton velja do (glej spodaj).<br />Ko poteče, se na zahtevo iz zunanjega vira ustvari nov, ki se nato prikaže tukaj.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Jezikovne tabele</h2>Omogočiti podjetju Reqser.com dostop do vseh stolpcev skupne tabele ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Da" omogoča programu Reqser dostop do vseh vnosov stolpcev spro&scaron;čenih tabel, "Ne" lahko povzroči napake pri starih različicah trgovine ali pri uporabi nestandardnih predlog.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Preglednice podatkovne zbirke');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standardne tabele zbirke podatkov, ki jih je treba prevesti.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Nadaljnje tabele podatkovne zbirke');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Tukaj izberite nadaljnje tabele podatkovne zbirke, ki jih želite prevesti');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Druge tabele zbirke podatkov (niso na voljo za zgornjo izbiro)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Tukaj vnesite nadaljnje tabele podatkovne zbirke, ki jih želite prevesti, ločene z vejicami.<br />(Za raz&scaron;iritve z novimi "nespremenjenimi standardnimi" tabelami)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Izključite mize');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Tukaj vnesite tabele, ki jih želite izključiti iz prevodov, ločene z vejicami.<br />(Potrebno samo, če so zgoraj izbrane vse standardne tabele in je treba nekatere od njih izključiti).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Prevajanje iz katerega jezika?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Iz katerega jezika je treba prevesti?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'V katere jezike lahko prevajam? ' . draw_tooltip('Dodatne jezike lahko dodate na <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'V katere jezike je treba prevesti?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Angle&scaron;čina se privzeto uporablja kot ameri&scaron;ka angle&scaron;čina');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Bi raje uporabljali britanski pravopis?<br />Da = britanski / Ne = ZDA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Dodatne nastavitve</h2>Ali naj se dovoli dodajanje novega jezika na <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Če je ta nastavitev nastavljena na "Da", lahko v <i> spletno stran <a href="https://reqser.com/" target="_blank">reqser.com</i></a> dodajate nove jezike.<br />Z nastavitvijo "Ne" mora jezik že obstajati v sistemu trgovine, jezik pa mora biti aktiviran v tem modulu.<br />Ustvarite jezik v trgovini: Ustvari jezik v trgovini ?</a>: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo &nbsp;&nbsp;<span class="alrt">!! Novi jezik je v trgovini na voljo &scaron;ele po 24-48 urah. !!</span><br />Nato označite tukaj kot jezik, ki ga je treba prevesti');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Prevajanje jezikovnih datotek v strežniku? Vse datoteke v strežniku so poizvedovane in prevedene</br>To velja tudi za jezikovne datoteke modulov in raz&scaron;iritev. Preoblikujejo se vse jezikovne datoteke, vključno z obstoječimi jeziki.<br />Privzeto se prevzamejo obstoječa besedila v tujih jezikih v programu Reqser in se ne prevajajo na novo, vendar lahko to spremenite v nastavitvah programa Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Brez jezikovnih datotek v trgovini ne deluje noben tuji jezik in je na voljo "bela" stran!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Samodejno prena&scaron;anje jezikovnih datotek?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ali naj se prevedene jezikovne datoteke samodejno prenesejo v va&scaron;o trgovino ali je treba vsako jezikovno datoteko v programu Reqser izbrati ročno?<br />Da = jezikovne datoteke se prenesejo samodejno / Ne = prenesejo se ročno');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Varnost</h2>Beležiti dostope API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Ali je treba dostope do API beležiti?<br />(Dnevniki so na voljo v <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Preprečiti urejanje osnovnega jezika?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Dovoljeno mora biti urejanje osnovnega jezika, da se lahko besedila optimizirajo za iskalnike v osnovnem jeziku.<br />Da = preprečiti urejanje / Ne = dovoliti urejanje');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'Ali je treba iz besedil odstraniti besedi "scripte" in "iframe"?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Če so v besedila na primer vključeni videoposnetki YouTube ali animacije, teh oznak ne smete odstraniti. V nasprotnem primeru lahko besedila, ki jih urejamo, izgubijo funkcionalnost.<br />Da = odstranite / Ne = ne odstranite');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Preizkus v brskalniku ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testiranje v brskalniku brez po&scaron;iljanja glave?<br /><span class="alrt">!!! Pri delovanju API v živo mora biti deaktivirano !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Ključ API Reqser, ki je shranjen tukaj v modulu, se ne ujema s ključem, shranjenim na <i>spletnem</i> mestu <i>reqser.com</i>.<br />Prijavite se v spletno stran <i>reqser</i>.com in preverite ključ API ali ga po potrebi ponovno pridobite in shranite tukaj.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Ključ API uspe&scaron;no shranjen');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Ključ API ni bil vnesen! Prijavite se v spletno stran <i>reqser.com</i> in pridobite ključ API za to spletno mesto ter ga shranite tukaj v modulu.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul ni izbran noben jezik, v katerega se prevaja !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Prevedi v katere jezike?" ne sme vsebovati jezika, ki je bil izbran v "Prevedi iz katerega jezika?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Ročno dodane tabele <b>"%s"</b> ni bilo mogoče najti v zbirki podatkov.' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Preverite nastavitve za " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modul Reqser.com DeepL bo po shranjevanju samodejno prevedel vse tuje jezike, aktivirane v modulu za ta izdelek.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator modul nima ključa API, prosimo, vnesite ključ API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Prevajalec modul ni aktiviran, prosimo, aktivirajte modul v Modul->Sistemski modul');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator modul nima povezave!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Preverja se povezava s spletno stranjo Reqser.com, počakajte.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'Nastavitve SEO se nalagajo, počakajte.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Va&scaron;i vnosi niso popolni, preverite jih:');