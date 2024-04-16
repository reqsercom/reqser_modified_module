<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.1 on the 09.04.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/japanese/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'reqser<i>.</i>comによるDeepLの自動翻訳、モジュールバージョン%s。<br /><i>- reqser</i>.com用にビルドします。<br />&copy;<a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a>および&copy;<a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">reqser.com</a>。(07-2023 -' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
<i><a href="https://reqser.com/" target="_blank">reqser.com</i>を介した翻訳の有効化と設定のためのシステムモジュール</a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>基本設定</h2>モジュールを起動しますか？');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'reqserのAPIキー');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', '<i>reqser.comの</i>APIキーを入力します。reqserでModifiedに接続する際に表示されます。<a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">直接リンクはこちら</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', '一時的なセキュリティ・トークン');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'ショップへの外部クエリ用の一時的なセキュリティトークン。<br /><span  class="alrt">自動的に割り当てられます !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', '一時セキュリティトークンの有効期限');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', '一時的なセキュリティー・トークンは（下記参照）まで有効です。<br />有効期限が切れると、外部からのリクエストにより新しいものが作成され、ここに表示されます。');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>言語テーブル</h2>reqser.comに共有テーブルのすべてのカラムへのアクセス権を与えますか？');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"はい "を選択すると、reqserはリリースされたテーブルのすべての列エントリにアクセスできるようになります。"いいえ "を選択すると、古いショップのバージョンや非標準のテンプレートを使用した場合にエラーが発生する可能性があります。');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'データベースのテーブル');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', '翻訳される標準データベーステーブル。');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'さらなるデータベース・テーブル');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', '翻訳するデータベーステーブルをここでさらに選択する');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'その他のデータベーステーブル（上記では選択不可）');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', '翻訳するデータベーステーブルをカンマで区切って入力してください。<br />(新しい "非修正標準 "テーブルを持つ拡張の場合)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'テーブルを除く');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'ここに翻訳から除外するテーブルをカンマで区切って入力します。<br />(上記ですべての標準テーブルが選択され、それらの一部が除外される場合にのみ必要です)。');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'どの言語から翻訳するのか？');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'どの言語から翻訳すべきですか？');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'どの言語に翻訳できますか？' . draw_tooltip('追加言語は<i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>で追加できます。'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'どの言語に翻訳すべきか？');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', '英語はデフォルトでUS英語');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'イギリスの綴りをご希望ですか？<br />はい＝英国 / いいえ＝米国');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>さらなる設定</h2>新しい言語を<i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>に追加することを許可しますか？');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'この設定を "はい "にすると、新しい言語を<i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> 。<br />いいえ "の場合、その言語はすでにショップシステムに存在し、このモジュールで有効化されている必要があります。<br />ショップに言語を作成する：<a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">ショップに言語を作成しますか？</a> &nbsp;&nbsp;<span class="alrt">!!新しい言語は24-48時間後にショップで利用可能になります。!!</span><br />翻訳する言語としてここをマークしてください。');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', 'サーバー上の言語ファイルを翻訳しますか？' . draw_tooltip('サーバー上のすべてのファイルが照会され、翻訳されます</br>これはモジュールと拡張機能の言語ファイルにも適用されます。既存の言語も含め、すべての言語ファイルが再生成されます。<br />デフォルトでは、reqserの既存の外国語テキストは採用され、新たに翻訳されませんが、reqser設定で変更できます。'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', '言語ファイルがない場合、ショップでは外国語は機能せず、「白い」ページが表示される！');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '言語ファイルを自動的に転送しますか？');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', '翻訳された言語ファイルは自動的にショップに転送されますか、それともreqserで各言語ファイルを手動で選択する必要がありますか？<br />はい = 言語ファイルを自動的に転送する / いいえ = 手動で転送する');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>セキュリティ</h2>APIアクセスのログを取るか？');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'APIアクセスはログに記録されるべきですか？<br />(ログは<i>/api/reqser/logs/</i>にあります）。');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'ブラウザでテスト？');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'ヘッダーを送信せずにブラウザでテスト？<br /><span class="alrt">!!!APIのライブ操作では非アクティブにする必要がある !!!</span>.');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'モジュールに保存されている "reqser APIキー "が、<i>reqser.comに</i>保存されているものと一致しません。<br /><i>reqser</i>.comにログインしてAPIキーを確認するか、必要であれば再度取得してここに保存してください。');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'APIキーの保存に成功');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'APIキーが入力されていません！<i>reqser.comに</i>ログインして、このウェブサイトのAPIキーを取得し、このモジュールに保存してください。');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR：<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'reqser.com DeepLモジュールに翻訳される言語が選択されていません！');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"どの言語に翻訳しますか？"には、"どの言語から翻訳しますか？"で選択された言語を含んではなりません。');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', '手動で追加したテーブル<b>"%s"</b>がデータベースに見つかりませんでした。' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . '" の設定を確認してください！');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'reqser.com DeepLモジュールは、保存後、この製品のモジュールで有効化されたすべての外国語を自動的に翻訳します。');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'reqser.comのDeepl TranslatorモジュールにはAPIキーがありません。');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'reqser.com Deepl Translator モジュールが有効になっていません。モジュール->システムモジュールの下でモジュールを有効にしてください。');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'reqser.com Deepl Translator モジュールには接続されていません！');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'reqser.comの接続をチェック中です。');