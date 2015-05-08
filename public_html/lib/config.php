<?php
session_start();

ini_set('display_errors', true);
error_reporting(E_ALL);

define("URL_RAIZ", "http://".$_SERVER['HTTP_HOST']."/");
define("URL_INGRESO", URL_RAIZ."main");

define("URL_EXT", URL_RAIZ."js/ext-3.4.0/");
define("EXT_TEMA", "xtheme-gray-extend.css");

define("PATH_RAIZ", "C:/wamp/www/paulacastano/public_html/");
define("PATH_APP", "C:/wamp/www/paulacastano/app/");
define("PATH_MODELS", PATH_APP."paulacastano/");
define("PATH_REPORTS", PATH_APP."rep/");
define("PATH_MEDIA", PATH_APP."media/");

define("DEFAULT_LANGUAGE", "es");

define("MAXREGEXCEL", 65000);
