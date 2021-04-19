<?php

namespace app;
class Router
{

    public static function get($route, $function): void
    {
        $uri = explode('?', $_SERVER['REQUEST_URI']);
        if($uri[0] === $route){
            $function->__invoke();
        }

    }

    public static function post($route, $function): void
    {
    }
}