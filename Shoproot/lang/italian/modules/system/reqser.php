<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 0.9 on the 23.10.2023
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

* Edit by JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Traduzioni tramite <i>Reqser.com</i> e DeepL, versione modulo %s<br />- build per <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> e &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Modulo di sistema per l\'attivazione e la configurazione delle traduzioni tramite <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a><br /><span style="color:#c00;">!!! Se volete cambiare qualcosa nella struttura del vostro database (pu&ograve; essere fatto anche da Wawis), in modo che ad esempio gli ID delle tabelle da tradurre possano cambiare, assicuratevi di disattivare prima questo modulo!!!</span>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', 'Attivare il modulo?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Chiave API del richiedente');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Inserire qui la chiave API di <i>Reqser.com</i>. Verr&agrave; visualizzata durante la connessione a Modified su Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Link diretto qui</a> ');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_TITLE', 'Controllare la chiave API?');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_DESC', 'Controllare la chiave API in tempo reale quando si salva il modulo?');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Token di sicurezza temporaneo');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token di sicurezza temporaneo per le interrogazioni esterne al negozio.<br /><span  class="alrt">Assegnato automaticamente !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validit&agrave; del token di sicurezza temporaneo');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Il token di sicurezza temporaneo &egrave; valido fino a quando (vedi sotto).<br />Se &egrave; scaduto, ne viene creato uno nuovo su richiesta di un soggetto esterno, che viene poi visualizzato qui.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr />Dare a Reqser.com l\'accesso a tutte le colonne della tabella condivisa?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"S&igrave;" d&agrave; a Reqser l\'accesso a tutte le voci delle colonne delle tabelle rilasciate, mentre "No" pu&ograve; portare a errori con vecchie versioni del negozio o voci inesistenti.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabelle DB');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabelle DB standard da tradurre.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Altre tabelle DB');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selezionare qui altre tabelle DB da tradurre');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Altre tabelle DB (che non sono disponibili per la selezione di cui sopra)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Inserire qui altre tabelle DB, separate da virgole, che devono essere tradotte.<br />(Per estensioni con nuove tabelle "Non modificate standard")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Escludere le tabelle');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Inserire qui le tabelle separate da virgole che devono essere escluse dalle traduzioni.<br />(necessario solo se tutte le tabelle standard sono contrassegnate sopra e alcune di esse devono essere escluse).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '<hr />Tradurre da quale lingua?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Da quale lingua si vuole tradurre?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Tradurre in quali lingue? ' . draw_tooltip('Se si seleziona una lingua che appartiene allo standard modificato (ad esempio l\'inglese):<br />In questo caso, i file di lingua associati dopo la traduzione da parte di Reqser possono differire dai file forniti da modified.<br />Se si desidera che vengano tradotti solo i file per le estensioni, impostare "Trasferire automaticamente i file di lingua?"No"<br />Su Reqser.com &egrave; inoltre possibile impostare se i testi in lingua straniera esistenti devono essere trasferiti o se la lingua completa deve essere tradotta ex novo. e contrassegnare i file da tradurre manualmente su reqser.com.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'In quali lingue deve essere tradotto?<br />Per le nuove lingue, vedere una voce pi&ugrave; in alto.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'L\'inglese viene utilizzato come inglese statunitense per impostazione predefinita');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Preferisce l\'ortografia britannica?<br />S&igrave; = britannica / No = USA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '&Egrave; possibile aggiungere una nuova lingua a <i><a href="https://reqser.com/" target="_blank">]reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Impostando "S&igrave;", &egrave; possibile aggiungere nuove lingue a <i><a href="https://reqser.com/" target="_blank">]reqser.com</i></a>.<br />Con "No", la lingua deve gi&agrave; esistere nel sistema del negozio e deve essere attivata nel presente modulo.<br />Creare lingua nel negozio: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Creare lingua in negozio?</a>   <span class="alrt">!! La nuova lingua &egrave; disponibile nel negozio solo dopo 24-48 ore. !!!</span><br />Poi segnare qui come lingua da tradurre');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '<hr />Tradurre i file di lingua sul server?' . draw_tooltip('Senza il file system, i file di lingua di ogni lingua straniera devono essere inseriti indipendentemente nella cartella lang/ e in tutte le altre posizioni.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Tutti i file sul server vengono interrogati e tradotti.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Trasferire automaticamente i file di lingua?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'I file di lingua tradotti devono essere trasferiti automaticamente al vostro negozio o ogni file di lingua deve essere selezionato manualmente in Reqser?<br />S&igrave; = file di lingua automaticamente / No = trasferito manualmente');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr />Registrare gli accessi API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Gli accessi all\'API devono essere registrati?<br /> (i registri si trovano in <i>/api/reqser/logs/</i>).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Test nel browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Test nel browser senza inviare intestazioni?<br /><span class="alrt">!!! Deve essere disabilitato nel funzionamento live dell\'API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'La "chiave API di Reqser" memorizzata qui nel modulo non corrisponde a quella memorizzata su <i>reqser.com</i>.<br />Si prega di accedere a <i>reqser.com</i> e di controllare la chiave API, o di ottenerla di nuovo se necessario e salvarla qui.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Chiave API depositata con successo');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'La "Reqser API Key" richiesta &egrave; vuota e quindi non pu&ograve; essere confrontata con quella memorizzata nel modulo.<br />Si prega di contattare <i>reqser.com</i>.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERRORE:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Non &egrave; stata selezionata alcuna lingua in cui tradurre!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Traduci in quali lingue?" non deve contenere una lingua selezionata in "Traduci da quali lingue?');