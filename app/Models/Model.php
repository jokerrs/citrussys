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

    public function where(array $params, ?int $limit = null, ?array $orderBy = null): array
    {
        $query = '';
        $counter = 0;
        foreach ($params as $param => $key){
            $execute[":$param"] = $key;
            if($counter > 0){
                $query .= ' AND ';
            }
            $query .= $param.'=:'.$param.' ';
            $counter++;
        }
        if(!isset($query, $execute)){
            return ['error' => 'There is no data'];
        }
        $SQL = "SELECT * FROM " . $this->modelName() . " WHERE ".$query;
        if ($orderBy !== null) {
            $SQL .= " ORDER BY " . $orderBy[0]. " " . $orderBy[1];
        }
        if ($limit !== null) {
            $SQL .= " LIMIT " . $limit;
        }
        $PDO = DB::query($SQL, $execute);
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