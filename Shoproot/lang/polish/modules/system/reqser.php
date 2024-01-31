<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.7 on the 25.01.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/polish/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatyczne tłumaczenia DeepL przez Reqser <i>.</i>com, wersja modułu %s<br />- build dla <i>Reqser</i>.com - %s<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> i &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Moduł systemowy do aktywacji i konfiguracji tłumaczeń za pośrednictwem <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Ustawienia podstawowe</h2>Aktywować moduł?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Klucz API żądania');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Tutaj można wprowadzić klucz API z Reqser <i>.</i> com. Jest wyświetlany podczas łączenia się z Modified na Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Bezpośredni link tutaj</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tymczasowy token zabezpieczający');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tymczasowy token bezpieczeństwa dla zewnętrznych zapytań do sklepu.<br /><span  class="alrt">Przypisywany automatycznie !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Ważność tymczasowego tokena zabezpieczającego');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Tymczasowy token bezpieczeństwa jest ważny do (patrz poniżej).<br />Po jego wygaśnięciu nowy token zostanie utworzony na żądanie z zewnętrznego źr&oacute;dła, a następnie wyświetlony tutaj.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabele językowe</h2>Dać Reqser.com dostęp do wszystkich kolumn wsp&oacute;łdzielonej tabeli?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Tak" daje Reqserowi dostęp do wszystkich wpis&oacute;w kolumn zwolnionych tabel, "Nie" może prowadzić do błęd&oacute;w w starych wersjach sklepu lub podczas korzystania z niestandardowych szablon&oacute;w.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabele bazy danych');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standardowe tabele bazy danych do przetłumaczenia.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Dalsze tabele bazy danych');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Wybierz tutaj kolejne tabele bazy danych do przetłumaczenia');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Inne tabele bazy danych (niedostępne do wyboru powyżej)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Wprowadź kolejne tabele bazy danych do przetłumaczenia, oddzielając je przecinkami.<br />(Dla rozszerzeń z nowymi "niezmodyfikowanymi standardowymi" tabelami)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Wyklucz tabele');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'W tym miejscu wprowadź tabele, kt&oacute;re mają zostać wykluczone z tłumaczeń, oddzielając je przecinkami.<br />(Konieczne tylko wtedy, gdy powyżej wybrano wszystkie standardowe tabele, a niekt&oacute;re z nich mają zostać wykluczone).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Przetłumaczyć z jakiego języka?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Z jakiego języka powinno zostać wykonane tłumaczenie?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Na jakie języki mogę tłumaczyć? ' . draw_tooltip('Dodatkowe języki można dodać na stronie <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Na jakie języki należy przetłumaczyć?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Domyślnie używany jest język angielski amerykański');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Czy wolisz pisownię brytyjską?<br />Tak = brytyjska / Nie = amerykańska');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Dalsze ustawienia</h2>Czy należy dodać nowy język do <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Przy tym ustawieniu na "Tak", nowe języki mogą być dodawane do <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />W przypadku ustawienia "Nie" język musi już istnieć w systemie sklepu i musi być aktywowany w tym module.<br />Utw&oacute;rz język w sklepie: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Utw&oacute;rz język w sklepie ?</a> &nbsp;&nbsp;<span class="alrt">!! Nowy język będzie dostępny w sklepie dopiero po 24-48 godzinach. !!</span><br />Następnie zaznacz tutaj jako język do przetłumaczenia');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Przetłumacz pliki językowe na serwerze?' . draw_tooltip('Wszystkie pliki na serwerze są sprawdzane i tłumaczone</br>Dotyczy to r&oacute;wnież plik&oacute;w językowych moduł&oacute;w i rozszerzeń. Wszystkie pliki językowe są regenerowane, w tym istniejące języki.<br />Domyślnie istniejące teksty obcojęzyczne w Reqser są adoptowane i nie są tłumaczone na nowo, ale można to zmienić w ustawieniach Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Bez plik&oacute;w językowych żaden język obcy nie działa w sklepie i jest "biała" strona!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Automatyczne przesyłanie plik&oacute;w językowych?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Czy przetłumaczone pliki językowe powinny być automatycznie przesyłane do sklepu, czy też każdy plik językowy powinien być wybierany ręcznie w Reqser?<br />Tak = przesyłaj pliki językowe automatycznie / Nie = przesyłaj ręcznie');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Bezpieczeństwo</h2>Rejestrować dostęp do API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Czy dostęp do API powinien być rejestrowany?<br />(Logi można znaleźć w <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test w przeglądarce?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test w przeglądarce bez wysyłania nagł&oacute;wk&oacute;w?<br /><span class="alrt">!!! Musi być wyłączone podczas działania API na żywo !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Klucz API Reqser" zapisany tutaj w module nie jest zgodny z kluczem zapisanym na stronie <i>reqser.com</i>.<br />Zaloguj się do <i>reqser</i>.com i sprawdź klucz API lub, jeśli to konieczne, pobierz go ponownie i zapisz tutaj.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Klucz API został pomyślnie zapisany');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Nie wprowadzono klucza API! Zaloguj się do <i>reqser.com</i> i uzyskaj klucz API dla tej strony i zapisz go tutaj w module.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Nie wybrano języka do przetłumaczenia!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', 'Opcja "Przetłumacz na jakie języki?" nie może zawierać języka wybranego w opcji "Przetłumacz z jakiego języka?".');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Moduł Reqser.com DeepL automatycznie przetłumaczy wszystkie języki obce aktywowane w module dla tego produktu po zapisaniu.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Moduł Reqser.com Deepl Translator nie ma klucza API, wprowadź klucz API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Moduł Reqser.com Deepl Translator nie został aktywowany, należy aktywować moduł w sekcji Module->System Module.');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Moduł Reqser.com Deepl Translator nie ma połączenia!');