<?php
/*
*Desarrollado por thinksoft
*http://thinksoft.com.mx
*info@thinksoft.com.mc
*Teléfono: 3-15-61-63
*/
define('TITULO', 'brainti');
define('RUTA_HOME', '/brainti_');
define('PROTOCOLO', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://");
define('DOMINIO', $_SERVER['HTTP_HOST']);
define('URL', PROTOCOLO.DOMINIO);
define('RUTA_BRAINTI',URL.RUTA_HOME);
?>