<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/chinese/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', '通过 Reqser<i>.</i>com 进行翻译和搜索引擎优化的人工智能工具，模块版本%s<br />- 为 Reqser<i>.com</i>构建 -<br /><a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;"></a> <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;"></a> ' . date('m-Y') . '&copy; noRiddle 和 &copy; Reqser.com (07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
<i><a href="https://reqser.com/" target="_blank">通过</i> <i>reqser.com</i>与 DeepL、OpenAI 和 Neuroflash 连接的系统模块<i></a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>基本设置</h2>激活模块？');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'reqser API 密钥');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', '您可以在此处输入来自<i>Reqser.com</i>的 API 密钥。在 Reqser 上连接 Modified 时显示。<a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo 这里的直接链接</a>');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', '临时安全令牌');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', '用于外部查询商店的临时安全令牌。<br /><span  class="alrt">自动分配 !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', '临时安全令牌的有效性');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', '临时安全令牌有效期至（见下文）。<br />过期后，将根据外部请求创建一个新的安全令牌，并在此处显示。');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>语言表</h2>允许 Reqser.com 访问共享表的所有列？');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '是 "允许 reqser 访问已发布表格的所有列项，"否 "可能会导致旧版本或使用非标准模板时出错。');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', '数据库表格');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', '要翻译的标准数据库表。');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', '更多数据库表格');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', '在此处选择更多需要翻译的数据库表');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', '其他数据库表（不供上述选择）');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', '在此输入要翻译的其他数据库表，以逗号分隔。<br />(适用于带有新的 "非修改标准 "表的扩展程序）');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', '不包括表格');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', '在此处输入要排除翻译的表格，用逗号分隔。<br />(只有在上面选择了所有标准表格，且其中一些表格要排除在外时才需要）。');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '从哪种语言翻译？');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', '应从哪种语言进行翻译？');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '我可以翻译成哪些语言？' . draw_tooltip('可以在<i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> 添加其他语言。'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', '应翻译成哪些语言？');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', '默认使用美国英语');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', '您喜欢英式拼写吗？<br />是 = 英国 / 否 = 美国');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>进一步设置</h2>是否允许在<i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> 中添加新语言？');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', '<a href="https://reqser.com/" target="_blank"></a> 设置为 "是 "时，可在<i>reqser.com</i>中添加新语言。<br />如果设置为 "否"，商店系统中必须已经存在该语言，并且该语言必须在该模块中激活。<br />在商店中创建语言：<a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">在商店中创建语言？</a> &nbsp;&nbsp;<span class="alrt">!!新语言只有在 24-48 小时后才能在商店中使用。!!</span><br />然后将此处标记为要翻译的语言');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('翻译服务器上的语言文件？ 查询并翻译服务器上的所有文件</br>这也适用于模块和扩展程序的语言文件。所有语言文件都会重新生成，包括现有语言。<br />默认情况下，Reqser 中现有的外语文本会被采用，而不会被新翻译，但可以在 Reqser 设置中进行更改。'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', '如果没有语言文件，商店里就无法使用任何外语，页面也是 "白色 "的！');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '自动传输语言文件？');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', '翻译好的语言文件应该自动传输到您的商店，还是应该在 reqser 中手动选择每个语言文件？<br />是 = 自动传输语言文件 / 否 = 手动传输');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>安全性</h2>记录 API 访问？');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', '是否应记录 API 访问？<br />(日志可在<i>/api/reqser/logs/</i>）。');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', '防止编辑基本语言？');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', '应允许编辑基本语言，以便用基本语言对文本进行搜索引擎优化。<br />是 = 阻止编辑 / 否 = 允许编辑');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', '是否应从文本中删除 "scripte "和 "iframe"？');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', '例如，如果文本中包含 YouTube 视频或动画，则不应删除这些标签。否则，我们编辑的文本可能会失去功能。<br />是 = 删除 / 否 = 不删除');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', '在浏览器中测试？');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', '在不发送头信息的情况下在浏览器中进行测试？<br /><span class="alrt">!!!必须在实时运行 API 时停用！！！</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '模块中存储的 "Reqser API 密钥 "与<i>reqser.com</i>中存储的密钥不一致。<br />请登录<i>reqser</i>.com 并检查 API 密钥，如有必要，请重新获取并保存在这里。');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', '成功存储 API 密钥');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', '未输入 API 密钥！请登录<i>reqser.com</i>，获取该网站的 API 密钥，并将其保存在模块中。');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR：<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'reqser.com DeepL 模块没有选择要翻译的语言！');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"翻译成哪种语言？"不得包含在 "从哪种语言翻译？"中选择的语言。');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', '数据库中找不到手动添加的表<b>"%s"</b>。' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '请检查""的设置！');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'Reqser.com DeepL 模块将在保存后自动翻译该产品在模块中激活的所有外语。');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'Reqser.com Deepl Translator 模块没有 API 密钥，请输入 API 密钥');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'Reqser.com Deepl Translator 模块未激活，请在模块->系统模块下激活该模块');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'Reqser.com Deepl Translator 模块没有连接！');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', '正在检查 Reqser.com 连接，请稍候。');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', '搜索引擎优化设置正在加载中，请稍候。');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', '您的条目不完整，请检查：');