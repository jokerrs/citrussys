<?php

namespace app\Models;

class Comments extends Model
{

    public function getCommentsByProductID($productID): array
    {
        return $this->where([
            'product_id' => $productID,
            'approved' => 1
        ],
            null,
            ['id', 'DESC']);
    }
}