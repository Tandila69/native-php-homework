<?php

include_once "templates/request.php";
include_once "templates/response.php";
include_once "templates/index.php";
require 'templates/Router.php';

$path = parse_url( trim( $_SERVER['REQUEST_URI'], '/' ), PHP_URL_PATH);

//echo $path;

$router = new Router;
$router->get('', 'templates/views/default.php');
$router->get('page1', 'templates/views/page1.php');
$router->get('page2', 'templates/views/page2.php');
require $router->run($path);

?>
