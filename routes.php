<?php

use app\Controllers\Controller;
use app\Router;
new Router(__DIR__);

//Router::get('/', [Controller::class, 'testg']);
//Router::post('/', [Controller::class, 'testp']);
//Router::get('/test', function (){
//    print_r(Router::$routes);
//});
//Router::get('/testa', function (){
//    print_r(Router::$routes);
//});

Router::get('/', 'homepage');

Router::run();