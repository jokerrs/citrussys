<?php

namespace app;
class Router
{
    public static string $rootDir;
    protected static array $routes;

    /**
     * Router constructor.
     */
    public function __construct($rootDir)
    {
        self::$rootDir = $rootDir;
    }

    public static function get($route, $function)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            return;
        }
        self::request($route, $function);
    }

    public static function post($route, $function)
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            return;
        }
        self::request($route, $function);
    }

    public static function request($route, $function)
    {
        self::$routes[$route] = $function;
    }

    public static function view($view)
    {
        require_once self::$rootDir . "/views/$view.php";
    }

    protected static function resolve()
    {
        // taking the first part of the requested uri
        $uri = explode('?', $_SERVER['REQUEST_URI']);
        //checking if the route exist, before we call it, if doesn't exist, we will call 404
        if (!array_key_exists($uri[0], self::$routes)) {
            self::view('404') & die();
        }
        $function = self::$routes[$uri[0]];
        if (is_string($function)) {
            return self::view($function);
        }
        return $function();
    }

    public static function run(): void
    {
        self::resolve();
    }
}