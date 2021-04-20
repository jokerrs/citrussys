<?php

namespace app\Models;

use app\DB;

class Model extends DB implements ModelInterface
{
    public function all(): string
    {
        return get_class($this);
    }
}