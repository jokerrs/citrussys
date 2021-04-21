<?php

use app\Controllers\CommentsController;
use app\Controllers\Controller;
use app\Controllers\ProductsController;
use app\Controllers\UsersController;
use app\Router;
new Router(__DIR__);

//Router::post('/', [Controller::class, 'testp']);
//Router::get('/test', function (){
//    print_r(Router::$routes);
//});
//Router::get('/testa', function (){
//    print_r(Router::$routes);
//});

Router::get('/', [ProductsController::class, 'showHomePage']);
Router::post('/comments', [CommentsController::class, 'create']);

Router::get('/products/([a-zA-Z0-9-]*)',function ($slug){
    ProductsController::showProduct($slug);
});

Router::run();