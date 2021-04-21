<?php

namespace app\Controllers;
use app\Models\Comments;
use app\Models\Products;
use app\Models\Users;

class ProductsController extends Controller
{

    public static function showHomePage(): void
    {
        $products = new Products();
        $comments = new Comments();
        self::view('homepage', $products->all(), $comments->getCommentsByProductID(0));
    }

    public static function showProduct($slug): void
    {
        $products = new Products();
        $comments = new Comments();
        $product = $products->where(['slug' => $slug], 1);
        if(isset($product['error'])){
            self::view('404');
        }
        $comments = $comments->getCommentsByProductID($product['id']);
        self::view('product',$product , $comments);
    }
}