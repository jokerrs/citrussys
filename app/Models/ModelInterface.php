<?php

namespace app\Models;

interface ModelInterface {
    public function all();
    public function where(string $column, $value, ?int $limit = null);
}