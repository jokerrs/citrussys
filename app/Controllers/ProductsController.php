<?php

namespace app\Controllers;
use app\Models\Comments;
use app\Models\Products;
use app\Models\Users;

class ProductsController extends Controller
{

    public static function showHomePage(){
        $products = new Products();
        $comments = new Comments();
        return self::view('homepage', $products->all(), $comments->getCommentsByProductID(0));
    }

    public static function showProduct($slug)
    {
        $products = new Products();
        $comments = new Comments();
        $product = $products->where(['slug' => $slug], 1);
        if(isset($product['error'])){
            return self::view('404');
        }
        $comments = $comments->getCommentsByProductID($product['id']);
        return self::view('product',$product , $comments);
    }
}