<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.4 on the 18.12.4023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/korean/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', '<i>Reqser</i>.com을 통한 자동 심층 번역, 모듈 버전 %s<br />- <i>Reqser</i>.com용 빌드 -.<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> 및 &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br>
 <i><a href="https://reqser.com/" target="_blank">reqser.com을</i> 통한 번역 활성화 및 구성을 위한 시스템 모듈</a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>기본 설정</h2>모듈을 활성화하시겠습니까?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', '요청자 API 키');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', '여기에서 <i>Reqser.com의</i> API 키를 입력할 수 있습니다. Reqser에서 Modified에 연결할 때 표시됩니다. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;라쿠오 직접 링크는 여기</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', '임시 보안 토큰');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', '상점에 대한 외부 쿼리를 위한 임시 보안 토큰입니다.<br /><span  class="alrt">자동으로 할당됨 !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', '임시 보안 토큰의 유효 기간');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', '임시 보안 토큰은 (아래 참조)까지 유효합니다.<br />토큰이 만료되면 외부 소스의 요청에 따라 새 토큰이 생성되어 여기에 표시됩니다.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>언어 테이블</h2>Reqser.com에 공유 테이블의 모든 열에 대한 액세스 권한을 부여하시겠습니까?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"예"를 선택하면 릴리스된 테이블의 모든 열 항목에 Reqser가 액세스할 수 있으며, "아니요"를 선택하면 이전 상점 버전이나 비표준 템플릿을 사용할 때 오류가 발생할 수 있습니다.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', '데이터베이스 테이블');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', '번역할 표준 데이터베이스 테이블입니다.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', '추가 데이터베이스 테이블');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', '여기에서 번역할 추가 데이터베이스 테이블을 선택하세요.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', '기타 데이터베이스 테이블(위에서 선택할 수 없음)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', '여기에 번역할 데이터베이스 테이블을 쉼표로 구분하여 추가로 입력합니다.<br />(새로운 "수정되지 않은 표준" 테이블이 포함된 확장의 경우)');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', '테이블 제외');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', '여기에 번역에서 제외할 표를 쉼표로 구분하여 입력합니다.<br />(위에서 모든 표준 표를 선택하고 일부 표를 제외하려는 경우에만 필요함).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '어떤 언어로 번역하나요?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', '어떤 언어로 번역해야 하나요?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '어떤 언어로 번역할 수 있나요? ' . draw_tooltip('추가 언어는 <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>에서 추가할 수 있습니다.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', '어떤 언어로 번역해야 하나요?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', '영어는 기본적으로 미국 영어로 사용됩니다.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', '영국식 철자를 선호하시나요?<br />예 = 영국식 / 아니요 = 미국식');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>추가 설정</h2>새로운 언어를 <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>에 추가할 수 있도록 허용해야 하나요?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', '이 설정을 "예"로 설정하면 <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>에 새 언어를 추가할 수 있습니다.<br />"아니요"로 설정하면 언어가 이미 상점 시스템에 존재해야 하며 이 모듈에서 언어가 활성화되어 있어야 합니다.<br />상점에서 언어를 생성합니다: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;라쿠오 상점에서 언어 생성 ?</a> &nbsp;&nbsp;<span class="alrt">!! 새 언어는 24-48시간 후에 상점에서만 사용할 수 있습니다. !!</span><br />그런 다음 여기에 번역할 언어로 표시하세요.');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '서버에서 언어 파일을 번역하나요?' . draw_tooltip('서버의 모든 파일이 쿼리되고 번역됩니다</br>이는 모듈 및 확장 프로그램의 언어 파일에도 적용됩니다. 기존 언어를 포함하여 모든 언어 파일이 다시 생성됩니다.<br />기본적으로 Reqser의 기존 외국어 텍스트는 새로 번역되지 않고 채택되지만, Reqser 설정에서 이를 변경할 수 있습니다.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', '언어 파일이 없으면 상점에서 외국어가 작동하지 않고 "흰색" 페이지가 표시됩니다!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '언어 파일을 자동으로 전송하시나요?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', '번역된 언어 파일을 자동으로 상점으로 전송해야 하나요, 아니면 Reqser에서 각 언어 파일을 수동으로 선택해야 하나요?<br />예 = 언어 파일 자동 전송 / 아니요 = 수동 전송');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>보안</h2>API 액세스를 기록하시겠습니까?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'API 액세스를 기록해야 하나요?<br />(로그는 <i>/api/reqser/logs/에서</i> 찾을 수 있습니다).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', '브라우저에서 테스트 ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', '헤더를 보내지 않고 브라우저에서 테스트하시겠습니까?<br /><span class="alrt">!!! API의 실시간 작동에서 비활성화해야 합니다 !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', '여기 모듈에 저장된 "Reqser API 키"가 <i>reqser.com에</i> 저장된 키와 일치하지 않습니다.<br /><i>reqser</i>.com에 로그인하여 API 키를 확인하거나 필요한 경우 다시 검색하여 여기에 저장하세요.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'API 키가 성공적으로 저장되었습니다.');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'API 키를 입력하지 않았습니다! <i>reqser.com에</i> 로그인하여 이 웹사이트의 API 키를 받아 여기 모듈에 저장하세요.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', '컬 에러:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', '번역할 언어가 선택되지 않았습니다!');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"어떤 언어로 번역하시겠습니까?"에는 "어떤 언어에서 번역하시겠습니까?"에서 선택한 언어가 포함되어서는 안 됩니다.');