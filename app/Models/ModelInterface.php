<?php

namespace app\Models;

interface ModelInterface {
    public function all();
    public function where(array $params, ?int $limit = null, ?array $orderBy = null);
}