<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;
use Source\Core\Session;



$session = new Session();
$route = new Router(url("/"), ":");

$route->namespace("Source\App");

$route->group(null);
$route->get("/", "Web:home");
$route->get("/contadorcaracteres", "Web:charCounter");


/**
* EXECUTE THE ROUTE
*/
$route->dispatch();

/**
* ERROR REDIRECT
*/
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();