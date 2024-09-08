<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php-exercise/' => "./controllers/index.php",
    '/php-exercise/about' => './controllers/about.php',
    '/php-exercise/notes' => './controllers/notes.php',
    '/php-exercise/contact' => './controllers/contact.php'
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "./views/{$code}.php";

    die();
}

routeToController($uri, $routes);
