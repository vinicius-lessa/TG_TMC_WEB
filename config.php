<?php

$dir = "/FATEC/_GitFinal/TG_TMC_WEB"; //CAMINHO VINICIUS 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT', ROOT.$dir);
define('SITE_PATH', ROOT.$dir);
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].$dir);