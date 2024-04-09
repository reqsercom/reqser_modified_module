<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/bulgarian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Автоматични преводи на DeepL чрез Reqser <i>.</i>com, версия на модула %s<br />- изграждане за <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> и &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Системен модул за активиране и конфигуриране на преводи чрез <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Основни настройки</h2>Активиране на модула?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Ключ на API за заявка');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Можете да въведете API ключа от <i>Reqser.com</i> тук. Показва се при свързване с Modified в Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Директна връзка тук</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Временен токен за сигурност');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Временен токен за сигурност за външни заявки към магазина.<br /><span  class="alrt">Присвоява се автоматично !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Валидност на временния токен за сигурност');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Временният знак за сигурност е валиден до (вж. по-долу).<br />Когато изтече, при поискване от външен източник ще бъде създаден нов и след това ще бъде показан тук.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Езикови таблици</h2>Дайте на Reqser.com достъп до всички колони на споделената таблица ?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Да" дава на Reqser достъп до всички записи на колони на освободените таблици, а "Не" може да доведе до грешки при стари версии на магазина или при използване на нестандартни шаблони.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Таблици на базата данни');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Стандартни таблици от базата данни, които да бъдат преведени.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Допълнителни таблици в базата данни');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Изберете допълнителни таблици от базата данни, които да бъдат преведени тук');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Други таблици от базата данни (не са достъпни за избор по-горе)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Въведете допълнителни таблици от базата данни, които да бъдат преведени тук, разделени със запетаи.<br />(За разширения с нови "немодифицирани стандартни" таблици)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Изключване на маси');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Въведете тук таблиците, които трябва да бъдат изключени от преводите, разделени със запетаи.<br />(Необходимо е само ако всички стандартни таблици са избрани по-горе и някои от тях трябва да бъдат изключени).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Превод от кой език?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'От кой език трябва да бъде направен преводът?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'На кои езици мога да превеждам? ' . draw_tooltip('Допълнителни езици могат да бъдат добавени на <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'На кои езици трябва да се преведе?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Английският език се използва като US English по подразбиране');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Предпочитате ли британското изписване?<br />Да = британски / Не = САЩ');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Допълнителни настройки</h2>Трябва ли да се разреши добавянето на нов език в <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Когато тази настройка е зададена на "Да", могат да се добавят нови езици към <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />При настройка "Не" езикът трябва вече да съществува в системата на магазина и да бъде активиран в този модул.<br />Създаване на език в магазина: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Създаване на език в магазина ?</a> &nbsp;&nbsp;<span class="alrt">!! Новият език е наличен в магазина само след 24-48 часа. !!</span><br />След това маркирайте тук като език за превод');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Преведете езиковите файлове на сървъра?' . draw_tooltip('Всички файлове на сървъра се превеждат</br>Това се отнася и за езиковите файлове на модулите и разширенията. Всички езикови файлове се възстановяват, включително съществуващите езици.<br />По подразбиране съществуващите чуждоезикови текстове в Reqser се приемат, а не се превеждат наново, но това може да се промени в настройките на Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Без езикови файлове в магазина не работи нито един чужд език и има "бяла" страница!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Автоматично прехвърляне на езикови файлове?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Трябва ли преведените езикови файлове да се прехвърлят автоматично във вашия магазин или всеки езиков файл трябва да се избере ръчно в Reqser?<br />Да = автоматично прехвърляне на езиковите файлове / Не = ръчно прехвърляне');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Сигурност</h2>Регистриране на достъпа до API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Трябва ли достъпът до API да се регистрира?<br />(Дневниците могат да бъдат намерени в <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Тест в браузъра ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Тестване в браузъра без изпращане на заглавия?<br /><span class="alrt">!!! Трябва да се деактивира при работа на API в реално време !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Съхраняваният тук в модула "Reqser API key" не съвпада с този, съхраняван в <i>reqser.com</i>.<br />Моля, влезте в <i>reqser</i>.com и проверете API ключа или, ако е необходимо, изтеглете го отново и го запазете тук.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Ключът на API е успешно съхранен');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Не е въведен API ключ! Моля, влезте в <i>reqser.com</i>, вземете API ключа за този уебсайт и го запишете тук в модула.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL Грешка:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Модул не е избран език, на който да бъде преведен !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Превод на кои езици?" не трябва да съдържа език, който е избран в "Превод от кой език?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Ръчно добавената таблица <b>"%s"</b> не може да бъде намерена в базата данни. Моля, проверете настройките за "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Модулът Reqser.com DeepL автоматично ще преведе всички чужди езици, активирани в модула за този продукт, след като го запази.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Модулът Deepl Translator на Reqser.com няма API ключ, моля, въведете API ключ');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator модул не е активиран, моля, активирайте модула в Модул->Системен модул');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Модулът Deepl Translator на Reqser.com няма връзка!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Проверява се връзката с Reqser.com, моля, изчакайте.');