<?php

namespace app\Controllers;
use app\Models\Products;
use app\Models\Users;

class ProductsController extends Controller
{

    public static function showHomePage(){
        $new = new Products();
        $params = $new->all();
        return self::view('homepage', $params);
    }
}