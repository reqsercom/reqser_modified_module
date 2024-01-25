<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.5 on the 25.01.2024
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Traduceri automate DeepL prin Reqser <i>.</i>com, versiunea modulului %s<br />- construit pentru <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> și &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a>] (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>] Modul de sistem pentru activarea și configurarea traducerilor prin <i><a href="https://reqser.com/" target="_blank">]reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Setări de bază</h2>Activați modulul?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Cheie API Reqser');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Puteți introduce cheia API de la <i>Reqser.com</i> aici. Se afișează la conectarea la Modified on Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Link direct aici</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Token de securitate temporar');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token de securitate temporar pentru interogări externe ale magazinului.<br /><span  class="alrt">Se atribuie automat !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Valabilitatea jetonului de securitate temporar');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Tokenul de securitate temporar este valabil p&acirc;nă la (a se vedea mai jos).<br />După ce a expirat, se va crea unul nou la cerere dintr-o sursă externă și va fi afișat aici.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabele de limbi</h2>Dați accesul Reqser.com la toate coloanele din tabelul partajat ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Da" &icirc;i oferă lui Reqser acces la toate intrările de coloană din tabelele eliberate, un "Nu" poate duce la erori cu versiunile vechi ale magazinului sau atunci c&acirc;nd se utilizează șabloane non-standard.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabele de baze de date');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabelele standard ale bazei de date care urmează să fie traduse.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Alte tabele din baza de date');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selectați aici alte tabele de baze de date care urmează să fie traduse');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Alte tabele din baza de date (nu sunt disponibile pentru selecția de mai sus)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Introduceți aici alte tabele de baze de date care urmează să fie traduse, separate prin virgule.<br />(Pentru extensiile cu tabele noi "standard nemodificate")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Excludeți mesele');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Introduceți aici tabelele care urmează să fie excluse din traduceri, separate prin virgule.<br />(Este necesar numai dacă toate tabelele standard sunt selectate mai sus și unele dintre ele trebuie excluse).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Traduceți din ce limbă?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Din ce limbă ar trebui să se facă traducerea?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '&Icirc;n ce limbi pot traduce? ' . draw_tooltip('Limbi suplimentare pot fi adăugate la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', '&Icirc;n ce limbi ar trebui să fie traduse?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engleza este utilizată ca engleză americană &icirc;n mod implicit');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Ați prefera ortografia britanică?<br />Da = britanică / Nu = SUA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Alte setări</h2>Ar trebui să fie permisă adăugarea unei noi limbi la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Cu această setare setată la "Da", se pot adăuga noi limbi la <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Cu "Nu", limba trebuie să existe deja &icirc;n sistemul magazinului și limba trebuie să fie activată &icirc;n acest modul.<br />Creați limba &icirc;n magazin: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Creați limba &icirc;n magazin ?</a> &nbsp;&nbsp;<span class="alrt">!! Noua limbă este disponibilă &icirc;n magazin doar după 24-48 de ore. !!</span><br />Apoi marcați aici ca limbă care urmează să fie tradusă');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Traduceți fișierele de limbă de pe server?' . draw_tooltip('Toate fișierele de pe server sunt interogate și traduse</br>Acest lucru se aplică, de asemenea, fișierelor de limbă ale modulelor și extensiilor. Toate fișierele de limbă sunt regenerate, inclusiv limbile existente.<br />&Icirc;n mod implicit, textele &icirc;n limbi străine existente &icirc;n Reqser sunt adoptate și nu nou traduse, dar acest lucru poate fi modificat &icirc;n setările Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Fără fișiere de limbă, nicio limbă străină nu funcționează &icirc;n magazin și există o pagină "albă"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transferul automat al fișierelor lingvistice?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ar trebui ca fișierele de limbă traduse să fie transferate automat &icirc;n magazinul dumneavoastră sau ar trebui ca fiecare fișier de limbă să fie selectat manual &icirc;n Reqser?<br />Da = transferați automat fișierele lingvistice / Nu = transferați manual');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Securitate</h2>&Icirc;nregistrare accesări API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Ar trebui ca accesările API să fie &icirc;nregistrate?<br />(Jurnalele pot fi găsite &icirc;n <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test &icirc;n browser ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testați &icirc;n browser fără a trimite anteturi?<br /><span class="alrt">!!! Trebuie să fie dezactivat &icirc;n funcționarea live a API-ului !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '" <i>Reqser</i> API key" stocată aici &icirc;n modul nu se potrivește cu cea stocată la <i>reqser.com</i>.<br />Vă rugăm să vă conectați la <i>reqser</i>.com și să verificați cheia API sau, dacă este necesar, să o preluați din nou și să o salvați aici.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Cheia API stocată cu succes');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Nu a fost introdusă nicio cheie API! Vă rugăm să vă conectați la <i>reqser.com</i> și să obțineți cheia API pentru acest site web și să o salvați aici &icirc;n modul.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Nu este selectată nicio limbă &icirc;n care să fie tradusă !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Translate to which languages?" nu trebuie să conțină o limbă care a fost selectată &icirc;n "Translate from which language?".');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Modulul Reqser.com DeepL va traduce automat toate limbile străine activate &icirc;n modul pentru acest produs după salvare.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator modulul Deepl nu are nici o cheie API, vă rugăm să introduceți o cheie API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Modulul Reqser.com Deepl Translator nu este activat, vă rugăm să activați modulul &icirc;n Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Modulul Reqser.com Deepl Translator nu are nici o conexiune!');