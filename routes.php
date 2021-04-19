<?php

use app\Router;

Router::get('/about-us', function (){
    echo 'about-us';
});
Router::get('/', function (){
    echo 'Home Page';
});