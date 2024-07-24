<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 3.4 on the 24.07.2024
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/portuguese/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Ferramentas de IA para tradu&ccedil;&otilde;es e SEO atrav&eacute;s de Reqser <i>.</i>com, vers&atilde;o do m&oacute;dulo %s<br />- constru&iacute;do para <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> e &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> ' . date('m-Y') . '(07-2023 - )');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> M&oacute;dulo de sistema para a liga&ccedil;&atilde;o com DeepL, OpenAI e Neuroflash atrav&eacute;s de <i><a href="https://reqser.com/" target="_blank">reqser.com</a></i>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Defini&ccedil;&otilde;es b&aacute;sicas</h2>Ativar o m&oacute;dulo?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Reqser a chave da API');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Pode introduzir a chave API de <i>reqser.com</i> aqui. &Eacute; apresentado quando se liga ao Modified no reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Liga&ccedil;&atilde;o direta aqui</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Token de seguran&ccedil;a tempor&aacute;rio');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token de seguran&ccedil;a tempor&aacute;rio para consultas externas &agrave; loja.<br /><span  class="alrt">&Eacute; atribu&iacute;do automaticamente !</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validade do token de seguran&ccedil;a tempor&aacute;rio');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'O c&oacute;digo de seguran&ccedil;a tempor&aacute;rio &eacute; v&aacute;lido at&eacute; (ver abaixo).<br />Quando expirar, ser&aacute; criado um novo, a pedido de uma fonte externa, que ser&aacute; ent&atilde;o apresentado aqui.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tabelas de l&iacute;nguas</h2>Dar a reqser.com acesso a todas as colunas da tabela partilhada?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', 'A op&ccedil;&atilde;o "Sim" d&aacute; ao reqser acesso a todas as entradas de coluna das tabelas libertadas; a op&ccedil;&atilde;o "N&atilde;o" pode dar origem a erros com vers&otilde;es antigas da loja ou quando se utilizam modelos n&atilde;o normalizados.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tabelas de bases de dados');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tabelas de bases de dados standard a traduzir.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Outras tabelas da base de dados');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Seleccione aqui outras tabelas de bases de dados a traduzir');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Outras tabelas de bases de dados (n&atilde;o dispon&iacute;veis para sele&ccedil;&atilde;o acima)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Introduzir aqui outras tabelas de bases de dados a traduzir, separadas por v&iacute;rgulas.<br />(Para extens&otilde;es com novas tabelas "standard n&atilde;o modificadas")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Excluir tabelas');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Introduza aqui as tabelas que devem ser exclu&iacute;das das tradu&ccedil;&otilde;es, separadas por v&iacute;rgulas.<br />(Apenas necess&aacute;rio se todas as tabelas standard estiverem seleccionadas acima e algumas delas tiverem de ser exclu&iacute;das).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', 'Traduzir a partir de que l&iacute;ngua?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', 'A partir de que l&iacute;ngua deve ser efectuada a tradu&ccedil;&atilde;o?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', 'Para que l&iacute;nguas posso traduzir? ' . draw_tooltip('Podem ser adicionadas outras l&iacute;nguas em <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', 'Para que l&iacute;nguas devem ser traduzidas?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'O ingl&ecirc;s &eacute; utilizado como ingl&ecirc;s dos EUA por predefini&ccedil;&atilde;o');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', 'Prefere a ortografia brit&acirc;nica?<br />Sim = brit&acirc;nico / N&atilde;o = EUA');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Outras defini&ccedil;&otilde;es</h2>Deve ser permitida a adi&ccedil;&atilde;o de uma nova l&iacute;ngua a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a> ?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Com esta defini&ccedil;&atilde;o em "Sim", podem ser adicionadas novas l&iacute;nguas a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Com "N&atilde;o", a l&iacute;ngua j&aacute; tem de existir no sistema da loja e tem de ser activada neste m&oacute;dulo.<br />Criar l&iacute;ngua na loja: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo Criar l&iacute;ngua na loja ?</a> &nbsp;&nbsp;<span class="alrt">!! A nova l&iacute;ngua s&oacute; estar&aacute; dispon&iacute;vel na loja ap&oacute;s 24-48 horas. !!</span><br />Depois marque aqui a l&iacute;ngua a traduzir');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '' . draw_tooltip('Traduzir ficheiros de l&iacute;nguas no servidor? Todos os ficheiros no servidor s&atilde;o consultados e traduzidos</br>Isto tamb&eacute;m se aplica aos ficheiros de l&iacute;nguas dos m&oacute;dulos e extens&otilde;es. Todos os ficheiros de l&iacute;nguas s&atilde;o gerados de novo, incluindo as l&iacute;nguas existentes.<br />Por defeito, os textos de l&iacute;nguas estrangeiras existentes no reqser s&atilde;o adoptados e n&atilde;o traduzidos de novo, mas isto pode ser alterado nas defini&ccedil;&otilde;es do reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Sem ficheiros de l&iacute;nguas, nenhuma l&iacute;ngua estrangeira funciona na loja e h&aacute; uma p&aacute;gina "branca"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', 'Transferir ficheiros de idiomas automaticamente?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', 'Os ficheiros de l&iacute;nguas traduzidos devem ser transferidos automaticamente para a sua loja ou cada ficheiro de l&iacute;ngua deve ser selecionado manualmente no reqser?<br />Sim = transferir ficheiros de l&iacute;nguas automaticamente / N&atilde;o = transferir manualmente');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Seguran&ccedil;a</h2>Registar os acessos &agrave; API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', 'Os acessos &agrave; API devem ser registados?<br />(Os registos podem ser encontrados em <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_TITLE', 'Impedir a edi&ccedil;&atilde;o da l&iacute;ngua de base?');
define('MODULE_SYSTEM_REQSER_DISABLE_BASE_LANGUAGE_EDIT_DESC', 'A edi&ccedil;&atilde;o da l&iacute;ngua de base deve ser permitida para que a otimiza&ccedil;&atilde;o dos textos para os motores de busca possa ser feita na l&iacute;ngua de base.<br />Sim = Impedir a edi&ccedil;&atilde;o / N&atilde;o = Permitir a edi&ccedil;&atilde;o');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_TITLE', 'Dever&atilde;o os termos "scripte" e "iframe" ser retirados dos textos?');
define('MODULE_SYSTEM_REQSER_SANITIZE_STRINGS_DESC', 'Se, por exemplo, forem inclu&iacute;dos nos textos v&iacute;deos do YouTube ou anima&ccedil;&otilde;es, estas etiquetas n&atilde;o devem ser removidas. Caso contr&aacute;rio, os textos que editamos podem perder a sua funcionalidade.<br />Sim = Remover / N&atilde;o = N&atilde;o remover');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', 'Testar no browser ?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', 'Testar no browser sem enviar cabe&ccedil;alhos?<br /><span class="alrt">!!! Deve ser desativado no funcionamento em direto da API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'A "Chave da API do reqser" guardada aqui no m&oacute;dulo n&atilde;o corresponde &agrave; guardada em <i>reqser.com</i>.<br />Inicie sess&atilde;o em <i>reqser</i>.com e verifique a chave da API ou, se necess&aacute;rio, recupere-a novamente e guarde-a aqui.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Chave API armazenada com sucesso');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'N&atilde;o foi introduzida nenhuma chave API! Inicie sess&atilde;o em <i>reqser.com</i> e obtenha a chave API para este s&iacute;tio Web e guarde-a aqui no m&oacute;dulo.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'cURL ERROR:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'Reqser.com DeepL M&oacute;dulo nenhuma l&iacute;ngua a traduzir selecionada !');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"Traduzir para que l&iacute;nguas?" n&atilde;o pode conter uma l&iacute;ngua que tenha sido selecionada em "Traduzir a partir de que l&iacute;ngua?".');
define('MODULE_SYSTEM_REQSER_TABLE_NOT_EXIST_ERR', 'A tabela <b>"%s"</b> adicionada manualmente n&atilde;o foi encontrada na base de dados.' . MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE . ' Por favor, verifique as defini&ccedil;&otilde;es de " "!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE', 'O m&oacute;dulo DeepL do reqser.com traduzir&aacute; automaticamente todas as l&iacute;nguas estrangeiras activadas no m&oacute;dulo para este produto depois de o guardar.');
define('MODULE_SYSTEM_REQSER_ADMIN_MISSING_API_KEY', 'O m&oacute;dulo Reqser.com Deepl Translator n&atilde;o tem chave API, introduza uma chave API');
define('MODULE_SYSTEM_REQSER_ADMIN_INSTALLED_NOT_ACTIVATED', 'O m&oacute;dulo Reqser.com Deepl Translator n&atilde;o est&aacute; ativado, por favor active o m&oacute;dulo em M&oacute;dulo->M&oacute;dulo de Sistema');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_MISSING_CONNECTION', 'O m&oacute;dulo Reqser.com Deepl Translator n&atilde;o tem qualquer liga&ccedil;&atilde;o!');
define('MODULE_SYSTEM_REQSER_ADMIN_MESSAGE_CONNECTION_LOADING', 'A liga&ccedil;&atilde;o reqser.com est&aacute; a ser verificada, por favor aguarde.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_SETTINGS_LOADING', 'As defini&ccedil;&otilde;es de SEO est&atilde;o a ser carregadas, aguarde.');
define('MODULE_SYSTEM_REQSER_ADMIN_CATEGORIES_SEO_FORM_PARAMS_MISSING', 'As suas entradas n&atilde;o est&atilde;o completas, por favor verifique:');