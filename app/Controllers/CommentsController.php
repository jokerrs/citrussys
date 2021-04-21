<?php

namespace app\Controllers;

use app\Models\Comments;

class CommentsController extends Controller
{
    /**
     * Comments constructor.
     */
    public function __construct()
    {
    }

    public static function create(){
        $new = new Comments();
        if($new->create($_POST)) {
            return self::view('newcomment', ['success' => true]);
        }else{
            return self::view('newcomment', ['success' => false]);
        }
    }
}