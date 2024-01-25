<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.5 on the 25.01.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/ukrainian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Автоматичний переклад DeepL через Reqser <i>.</i>com, версія модуля %s<br />- збірка для <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> та &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
Системний модуль для активації та налаштування перекладів через <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Основні налаштування</h2>Активувати модуль?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Ключ API запитувача');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Ви можете ввести ключ API від <i>Reqser.com</i> тут. Відображається при підключенні до Modified на Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Пряме посилання тут </a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Тимчасовий маркер безпеки');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Тимчасовий токен безпеки для зовнішніх запитів до магазину.<br /><span  class="alrt">Призначається автоматично! </span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Термін дії тимчасового токена безпеки');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Тимчасовий токен безпеки дійсний до (див. нижче).<br />Після закінчення терміну його дії буде створено новий за запитом із зовнішнього джерела, який буде відображено тут.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Мовні таблиці</h2>Надати Reqser.com доступ до всіх стовпців спільної таблиці?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Так" надає Reqser доступ до всіх записів стовпців опублікованих таблиць, "Ні" може призвести до помилок зі старими версіями магазину або при використанні нестандартних шаблонів.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Таблиці бази даних');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Стандартні таблиці бази даних для перекладу.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Інші таблиці бази даних');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Виберіть інші таблиці бази даних для перекладу тут');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Інші таблиці бази даних (недоступні для вибору вище)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Тут через кому введіть інші таблиці бази даних, які потрібно перекласти.<br />(Для розширень з новими "немодифікованими стандартними" таблицями)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Виключити таблиці');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Введіть тут таблиці, які потрібно виключити з перекладу, через кому.<br />(Необхідно лише в тому випадку, якщо вище вибрано всі стандартні таблиці, а деякі з них потрібно виключити).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'З якої мови перекладати?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'З якої мови слід робити переклад?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'На які мови я можу перекладати? ' . draw_tooltip('Додаткові мови можна додати на <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Якими мовами слід перекладати?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'За замовчуванням використовується англійська мова США');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Ви віддаєте перевагу британському написанню?<br />Так = британський / Ні = американський');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Інші налаштування</h2>Чи потрібно додати нову мову на <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Якщо цей параметр встановлено на "Так", нові мови можуть бути додані до <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Якщо значення "Ні", мова повинна вже існувати в системі магазину, і вона повинна бути активована в цьому модулі.<br />Створіть мову в магазині: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Створити мову в магазині: </a> &nbsp;&nbsp;<span class="alrt">!! Нова мова буде доступна в магазині тільки через 24-48 годин. !!</span><br />Потім позначте тут мову для перекладу');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Перекладати мовні файли на сервері?' . draw_tooltip('Всі файли на сервері запитуються і перекладаються</br>Це також стосується мовних файлів модулів і розширень. Всі мовні файли регенеруються, включно з існуючими мовами.<br />За замовчуванням у Reqser приймаються наявні іншомовні тексти, а не перекладаються нові, але це можна змінити у налаштуваннях Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Без мовних файлів в магазині не працює жодна іноземна мова і є "біла" сторінка!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Передавати мовні файли автоматично?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Чи повинні перекладені мовні файли автоматично передаватися до вашого магазину, чи кожен мовний файл потрібно вибирати вручну в Reqser?<br />Так = перенести мовні файли автоматично / Ні = перенести вручну');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Безпека</h2>Журналізувати доступ до API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Чи потрібно реєструвати доступ до API?<br />(Логи можна знайти в <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Тест у браузері?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Перевірити в браузері без відправки заголовків?<br /><span class="alrt">!!! Має бути деактивовано в реальній роботі API!!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '"Ключ API Reqser", що зберігається тут, у модулі, не відповідає ключу, що зберігається на <i>reqser.com</i>.<br />Будь ласка, увійдіть на <i>reqser</i>.com і перевірте ключ API або, якщо необхідно, отримайте його знову і збережіть тут.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Ключ API успішно збережено');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'Ключ API не введено! Будь ласка, авторизуйтесь на <i>reqser.com</i>, отримайте ключ API для цього сайту і збережіть його тут, у модулі.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Мову для перекладу не вибрано!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Перекласти на які мови?" не повинно містити мову, яка була обрана в "Перекласти з якої мови?".');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Модуль Reqser.com DeepL автоматично перекладе всі іноземні мови, активовані в модулі для цього товару, після збереження.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Модуль Reqser.com Deepl Translator не має API ключа, будь ласка, введіть API ключ');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Модуль Reqser.com Deepl Translator не активовано, будь ласка, активуйте модуль у розділі Модуль->Системний модуль');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Модуль Reqser.com Deepl Translator не має зв\'язку!');