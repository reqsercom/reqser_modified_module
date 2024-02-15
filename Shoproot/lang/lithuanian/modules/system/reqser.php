<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.8 on the 15.02.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/lithuanian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Automatiniai DeepL vertimai per Reqser <i>.</i>com, modulio versija %s<br />- sukurti <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> ir &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Sisteminis modulis, skirtas vertimams aktyvuoti ir konfigūruoti per <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Pagrindiniai nustatymai</h2>Įjungti modulį?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Užklausos API raktas');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'API raktą i&scaron; <i>Reqser.com</i> galite įvesti čia. Rodomas jungiantis prie "Reqser" svetainės "Modified". <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Tiesioginė nuoroda čia</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Laikinas saugumo simbolis');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Laikinas saugumo simbolis, skirtas i&scaron;orinėms užklausoms į parduotuvę.<br /><span  class="alrt">Priskiriamas automati&scaron;kai !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Laikinojo saugumo simbolio galiojimas');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Laikinasis saugumo simbolis galioja iki (žr. toliau).<br />Pasibaigus jo galiojimo laikui, pra&scaron;ant i&scaron; i&scaron;orinio &scaron;altinio, bus sukurtas naujas, kuris bus rodomas čia.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Kalbos lentelės</h2>Suteikti Reqser.com prieigą prie visų bendrai naudojamos lentelės stulpelių ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Taip" suteikia "Reqser" prieigą prie visų i&scaron;leistų lentelių stulpelių įra&scaron;ų, "Ne" gali sukelti klaidų naudojant senas parduotuvės versijas arba naudojant nestandartinius &scaron;ablonus.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Duomenų bazės lentelės');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Standartinės duomenų bazės lentelės, kurias reikia i&scaron;versti.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Kitos duomenų bazės lentelės');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Pasirinkite kitas duomenų bazės lenteles, kurias reikia i&scaron;versti čia');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Kitos duomenų bazės lentelės (negalima pasirinkti pirmiau)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Čia įveskite kitas verčiamas duomenų bazės lenteles, atskirtas kableliais.<br />(plėtiniams su naujomis "nekeičiamomis standartinėmis" lentelėmis)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Neįtraukti lentelių');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Čia įveskite lenteles, kurios neturi būti įtrauktos į vertimus, atskirtas kableliais.<br />(Būtina tik tuo atveju, jei pirmiau pasirinktos visos standartinės lentelės ir kai kurios i&scaron; jų turi būti neįtrauktos).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'I&scaron;versti i&scaron; kurios kalbos?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'I&scaron; kurios kalbos reikėtų versti?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Į kokias kalbas galiu versti? ' . draw_tooltip('Papildomų kalbų galite pridėti <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Į kokias kalbas reikėtų versti?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Pagal numatytuosius nustatymus naudojama JAV anglų kalba');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Ar pageidaujate briti&scaron;kos ra&scaron;ybos?<br />Taip = britų kalba / Ne = JAV');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Kiti nustatymai</h2>Ar į <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> turėtų būti leista pridėti naują kalbą?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Nustačius &scaron;į nustatymą "Taip", į <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> galima pridėti naujų kalbų.<br />Pasirinkus "Ne", kalba jau turi egzistuoti parduotuvės sistemoje ir turi būti aktyvuota &scaron;iame modulyje.<br />Sukurti kalbą parduotuvėje: Sukurti kalbą parduotuvėje ?</a>: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Sukurti kalbą parduotuvėje ?</a> &nbsp;&nbsp;<span class="alrt">!! Nauja kalba parduotuvėje bus prieinama tik po 24-48 valandų. !!</span><br />Tada pažymėkite čia kaip kalbą, kurią reikia i&scaron;versti');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'I&scaron;versti serverio kalbinius failus?' . draw_tooltip('Užklausiami ir i&scaron;verčiami visi serverio failai</br>Tai taikoma ir modulių bei plėtinių kalbiniams failams. Atkuriami visi kalbų failai, įskaitant esamas kalbas.<br />Pagal numatytuosius nustatymus esami užsienio kalbų tekstai "Reqser" programoje perimami, o ne naujai i&scaron;verčiami, tačiau tai galima pakeisti "Reqser" nustatymuose.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Be kalbos failų parduotuvėje neveikia jokia užsienio kalba ir yra "baltas" puslapis!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Automati&scaron;kai perkelti kalbos failus?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Ar i&scaron;versti kalbų failai turėtų būti automati&scaron;kai perkeliami į jūsų parduotuvę, ar kiekvieną kalbos failą reikia pasirinkti rankiniu būdu "Reqser" programoje?<br />Taip = kalbos failai perkeliami automati&scaron;kai / Ne = perkeliami rankiniu būdu');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Saugumas</h2>Registruoti API prieigas?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Ar API prieigos turėtų būti registruojamos?<br />(Žurnalus galima rasti <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Bandymas nar&scaron;yklėje ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Bandymas nar&scaron;yklėje nesiunčiant antra&scaron;čių?<br /><span class="alrt">!!! Turi būti i&scaron;jungtas, kai API veikia gyvai !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Modulyje saugomas "Reqser API raktas" nesutampa su <i>reqser.com</i> saugomu raktu.<br />Prisijunkite prie <i>reqser</i>.com ir patikrinkite API raktą arba, jei reikia, dar kartą jį gaukite ir i&scaron;saugokite čia.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Sėkmingai i&scaron;saugotas API raktas');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'API raktas neįvestas! Prisijunkite prie <i>reqser.com</i>, gaukite &scaron;ios svetainės API raktą ir i&scaron;saugokite jį modulyje.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL Klaida:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Nėra pasirinktos kalbos, į kurią reikia versti !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Versti į kokias kalbas?" neturi būti kalbos, kuri buvo pasirinkta "Versti i&scaron; kokios kalbos?".');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'I&scaron;saugojus Reqser.com DeepL modulis automati&scaron;kai i&scaron;verčia visas užsienio kalbas, aktyvuotas &scaron;io gaminio modulyje.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com "Deepl Translator" modulis neturi API rakto, įveskite API raktą');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator modulis nėra aktyvuotas, pra&scaron;ome aktyvuoti modulį pagal Modulis->Sistemos modulis');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator modulis neturi ry&scaron;io!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Tikrinamas Reqser.com ry&scaron;ys, palaukite.');