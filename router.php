<?php

$url = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = [
    '/' => 'controller/index.php',
    '/about' => 'controller/index.php',
    '/contact' => 'controller/contact.php',
    '/login' => 'controller/login.php',
    '/register' => 'controller/register.php',
];

require $routes[$url] ?? 'controller/404.php';
