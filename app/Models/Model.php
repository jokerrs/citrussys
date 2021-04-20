<?php

namespace app\Models;

use app\DB;

class Model extends DB implements ModelInterface
{
    public function all(): array
    {
        $PDO = DB::query("SELECT * FROM " . $this->modelName());
        if (!$PDO) {
            return ['error' => 'There is no data'];
        }
        return $PDO->fetchAll();
    }

    public function where(string $column, $value, ?int $limit = null): array
    {
        $SQL = "SELECT * FROM " . $this->modelName() . " WHERE $column=:$column ";
        if ($limit !== null) {
            $SQL .= " LIMIT " . $limit;
        }
        $PDO = DB::query($SQL, [":$column" => $value]);
        if (!$PDO) {
            return ['error' => 'There is no data'];
        }
        $data = $limit === 1 ? $PDO->fetch() : $PDO->fetchAll();
        if (empty($data)) {
            return ['error' => 'There is no data'];
        }
        return $data;
    }

    public function modelName(): string
    {
        return strtolower(substr(get_class($this), 11));
    }
}