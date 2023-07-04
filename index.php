<?php

$routes = [
    '/' => 'HomeController@home',
    '/about' => 'AboutController@about',
    '/contact' => 'ContactController@contact',
];
$url = $_SERVER['REQUEST_URI'];

if (array_key_exists($url, $routes)) {
    $dividindoRota = explode('@', $routes[$url]);
    $controller = $dividindoRota[0];
    $metodo = $dividindoRota[1];

    require_once 'controllers/' . $controller . '.php';

    $controllerObj = new $controller();
    $controllerObj->$metodo();

    return;
}

print "Erro: página não encontrada";
