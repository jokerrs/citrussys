<?php

namespace app\Models;

use app\DB;

class Model extends DB implements ModelInterface
{
    public function all()
   {
       $class = strtolower(substr(get_class($this), 11));
       return DB::getInstance()->query("SELECT * FROM $class");
    }
}