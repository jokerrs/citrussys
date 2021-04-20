<?php

namespace app\Controllers;
use app\Models\Products;
use app\Models\Users;

class ProductsController extends Controller
{

    public static function showHomePage(){
        $new = new Products();
        return self::view('homepage', $new->all());
    }

    public static function showProduct($slug)
    {
        $new = new Products();
        return self::view('product', $new->where('slug', $slug, 1));
    }
}