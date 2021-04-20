<?php

namespace app\Controllers;
use app\Models\Comments;
use app\Models\Products;
use app\Models\Users;

class ProductsController extends Controller
{

    public static function showHomePage(){
        $products = new Products();
        return self::view('homepage', $products->all());
    }

    public static function showProduct($slug)
    {
        $products = new Products();
        $comments = new Comments();
        $product = $products->where(['slug' => $slug], 1);
        $comments = $comments->getProductComments($product['id']);
        return self::view('product',$product , $comments);
    }
}