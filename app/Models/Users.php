<?php

namespace app\Models;

class Users extends Model
{


    public function getUserByID($user_id): array
    {
        return $this->where(['id' => $user_id], 1);
    }

    public function getUserByUsername($username): array
    {
        return $this->where(['username' => $username], 1);
    }

    public static function userLogin(string $login, string $password): array
    {
        $u = new self();
        $user = $u->getUserByUsername($login);
        if (!empty($user['error'])) {
            return ['result' => 'error', 'error' => 'User Dont Exist'];
        }
        if (!password_verify($password, $user['password'])) {
            return ['result' => 'error', 'error' => 'Incorrect Password!'];
        }
        return ['result' => 'success', 'user_id' => $user['id']];
    }
}