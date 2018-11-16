<?php

#Caminhos absolutos
$pastaInterna="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'library/css/');
define('DIRJS',DIRPAGE.'library/js/');

#Acesso ao db
define('HOST',"localhost");
define('DB',"db_help_mitryus");
define('USER',"root");
define('PASS',"");

#Outras informações
define("SITEKEY","6LerOXsUAAAAABvE3ljacY7O6WxBkwPWzzBED669");
define("SECRETKEY","6LerOXsUAAAAAAtB2L17pvpKpzft5Gvqs8HTNnFC");

?>