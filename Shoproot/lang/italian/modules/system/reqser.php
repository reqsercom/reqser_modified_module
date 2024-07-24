<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/italian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Strumenti AI per traduzioni e SEO via reqser <i>.</i>com, versione modulo %s<br />- build per <i>reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> e &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Modulo di sistema per la connessione con DeepL, OpenAI e Neuroflash tramite <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Impostazioni di base</h2>Attivare il modulo?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Chiave API del reqser');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', '&Egrave; possibile inserire qui la chiave API di <i>Reqser.com</i>. Viene visualizzata quando ci si connette a Modified su Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Collegamento diretto qui</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Token di sicurezza temporaneo');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token di sicurezza temporaneo per le interrogazioni esterne al negozio.<br /><span  class="alrt">Viene assegnato automaticamente !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validit&agrave; del token di sicurezza temporaneo');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Il token di sicurezza temporaneo &egrave; valido fino a (vedi sotto).<br />Una volta scaduto, ne verr&agrave; creato uno nuovo su richiesta da una fonte esterna e verr&agrave; visualizzato qui.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabelle linguistiche</h2>Dare a reqser.com l\'accesso a tutte le colonne della tabella condivisa?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"S&igrave;" consente a Reqser di accedere a tutte le voci delle colonne delle tabelle rilasciate, mentre "No" pu&ograve; causare errori con le vecchie versioni del negozio o quando si utilizzano modelli non standard.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabelle del database');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabelle standard del database da tradurre.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Altre tabelle del database');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selezionate qui altre tabelle del database da tradurre');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Altre tabelle del database (non disponibili per la selezione di cui sopra)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Inserire qui altre tabelle del database da tradurre, separate da virgole.<br />(Per le estensioni con nuove tabelle "standard non modificate")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Escludere le tabelle');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Inserire qui le tabelle che devono essere escluse dalle traduzioni, separate da virgole.<br />(necessario solo se tutte le tabelle standard sono state selezionate in precedenza e alcune di esse devono essere escluse).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Tradurre da quale lingua?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Da quale lingua deve essere effettuata la traduzione?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'In quali lingue posso tradurre? ' . draw_tooltip('&Egrave; possibile aggiungere altre lingue su <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'In quali lingue si dovrebbe tradurre?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'L\'inglese viene utilizzato come inglese statunitense per impostazione predefinita');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Preferisce l\'ortografia britannica?<br />S&igrave; = britannico / No = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Ulteriori impostazioni</h2>&Egrave; possibile aggiungere una nuova lingua a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Con questa impostazione impostata su "S&igrave;", &egrave; possibile aggiungere nuove lingue a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Con "No", la lingua deve gi&agrave; esistere nel sistema del negozio e deve essere attivata in questo modulo.<br />Creare la lingua nel negozio: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Creare la lingua nel negozio?</a> &nbsp;&nbsp;<span class="alrt">!! La nuova lingua &egrave; disponibile nel negozio solo dopo 24-48 ore. !!</span><br />Contrassegnare qui la lingua da tradurre');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Tutti i file del server vengono interrogati e tradotti</br>Questo vale anche per i file di lingua dei moduli e delle estensioni. Tutti i file di lingua vengono rigenerati, comprese le lingue esistenti.<br />Per impostazione predefinita, i testi in lingua straniera esistenti in reqser vengono adottati e non tradotti ex novo, ma questo pu&ograve; essere modificato nelle impostazioni di reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Senza file di lingua, nessuna lingua straniera funziona nel negozio e c\'&egrave; una pagina "bianca"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Trasferire automaticamente i file di lingua?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'I file delle lingue tradotte devono essere trasferiti automaticamente al vostro negozio o ogni file di lingua deve essere selezionato manualmente in reqser?<br />S&igrave; = trasferimento automatico dei file di lingua / No = trasferimento manuale');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Sicurezza</h2>Registrare gli accessi alle API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Gli accessi all\'API devono essere registrati?<br />(I registri si trovano in <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Impedire l\'editing della lingua di base?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'La modifica della lingua di base dovrebbe essere consentita in modo che l\'ottimizzazione dei testi per i motori di ricerca possa avvenire nella lingua di base.<br />S&igrave; = Impedire la modifica / No = Consentire la modifica');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', '&Egrave; necessario rimuovere "scripte" e "iframe" dai testi?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Se, ad esempio, nei testi sono inclusi video di YouTube o animazioni, questi tag non devono essere rimossi. In caso contrario, i testi da noi modificati potrebbero perdere funzionalit&agrave;.<br />S&igrave; = Rimuovere / No = Non rimuovere');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test nel browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test nel browser senza inviare intestazioni?<br /><span class="alrt">!!! Deve essere disattivato nel funzionamento live dell\'API!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'La "chiave API di reqser" memorizzata qui nel modulo non corrisponde a quella memorizzata su <i>reqser.com</i>.<br />Accedere a <i>reqser</i>.com e controllare la chiave API o, se necessario, recuperarla nuovamente e salvarla qui.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Chiave API memorizzata con successo');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Non &egrave; stata inserita alcuna chiave API! Accedere a <i>reqser.com</i> e ottenere la chiave API per questo sito web e salvarla qui nel modulo.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERRORE:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Modulo nessuna lingua da tradurre selezionata !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Tradurre in quali lingue?" non deve contenere una lingua selezionata in "Tradurre da quali lingue?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'La tabella aggiunta manualmente <b>"%s"</b> non &egrave; stata trovata nel database.' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Controllare le impostazioni per "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Il modulo reqser.com DeepL tradurr&agrave; automaticamente tutte le lingue straniere attivate nel modulo per questo prodotto dopo il salvataggio.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Il modulo Deepl Translator di reqser.com non ha una chiave API, inserire una chiave API.');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Il modulo Deepl Translator di reqser.com non &egrave; attivato, si prega di attivare il modulo sotto Modulo->Modulo di sistema');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Il modulo Deepl Translator di reqser.com non ha alcuna connessione!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'La connessione a reqser.com &egrave; in fase di verifica, si prega di attendere.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'Le impostazioni SEO sono in fase di caricamento, attendere.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'Le voci non sono complete, controllare:');