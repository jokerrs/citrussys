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


Router::get('/login', 'admin/login');
Router::post('/login', [UsersController::class, 'login']);

Router::post('/logout', [UsersController::class, 'logout']);
Router::get('/logout', [UsersController::class, 'logout']);
Router::get('/admin', 'admin/comments');

Router::run();