<?php
/***********************************************************
* file: translations_deepl.php
* path: /lang/german/modules/system/
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

define('MODULE_SYSTEM_REQSER_TITLE', 'Automatische DeepL &Uuml;bersetzungen via <i>Reqser.com</i>, Modul-Version %s<br />- build for <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> und &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - '.date('m-Y').')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
System-Modul f&uuml;r die Aktivierung und Konfiguration von &Uuml;bersetzungen via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');

define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Grundeinstellungen</h2>Modul aktivieren?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API-Key');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Hier k&ouml;nnen Sie den API-Key von <i>Reqser.com</i> eintragen. Wird bei der Verbindung zu Modified auf Reqser angezeigt. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&raquo Direkt-Link hier</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tempor&auml;rer Sicherheits-Token');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tempor&auml;rer Sicherheits-Token f&uuml;r externe Abfragen an den Shop.<br /><span  class="alrt">Wird automatisch vergeben !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'G&uuml;ltigkeit des tempor&auml;ren Sicherheits-Tokens');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Der tempor&auml;re Sicherheits-Token ist g&uuml;ltig bis (s.u.).<br />Wenn er abgelaufen ist wird auf Anfrage von Extern ein neuer erstellt, der dann hier angezeigt wird.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Sprachtabellen</h2>Reqser.com Zugriff auf alle Spalten der freigegebenen Tabelle geben ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" gibt Reqser Zugriff auf alle Spalteneintr&auml;ge der freigegebenen Tabellen, ein "Nein" kann bei alten Shopversionen oder bei Verwendung von nicht Standard Template zu Fehler f&uuml;hren.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Datenbank-Tabellen');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standard-Datenbank-Tabellen die &uuml;bersetzt werden sollen.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Weitere Datenbank-Tabellen');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Hier weitere Datenbank-Tabellen w&auml;hlen die &uuml;bersetzt werden sollen');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Weitere Datenbank-Tabellen (die oben nicht zur Auswahl stehen)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Hier weitere Datenbank-Tabellen komma-separiert eingeben die &uuml;bersetzt werden sollen.<br />(F&uuml;r Erweiterungen mit neuen "Nicht modified Standard"-Tabellen)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Tabellen ausschließen');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Hier komma-separiert Tabellen eintragen, die von &Uuml;bersetzungen ausgeschlossen werden sollen.<br />(Nur n&ouml;tig wenn oben alle Standard-Tabellen markiert sind und es sollen welche davon ausgeschlossen werden.)');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Von welcher Sprache &uuml;bersetzen?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Von welcher Sprache aus soll &uuml;bersetzt werden?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'In welche Sprachen &uuml;bersetzen? '.draw_tooltip('Weitere Sprachen k&ouml;nnen auf <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> hinzugef&uuml;gt werden.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'In welche Sprachen soll &uuml;bersetzt werden ?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Englisch wird standardm&auml;ssig als US-Englisch verwendet');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'M&ouml;chten Sie lieber die Britische Schreibweise ?<br />Ja = Britisch / Nein = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Weitere Einstellungen</h2>Soll auf <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> eine neue Sprache hinzugef&uuml;gt werden d&uuml;rfen ?'); 
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Mit dieser Einstellung auf "Ja" k&ouml;nnen neue Sprachen auf <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> hinzugef&uuml;gt werden.<br />Mit "Nein" muss die Sprache im Shopsystem bereits vorhanden sein und im vorliegenden Modul muss die Sprache aktiviert werden.<br />Sprache im Shop anlegen: <a href="'.DIR_WS_ADMIN.FILENAME_LANGUAGES.'">&raquo Sprache im Shop anlegen ?</a> &nbsp;&nbsp;<span class="alrt">!! Die neue Sprache ist erst nach 24-48h im Shop vorhanden. !!</span><br />Anschliessend hier als zu &uuml;bersetzende Sprache markieren'); 

define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Sprachdateien auf dem Server &uuml;bersetzen?'.draw_tooltip('Alle Dateien auf dem Server werden abgefragt und &uuml;bersetzt</br>Das gilt auch f&uuml;r die Sprachdateien der Module und Erweiterungen. Es werden alle Sprachfiles neu generiert, auch von bereits vorhandenen Sprachen.<br />Per Default werden in Reqser bereits vorhandene Fremdsprach Texte &uuml;bernommen und nicht neu &uuml;bersetzt, dies kann aber in den Einstellungen von Reqser ge&auml;ndert werden.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Ohne Sprachdateien funktioniert keine Fremdsprache im Shop und es gibt eine "weisse" Seite!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Sprachdateien automatisch &uuml;bertragen?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Sollen die &uuml;bersetzten Sprachdateien automatisch in Ihren Shop &uuml;bertragen oder jede Sprachdatei manuell in Reqser ausgew&auml;hlt werden ?<br />Ja = Sprachdateien automatisch / Nein = manuell &uuml;bertragen');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sicherheit</h2>API-Zugriffe protokollieren?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Sollen API-Zugriffe protokolliert werden?<br />(Logs sind in <i>/api/reqser/logs/</i> zu finden.)');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test im Browser ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Im Browser testen ohne Header zu senden?<br /><span class="alrt">!!! Muß in Live-Betrieb der API deaktiviert sein !!!</span>');

define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Der hier im Modul hinterlegte "Reqser API-Key" stimmt nicht mit dem bei <i>reqser.com</i> hinterlegten &uuml;berein.<br />Bitte bei <i>reqser.com</i> einloggen und den API-Key pr&uuml;fen, bzw. ggfls. neu holen und hier speichern.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API Key erfolgreich hinterlegt');

define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Es wurde kein API Key eingetragen! Bitte bei <i>reqser.com</i> einloggen und den API-Key für diese Website holen und hier im Modul speichern.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');

define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modul keine Sprache in welche &uuml;bersetzt werden soll ausgew&auml;hlt !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"In welche Sprachen &uuml;bersetzen?" darf nicht eine Sprache enthalten die in "Von welcher Sprache &uuml;bersetzen?" ausgew&auml;hlt wurde.');

define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Das Reqser.com DeepL Modul wird alle im Modul aktivierten Fremdsprachen automatisch nach dem Speichern für dieses Produkt übersetzen.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator Modul hat kein API Key, bitte ein API Key hinterlegen');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator Modul nicht aktiviert, bitte aktivieren Sie das Modul unter Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator Modul hat keine Verbindung!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com Verbindung wird geprüft, bitte warten.');
