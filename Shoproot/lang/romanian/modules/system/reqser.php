<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/romanian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Instrumente AI pentru traduceri și SEO prin Reqser <i>.</i>com, versiunea modulului %s<br />- construit pentru <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> și &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Modul de sistem pentru conectarea cu DeepL, OpenAI și Neuroflash prin <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Setări de bază</h2>Activați modulul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Cheie API solicitantă');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Puteți introduce cheia API de la <i>Reqser.com</i> aici. Este afișată atunci c&acirc;nd vă conectați la Modified pe Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Link direct aici</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Jeton de securitate temporar');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token de securitate temporar pentru interogări externe către magazin.<br /><span  class="alrt">Este atribuit automat !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Valabilitatea jetonului de securitate temporar');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Jetonul de securitate temporar este valabil p&acirc;nă la (a se vedea mai jos).<br />La expirarea acestuia, va fi creat unul nou la cerere dintr-o sursă externă și va fi afișat aici.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabele lingvistice</h2>Permiteți accesul Reqser.com la toate coloanele din tabelul partajat ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Da" oferă Reqser acces la toate intrările de coloană din tabelele lansate, iar "Nu" poate duce la erori &icirc;n cazul versiunilor vechi ale magazinului sau al utilizării unor șabloane non-standard.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabele de baze de date');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabele standard ale bazei de date care urmează să fie traduse.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Alte tabele de baze de date');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selectați aici alte tabele de baze de date care urmează să fie traduse');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Alte tabele de baze de date (nu sunt disponibile pentru selectarea de mai sus)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Introduceți aici alte tabele de baze de date care urmează să fie traduse, separate prin virgulă.<br />(Pentru extensii cu tabele noi "standard nemodificate")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Excludeți mesele');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Introduceți aici tabelele care urmează să fie excluse din traduceri, separate prin virgulă.<br />(Este necesar numai &icirc;n cazul &icirc;n care toate tabelele standard sunt selectate mai sus, iar unele dintre ele trebuie să fie excluse).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Traduceți din ce limbă?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Din ce limbă ar trebui făcută traducerea?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '&Icirc;n ce limbi pot traduce? ' . draw_tooltip('Limbi suplimentare pot fi adăugate la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', '&Icirc;n ce limbi ar trebui să fie traduse?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engleza este utilizată implicit ca engleză americană');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Ați prefera ortografia britanică?<br />Da = britanic / Nu = SUA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Setări suplimentare</h2>Ar trebui să fie permisă adăugarea unei noi limbi la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Cu această setare setată la "Da", se pot adăuga limbi noi la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Cu "Nu", limba trebuie să existe deja &icirc;n sistemul magazinului și limba trebuie să fie activată &icirc;n acest modul.<br />Creați limba &icirc;n magazin: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Crearea limbii &icirc;n magazin ?</a> &nbsp;&nbsp;<span class="alrt">!! Noua limbă este disponibilă &icirc;n magazin doar după 24-48 de ore. !!</span><br />Apoi marcați aici ca limbă care urmează să fie tradusă');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Traducerea fișierelor lingvistice de pe server? Toate fișierele de pe server sunt interogate și traduse</br>Acest lucru se aplică și fișierelor lingvistice ale modulelor și extensiilor. Toate fișierele de limbă sunt regenerate, inclusiv limbile existente.<br />&Icirc;n mod implicit, textele &icirc;n limbi străine existente &icirc;n Reqser sunt adoptate și nu traduse recent, dar acest lucru poate fi modificat &icirc;n setările Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Fără fișiere de limbă, nicio limbă străină nu funcționează &icirc;n magazin și există o pagină "albă"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transferarea automată a fișierelor lingvistice?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ar trebui ca fișierele lingvistice traduse să fie transferate automat &icirc;n magazinul dumneavoastră sau ar trebui ca fiecare fișier lingvistic să fie selectat manual &icirc;n Reqser?<br />Da = transfer automat al fișierelor lingvistice / Nu = transfer manual');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Securitate</h2>&Icirc;nregistrarea accesărilor API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Ar trebui ca accesările API să fie &icirc;nregistrate?<br />(Jurnalele pot fi găsite &icirc;n <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Prevenirea editării limbii de bază?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'Editarea limbii de bază ar trebui să fie permisă, astfel &icirc;nc&acirc;t optimizarea textelor pentru motoarele de căutare să poată avea loc &icirc;n limba de bază.<br />Da = Interziceți editarea / Nu = Permiteți editarea');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', '"scripte" și "iframe" ar trebui eliminate din texte?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Dacă, de exemplu, &icirc;n texte sunt incluse videoclipuri YouTube sau animații, aceste etichete nu trebuie să fie eliminate. &Icirc;n caz contrar, textele pe care le edităm și-ar putea pierde funcționalitatea.<br />Da = Eliminați / Nu = Nu eliminați');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test &icirc;n browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testarea &icirc;n browser fără trimiterea antetelor?<br /><span class="alrt">!!! Trebuie să fie dezactivat &icirc;n operarea live a API!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Cheia API Reqser" stocată aici &icirc;n modul nu corespunde cu cea stocată la <i>reqser.com</i>.<br />Vă rugăm să vă conectați la <i>reqser</i>.com și să verificați cheia API sau, dacă este necesar, să o recuperați din nou și să o salvați aici.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Cheie API stocată cu succes');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Nu a fost introdusă nicio cheie API! Vă rugăm să vă conectați la <i>reqser.com</i> și să obțineți cheia API pentru acest site și să o salvați aici &icirc;n modul.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'ERROR cURL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul nu a fost selectată nicio limbă &icirc;n care să fie tradusă!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Traducere &icirc;n ce limbi?" nu trebuie să conțină o limbă care a fost selectată &icirc;n "Traducere din ce limbă?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Tabelul adăugat manual <b>"%s"</b> nu a putut fi găsit &icirc;n baza de date.' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Vă rugăm să verificați setările pentru " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulul Reqser.com DeepL va traduce automat toate limbile străine activate &icirc;n modul pentru acest produs după salvare.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Modulul Reqser.com Deepl Translator nu are cheie API, vă rugăm să introduceți o cheie API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Modulul Reqser.com Deepl Translator nu este activat, vă rugăm să activați modulul sub Modul->Modul Sistem');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator modul nu are nici o conexiune!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Conexiunea Reqser.com este verificată, vă rugăm să așteptați.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'Setările SEO se &icirc;ncarcă, vă rugăm să așteptați.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Rubricile dvs. nu sunt complete, vă rugăm să verificați:');