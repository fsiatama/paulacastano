<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicacion
 */
require 'lib/config.php';
require 'lib/Helpers.php';

//Library
require '../vendor/autoload.php';
require 'lib/Request.php';
require 'lib/Inflector.php';
require 'lib/Response.php';
require 'lib/View.php';
require 'lib/Lang.php';

//Llamar al controlador indicado

if (empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];
}

$request = new Request($url);
$request->execute();