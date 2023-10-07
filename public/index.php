<?php
session_start();

use Core\Router;

const BASE_PATH = __DIR__.'/../';
require BASE_PATH . 'Core/functions.php';


spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});
require base_path('bootstrap.php');
//require base_path('Core/router.php');


$router = new Router();

#load all routes from file routes.php into Router's routes table.
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

#if '_method' parameter is defined then use given method else use default method
$method = $_POST['_methodx'] ?? $_SERVER['REQUEST_METHOD'];

#match a requested URI and HTTP method to a registered route
$router->route($uri, $method);
