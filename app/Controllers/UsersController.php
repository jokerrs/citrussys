<?php

namespace app\Controllers;

use app\Models\Comments;
use app\Models\Users;

class UsersController extends Controller
{
    public static function login()
    {
        $result = Users::userLogin($_POST['username'], $_POST['password']);
        if ($result['result'] === 'success') {
            $_SESSION['uid'] = $result['user_id'];
            header("Location: /admin");
        } else {
            self::view('admin/login', $result);
        }
    }

    public static function logout()
    {
        session_destroy();
        header("Location: /");
    }

    public static function admin(){
        $comments = new Comments();
        self::view('admin/comments', $comments->where(['approved' => 0]));
    }
}