<?php

namespace routes;

class Router
{
    public function routes(): array
    {
        $routes = [
            '/' => 'HomeController@home',
            '/home' => 'HomeController@home',
            '/about' => 'AboutController@about',
            '/contact' => 'ContactController@contact',
        ];

        return $routes;
    }
}