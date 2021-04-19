<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    protected static PDO $instance;

    /**
     * @return PDO|string
     */
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . $_ENV['DBHOST'] . // DATABASE HOST
                    ";dbname=" . $_ENV['DBNAME'], //DATABASE NAME
                    $_ENV['DBUSERNAME'], // DATABASE USERNAME
                    $_ENV['DBPASSWORD'] // DATABASE PASSWORD
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            return self::$instance;
        }
        return "Something went wrong";
    }
}