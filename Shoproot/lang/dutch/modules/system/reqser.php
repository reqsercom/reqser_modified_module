<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/dutch/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatische DeepL vertalingen via Reqser <i>.</i>com, module versie %s<br />- gebouwd voor <i>Reqser</i>.com - &copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> en &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;"> <i>Reqser</i>.com</a>.<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> en &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Systeemmodule voor de activering en configuratie van vertalingen via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Basisinstellingen</h2>Module activeren?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API sleutel');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Je kunt hier de API-sleutel van <i>Reqser.com</i> invoeren. Wordt weergegeven wanneer u verbinding maakt met Modified op Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Directe link hier</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tijdelijk beveiligingstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tijdelijk beveiligingstoken voor externe query\'s naar de winkel.<br /><span  class="alrt">Wordt automatisch toegewezen !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Geldigheid van het tijdelijke beveiligingstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Het tijdelijke beveiligingstoken is geldig tot (zie hieronder).<br />Als het verlopen is, wordt er op verzoek een nieuwe aangemaakt door een externe bron en deze wordt dan hier weergegeven.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Taal tabellen</h2>Reqser.com toegang geven tot alle kolommen van de gedeelde tabel ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" geeft reqser toegang tot alle kolomvermeldingen van de vrijgegeven tabellen, een "Nee" kan leiden tot fouten met oude shopversies of bij gebruik van niet-standaard sjablonen.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Databasetabellen');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standaarddatabasetabellen die moeten worden vertaald.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Overige databasetabellen');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selecteer hier verdere databasetabellen die vertaald moeten worden');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andere databasetabellen (niet beschikbaar voor selectie hierboven)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Voer hier verdere databasetabellen in die vertaald moeten worden, gescheiden door komma\'s.<br />(Voor uitbreidingen met nieuwe "niet-gewijzigde standaard" tabellen)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Tabellen uitsluiten');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Voer hier de tabellen in die uitgesloten moeten worden van vertalingen, gescheiden door komma\'s.<br />(Alleen nodig als hierboven alle standaardtabellen zijn geselecteerd en sommige daarvan moeten worden uitgesloten).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Vertalen vanuit welke taal?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Uit welke taal moet de vertaling komen?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Naar welke talen kan ik vertalen? ' . draw_tooltip('Extra talen kunnen worden toegevoegd op <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'In welke talen moet het vertaald worden?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engels wordt standaard gebruikt als US English');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Geef je de voorkeur aan de Britse spelling?<br />Ja = Brits / Nee = VS');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Verdere instellingen</h2>Moet een nieuwe taal mogen worden toegevoegd aan <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Met deze instelling op "Ja" kunnen nieuwe talen worden toegevoegd aan <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Met "Nee" moet de taal al bestaan in het shopsysteem en moet de taal geactiveerd zijn in deze module.<br />Taal in de shop aanmaken: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Taal in shop aanmaken ?</a> &nbsp;&nbsp;<span class="alrt">!! De nieuwe taal is pas na 24-48 uur beschikbaar in de shop. !!</span><br />Markeer dan hier als te vertalen taal');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Taalbestanden op de server vertalen?' . draw_tooltip('Alle bestanden op de server worden opgevraagd en vertaald</br>Dit geldt ook voor de taalbestanden van de modules en extensies. Alle taalbestanden worden opnieuw gegenereerd, inclusief bestaande talen.<br />Standaard worden bestaande teksten in vreemde talen in reqser overgenomen en niet nieuw vertaald, maar dit kan worden gewijzigd in de instellingen van reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Zonder taalbestanden werkt geen enkele vreemde taal in de winkel en is er een "witte" pagina!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Taalbestanden automatisch overdragen?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Moeten de vertaalde taalbestanden automatisch worden overgedragen naar je shop of moet elk taalbestand handmatig worden geselecteerd in Reqser?<br />Ja = taalbestanden automatisch overdragen / Nee = handmatig overdragen');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Beveiliging</h2>API-toegang loggen?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Moeten API-toegangen worden gelogd?<br />(Logs zijn te vinden in <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Testen in de browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testen in de browser zonder headers te verzenden?<br /><span class="alrt">!!! Moet worden gedeactiveerd in live werking van de API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'De "Reqser API key" die hier in de module is opgeslagen komt niet overeen met de key die is opgeslagen op <i>reqser.com</i>.<br />Log in op <i>reqser</i>.com en controleer de API-sleutel of haal hem indien nodig opnieuw op en sla hem hier op.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API-sleutel succesvol opgeslagen');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Er is geen API-sleutel ingevoerd! Log in op <i>reqser.com</i> en vraag de API-sleutel voor deze website op en sla deze hier in de module op.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL fout:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Module geen taal geselecteerd waarnaar moet worden vertaald!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Vertalen naar welke talen?" mag geen taal bevatten die werd geselecteerd in "Vertalen vanuit welke taal?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'De handmatig toegevoegde tabel <b>"%s"</b> kon niet worden gevonden in de database. Controleer de instellingen voor "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'De module reqser.com DeepL zal na het opslaan automatisch alle vreemde talen vertalen die in de module voor dit product zijn geactiveerd.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator module heeft geen API-sleutel, voer een API-sleutel in a.u.b.');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator module niet geactiveerd, activeer de module onder Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator module heeft geen verbinding!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Reqser.com verbinding wordt gecontroleerd, gelieve te wachten.');