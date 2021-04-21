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

    public static function create(): void
    {
        $new = new Comments();
        if ($new->create($_POST)) {
            self::view('newcomment', ['success' => true]);
        }
        self::view('newcomment', ['success' => false]);
    }
    public static function approve($id): void
    {
        if(isset($_SESSION['uid'])){
            $approve = new Comments();
            $approve->update(['approved' => 1, 'approved_by' => $_SESSION['uid']], $id);
            header("Location: /admin");
        }
        header("Location: /login");
    }
}