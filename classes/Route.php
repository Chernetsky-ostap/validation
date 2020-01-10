<?php

class Route
{
    public static array $routes = [];

    public static function set($route, $function) : void
    {
        self::$routes[] = $route;

        if (strtok($_SERVER["REQUEST_URI"],'?') == $route) {
            call_user_func($function);
        }
    }
}