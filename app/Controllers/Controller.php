<?php

namespace app\Controllers;

use app\Router;

class Controller
{
    public static function view($view,?array $params = null): void
    {
        require_once Router::$rootDir ."/views/$view.php";
    }
}