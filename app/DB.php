<?php

namespace App;
use PDO;
use PDOException;

class DB
{
    protected static PDO $instance;
    public static function getInstance()
    {
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO("mysql:host=".$_ENV['DBHOST'].";dbname=".$_ENV['DBNAME'], $_ENV['DBUSERNAME'], $_ENV['DBPASSWORD']);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
            }catch (PDOException $e){
                echo $e->getMessage();
            }
            return self::$instance;
        }
        return "Something went wrong";
    }
}