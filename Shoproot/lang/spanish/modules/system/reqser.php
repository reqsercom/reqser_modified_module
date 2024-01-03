<?php
/* -----------------------------------------------------------------------------------------
   Automated Translated by Reqser.com using Modified Modul Version 2.4 on the 18.12.4023
   ---------------------------------------------------------------------------------------*/


/***********************************************************
* file: translations_deepl.php
* path: /lang/spanish/modules/system/
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
define('MODULE_SYSTEM_REQSER_TITLE', 'Traducciones autom&aacute;ticas DeepL v&iacute;a <i>Reqser.</i>com, m&oacute;dulo versi&oacute;n %s<br />- construido para <i>Reqser</i>.com -<br />&copy; <a href="http://www.revilonetz.de/kontakt" target="_blank" title="Kontaktiere noRiddle" style="color:#02afc3;">noRiddle</a> y &copy; <a href="https://www.reqser.com" target="_blank" title="Kontaktiere Reqser" style="color:#02afc3;">Reqser.com</a> (07-2023 - ' . date('m-Y') . ')');
define('MODULE_SYSTEM_REQSER_DESCRIPTION', '
<a href="https://www.reqser.com" target="_blank"><img src="images/reqser_modul/modul_logo.png" border=0 width="400px"></a></br> M&oacute;dulo del sistema para la activaci&oacute;n y configuraci&oacute;n de traducciones a trav&eacute;s de <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>');
define('MODULE_SYSTEM_REQSER_STATUS_TITLE', '<h2>Configuraci&oacute;n b&aacute;sica</h2>&iquest;Activar m&oacute;dulo?');
define('MODULE_SYSTEM_REQSER_STATUS_DESC', '');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_TITLE', 'Solicitar clave API');
define('MODULE_SYSTEM_REQSER_REQSER_API_KEY_DESC', 'Aqu&iacute; puede introducir la clave API de <i>Reqser.com</i>. Se muestra cuando se conecta a Modificado en Reqser. <a href="https://www.reqser.com/translation/new-website/Modified" target="_blank" title="Direkt Link">&amp;raquo Enlace directo aqu&iacute;</a> ');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_TITLE', 'Ficha de seguridad temporal');
define('MODULE_SYSTEM_REQSER_TEMP_SHOP_TOKEN_DESC', 'Token de seguridad temporal para consultas externas a la tienda.<br /><span  class="alrt">&iexcl;Se asigna autom&aacute;ticamente!</span>');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_TITLE', 'Validez de la ficha de seguridad temporal');
define('MODULE_SYSTEM_REQSER_TST_VALID_UNTIL_DESC', 'El token de seguridad temporal es v&aacute;lido hasta (ver m&aacute;s abajo).<br />Cuando haya caducado, se crear&aacute; uno nuevo a petici&oacute;n de una fuente externa y entonces se mostrar&aacute; aqu&iacute;.');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_TITLE', '<hr /><h2>Tablas de idiomas</h2>&iquest;Dar acceso a Reqser.com a todas las columnas de la tabla compartida?');
define('MODULE_SYSTEM_REQSER_ALLOW_ALL_ROW_ACCESS_DESC', '"S&iacute;" da acceso a Reqser a todas las entradas de columna de las tablas liberadas, un "No" puede dar lugar a errores con versiones antiguas de la tienda o cuando se utilizan plantillas no est&aacute;ndar.');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_TITLE', 'Tablas de la base de datos');
define('MODULE_SYSTEM_REQSER_TABLES_TO_TRANSL_DESC', 'Tablas est&aacute;ndar de la base de datos que deben traducirse.');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_TITLE', 'Otras tablas de la base de datos');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_DESC', 'Seleccione aqu&iacute; las tablas de la base de datos que desea traducir');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_TITLE', 'Otras tablas de la base de datos (no disponibles para la selecci&oacute;n anterior)');
define('MODULE_SYSTEM_REQSER_MORE_TABLES_ADD_DESC', 'Introduzca aqu&iacute; otras tablas de la base de datos que desee traducir, separadas por comas.<br />(Para ampliaciones con nuevas tablas "est&aacute;ndar no modificadas")');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_TITLE', 'Excluir mesas');
define('MODULE_SYSTEM_REQSER_LESS_TABLES_DESC', 'Introduzca aqu&iacute; las tablas que deben excluirse de las traducciones, separadas por comas.<br />(S&oacute;lo es necesario si se han seleccionado anteriormente todas las tablas est&aacute;ndar y se desea excluir algunas de ellas).');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_TITLE', '&iquest;Traducir de qu&eacute; idioma?');
define('MODULE_SYSTEM_REQSER_FROM_WHICH_LANG_DESC', '&iquest;A partir de qu&eacute; lengua debe hacerse la traducci&oacute;n?');
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_TITLE', '&iquest;A qu&eacute; idiomas puedo traducir? ' . draw_tooltip('Puedes a&ntilde;adir m&aacute;s idiomas en <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.'));
define('MODULE_SYSTEM_REQSER_INTO_WHICH_LANGS_DESC', '&iquest;A qu&eacute; idiomas debe traducirse?');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_TITLE', 'Por defecto, se utiliza el ingl&eacute;s de EE.UU.');
define('MODULE_SYSTEM_REQSER_INTO_ENGLISH_BRITISH_DESC', '&iquest;Prefiere la ortograf&iacute;a brit&aacute;nica?<br />S&iacute; = brit&aacute;nico / No = EE.UU.');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_TITLE', '<hr /><h2>Otros ajustes</h2>&iquest;Deber&iacute;a a&ntilde;adirse un nuevo idioma a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>?');
define('MODULE_SYSTEM_REQSER_ADD_LANGUAGE_ALLOWED_DESC', 'Con este ajuste en "S&iacute;", se pueden a&ntilde;adir nuevos idiomas a <i><a href="https://reqser.com/" target="_blank">reqser.com</i></a>.<br />Con "No", el idioma ya debe existir en el sistema de la tienda y el idioma debe estar activado en este m&oacute;dulo.<br />Crear idioma en la tienda: <a href="' . DIR_WS_ADMIN . FILENAME_LANGUAGES . '">&amp;raquo &iquest;Crear idioma en la tienda?</a> &iexcl;&iexcl;&nbsp;&nbsp;<span class="alrt">!! El nuevo idioma s&oacute;lo est&aacute; disponible en la tienda despu&eacute;s de 24-48 horas. !!</span><br />A continuaci&oacute;n, marque aqu&iacute; como idioma a traducir');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_TITLE', '&iquest;Traducir los archivos de idioma del servidor?' . draw_tooltip('Se consultan y traducen todos los archivos del servidor</br>Esto tambi&eacute;n se aplica a los archivos de idioma de los m&oacute;dulos y extensiones. Se regeneran todos los archivos de idioma, incluidos los idiomas existentes.<br />Por defecto, los textos en idiomas extranjeros existentes en el Reqser se adoptan y no se traducen de nuevo, pero esto se puede cambiar en la configuraci&oacute;n del Reqser.'));
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_DESC', 'Sin archivos de idioma, no funciona ning&uacute;n idioma extranjero en la tienda y &iexcl;hay una p&aacute;gina "en blanco"!');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_TITLE', '&iquest;Transferencia autom&aacute;tica de archivos de idiomas?');
define('MODULE_SYSTEM_REQSER_LANGUAGE_FILES_SETTING_DESC', '&iquest;Deben transferirse autom&aacute;ticamente los archivos de idioma traducidos a tu tienda o debe seleccionarse manualmente cada archivo de idioma en Reqser?<br />S&iacute; = transferir archivos de idioma autom&aacute;ticamente / No = transferir manualmente');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_TITLE', '<hr /><h2>Seguridad</h2>&iquest;Registrar los accesos a la API?');
define('MODULE_SYSTEM_REQSER_PROTOCOL_ACC_DESC', '&iquest;Deben registrarse los accesos a la API?<br />(Los registros se encuentran en <i>/api/reqser/logs/</i> ).');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_TITLE', '&iquest;Pruebas en el navegador?');
define('MODULE_SYSTEM_REQSER_BROWSER_TEST_DESC', '&iquest;Probar en el navegador sin enviar cabeceras?<br />&iexcl;&iexcl;&iexcl;<span class="alrt">!!! Debe desactivarse en el funcionamiento en directo de la API !!!</span>');
define('MODULE_SYSTEM_REQSER_API_KEY_WRONG_ERR', 'La "Reqser API key" guardada aqu&iacute; en el m&oacute;dulo no coincide con la guardada en <i>reqser.</i> com.<br />Inicie sesi&oacute;n en <i>reqser</i>.com y compruebe la clave API o, si es necesario, recup&eacute;rela de nuevo y gu&aacute;rdela aqu&iacute;.');
define('MODULE_SYSTEM_REQSER_API_KEY_SUCCESS', 'Clave API almacenada correctamente');
define('MODULE_SYSTEM_REQSER_API_KEY_EMPTY_ERR', 'No se ha introducido ninguna clave API. Por favor, inicie sesi&oacute;n en <i>reqser.</i> com y obtenga la clave API para este sitio web y gu&aacute;rdela aqu&iacute; en el m&oacute;dulo.');
define('MODULE_SYSTEM_REQSER_CURL_ERR', 'ERROR cURL:<br />%s');
define('MODULE_SYSTEM_REQSER_INTO_LANGS_EMPTY_ERR', 'No se ha seleccionado ning&uacute;n idioma para traducir');
define('MODULE_SYSTEM_REQSER_IWL_IN_FWL_ERR', '"&iquest;Traducir a qu&eacute; idiomas?" no debe contener un idioma seleccionado en "&iquest;Traducir desde qu&eacute; idioma?".');