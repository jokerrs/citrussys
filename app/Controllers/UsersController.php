<?php

namespace app\Controllers;

use app\Models\Users;

class UsersController extends Controller
{
    public static function login()
    {
        $result = Users::userLogin($_POST['username'], $_POST['password']);
        if ($result['result'] === 'success') {
            $_SESSION['uid'] = $result['user_id'];
        } else {
            self::view('admin/login', $result);
        }
    }

    public static function logout()
    {
        session_destroy();
        header("Location: /");
    }
}