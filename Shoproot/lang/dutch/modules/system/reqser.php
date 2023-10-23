<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 0.9 on the 23.10.2023
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

* Edit by JorisK Reqser.com 08-2023

***********************************************************/
define('MODULE_SYSTEM_REQSER_TITLE', 'Vertalingen via <i>Reqser.com</i> en DeepL, module versie %s<br />- build voor <i>Reqser.com</i> -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> en &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Systeemmodule voor activering en configuratie van vertalingen via <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a><br /><span style="color:#c00;">!!! Als u iets in uw databasestructuur wilt veranderen (kan ook worden gedaan door bijv. Wawis), zodat bijv. ID\'s in tabellen die moeten worden vertaald kunnen veranderen, zorg er dan voor dat u deze module eerst deactiveert !!!</span>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', 'Module activeren?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser API sleutel');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Voer hier de API-sleutel van <i>Reqser.com</i> in. Wordt weergegeven wanneer u verbinding maakt met Modified op Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Directe link hier</a> ');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_TITLE', 'API-sleutel controleren?');
define('MODULE_SYSTEM_REQSER_VERIFY_KEY_ON_SAVE_DESC', 'API-sleutel live controleren bij het opslaan van de module?');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Tijdelijk beveiligingstoken');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Tijdelijk beveiligingstoken voor externe query\'s naar de winkel.<br /><span  class="alrt">Automatisch toegewezen !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Geldigheid van het tijdelijke beveiligingstoken');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Het tijdelijke beveiligingstoken is geldig tot (zie hieronder).<br />Als het verlopen is, wordt er op verzoek van een externe partij een nieuwe aangemaakt, die dan hier wordt weergegeven.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr />Reqser.com toegang geven tot alle kolommen van de gedeelde tabel ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Ja" geeft Reqser toegang tot alle kolomvermeldingen van de vrijgegeven tabellen, een "Nee" kan leiden tot fouten met oude shopversies of niet-bestaande vermeldingen.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'DB-tabellen');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standaard DB-tabellen die moeten worden vertaald.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Andere DB-tabellen');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Selecteer hier verdere DB-tabellen die vertaald moeten worden');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Andere DB-tabellen (die hierboven niet beschikbaar zijn voor selectie)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Voer hier verdere DB-tabellen in, door komma\'s gescheiden, die moeten worden vertaald.<br />(Voor uitbreidingen met nieuwe "Niet gewijzigde standaard"-tabellen)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Tabellen uitsluiten');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Voer hier door komma\'s gescheiden tabellen in die moeten worden uitgesloten van vertalingen.<br />(Alleen nodig als alle standaardtabellen hierboven zijn gemarkeerd en sommige tabellen moeten worden uitgesloten).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '<hr />Vertalen vanuit welke taal?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'Vanuit welke taal wil je vertalen?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Vertalen in welke talen? ' . draw_tooltip('Als u een taal selecteert die behoort tot de aangepaste standaard (bijv. Engels):<br />In dit geval kunnen de bijbehorende taalbestanden na vertaling door Reqser verschillen van de bestanden die door aangepast worden geleverd.<br />Als u alleen bestanden voor extensies wilt laten vertalen, stelt u "Taalbestanden automatisch overzetten ?"Nee"<br />Op Reqser.com kunt u ook instellen of bestaande teksten in vreemde talen moeten worden overgedragen of dat de volledige taal opnieuw moet worden vertaald. en markeer de bestanden die handmatig moeten worden vertaald op reqser.com.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Naar welke talen moet er vertaald worden ?<br />Voor nieuwe talen, zie een item hoger.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Engels wordt standaard gebruikt als US English');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Geeft u de voorkeur aan de Britse spelling ?<br />Ja = Brits / Nee = VS');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', 'Moet het toegestaan zijn om een nieuwe taal toe te voegen aan <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Met deze instelling op "Ja", kunnen nieuwe talen worden toegevoegd aan <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Met "Nee", moet de taal al bestaan in het shopsysteem en moet de taal geactiveerd zijn in de huidige module.<br />Taal in shop aanmaken: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Taal in winkel maken ?</a>   <span class="alrt">!! De nieuwe taal is pas na 24-48 uur beschikbaar in de winkel. </span><br />Markeer dan hier als te vertalen taal');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '<hr />Taalbestanden vertalen op de server?' . draw_tooltip('Zonder het bestandssysteem moeten de taalbestanden in elke vreemde taal onafhankelijk worden ingevoerd in de map lang/ en op alle andere locaties.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Alle bestanden op de server worden opgevraagd en vertaald.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Taalbestanden automatisch overdragen?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Moeten de vertaalde taalbestanden automatisch naar uw winkel worden overgedragen of moet elk taalbestand handmatig worden geselecteerd in Reqser ?<br />Ja = taalbestanden automatisch / Nee = handmatig overgedragen');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr />API-toegangen loggen?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Moeten API-toegangen worden gelogd?<br />(Logs kunnen worden gevonden in <i>/api/reqser/logs/</i>).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Testen in de browser?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testen in de browser zonder headers te verzenden?<br /><span class="alrt">!!! Moet worden uitgeschakeld in live werking van de API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'De "Reqser API-sleutel" die hier in de module is opgeslagen, komt niet overeen met de sleutel die is opgeslagen bij <i>reqser.com</i>.<br />Log in bij <i>reqser.com</i> en controleer de API-sleutel, of haal hem indien nodig opnieuw op en sla hem hier op.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API sleutel succesvol gestort');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'De aangevraagde "Reqser API Key" is leeg en kan daarom niet worden vergeleken met de sleutel die hier in de module is opgeslagen.<br />Neem contact op met <i>reqser.com</i>.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL fout:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Er is geen taal geselecteerd waarin moet worden vertaald!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Vertalen naar welke talen?" mag geen taal bevatten die werd geselecteerd in "Vertalen vanuit welke taal?');