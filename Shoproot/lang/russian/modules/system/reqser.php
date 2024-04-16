<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/russian/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Автоматический перевод DeepL через Reqser <i>.</i>com, версия модуля %s<br />- сборка для <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> и &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> Системный модуль для активации и настройки переводов через <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Основные настройки</h2>Активировать модуль?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'API-ключ Reqser');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Вы можете ввести API-ключ от <i>Reqser.com</i> здесь. Отображается при подключении к Modified на Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Прямая ссылка здесь</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Временный маркер безопасности');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Временный токен безопасности для внешних запросов к магазину.<br /><span  class="alrt">Присваивается автоматически !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Срок действия временного маркера безопасности');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'Временный маркер безопасности действителен до тех пор, пока не истечет срок его действия (см. ниже).<br />По истечении срока его действия по запросу из внешнего источника будет создан новый, который будет отображаться здесь.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Языковые таблицы</h2>Предоставить Reqser.com доступ ко всем столбцам общей таблицы?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"Да" дает Reqser доступ ко всем столбцам освобожденных таблиц, "Нет" может привести к ошибкам при работе со старыми версиями магазинов или при использовании нестандартных шаблонов.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Таблицы базы данных');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Стандартные таблицы базы данных, подлежащие переводу.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Дополнительные таблицы базы данных');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Выберите другие таблицы базы данных для перевода здесь');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Другие таблицы базы данных (недоступные для выбора выше)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Укажите здесь другие таблицы базы данных, которые необходимо перевести, разделяя их запятыми.<br />(Для расширений с новыми "немодифицированными стандартными" таблицами)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Исключить столы');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Введите таблицы, которые необходимо исключить из перевода, разделяя их запятыми.<br />(Необходимо только в том случае, если все стандартные таблицы выбраны выше и некоторые из них должны быть исключены).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'С какого языка переводить?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'С какого языка следует выполнять перевод?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'На какие языки я могу переводить? ' . draw_tooltip('Дополнительные языки можно добавить на сайте <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'На какие языки следует переводить?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'По умолчанию используется английский язык США');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Предпочитаете ли вы британское написание?<br />Да = британское / Нет = американское');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Дополнительные настройки</h2>Следует ли разрешить добавление нового языка на сайт <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Если для этого параметра установлено значение "Да", новые языки могут быть добавлены в <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Если установлено значение "Нет", язык должен уже существовать в системе магазина, и он должен быть активирован в этом модуле.<br />Создать язык в магазине: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Создать язык в магазине ?</a> &nbsp;&nbsp;<span class="alrt">!! Новый язык будет доступен в магазине только через 24-48 часов. !!</span><br />Затем отметьте здесь язык для перевода');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'Перевести языковые файлы на сервере?' . draw_tooltip('Все файлы на сервере запрашиваются и переводятся</br>Это также относится к языковым файлам модулей и расширений. Все языковые файлы регенерируются, включая существующие языки.<br />По умолчанию существующие тексты на иностранных языках в Reqser перенимаются, а не переводятся заново, но это можно изменить в настройках Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Без языковых файлов в магазине не работает ни один иностранный язык, а страница остается "белой"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Передавать языковые файлы автоматически?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Должны ли переведенные языковые файлы автоматически передаваться в ваш магазин или каждый языковой файл должен быть выбран вручную в Reqser?<br />Да = автоматически передавать языковые файлы / Нет = передавать вручную');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Безопасность</h2>Вести журнал доступа к API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Нужно ли регистрировать обращения к API?<br />(Журналы можно найти в <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Тестировать в браузере?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Тестировать в браузере без отправки заголовков?<br /><span class="alrt">!!! Должно быть отключено при работе с API в реальном времени !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'Ключ API Reqser, сохраненный здесь, в модуле, не совпадает с ключом, сохраненным на сайте <i>reqser.com</i>.<br />Пожалуйста, войдите на <i>reqser</i>.com и проверьте ключ API или, если необходимо, получите его снова и сохраните здесь.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Ключ API успешно сохранен');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'API-ключ не был введен! Пожалуйста, войдите на <i>reqser.com</i>, получите ключ API для этого сайта и сохраните его здесь, в модуле.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL Модуль не выбран язык для перевода!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', 'В разделе "Перевести на какие языки?" не должно быть языка, который был выбран в разделе "Перевести с какого языка?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'Добавленная вручную таблица <b>"%s"</b> не найдена в базе данных. Пожалуйста, проверьте настройки для "' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '"!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Модуль Reqser.com DeepL после сохранения автоматически переведет все иностранные языки, активированные в модуле для данного продукта.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Модуль Deepl Translator не имеет ключа API, пожалуйста, введите ключ API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Модуль Reqser.com Deepl Translator не активирован, пожалуйста, активируйте модуль в разделе Module->System Module');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Модуль Reqser.com Deepl Translator не имеет связи!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'Соединение с Reqser.com проверяется, пожалуйста, подождите.');