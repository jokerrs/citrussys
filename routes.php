<?php

use app\Controllers\Controller;
use app\Router;
new Router(__DIR__);

//Router::post('/', [Controller::class, 'testp']);
//Router::get('/test', function (){
//    print_r(Router::$routes);
//});
//Router::get('/testa', function (){
//    print_r(Router::$routes);
//});

Router::get('/', 'homepage');

Router::get('/product/([a-zA-Z]*)',function ($product){
    print_r($product);
});

Router::get('/admin/comments/([a-zA-Z]*)',function ($comments){
    print_r($comments);
});

Router::run();