<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/app/' => 'controllers/index.php',
    '/app/about' => 'controllers/about.php',
    '/app/contact' => 'controllers/contact.php',
    '/app/notes' => 'controllers/notes.php',
    '/app/note' => 'controllers/note.php'
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.view.php";

    die();
}

routeToController($uri, $routes);
