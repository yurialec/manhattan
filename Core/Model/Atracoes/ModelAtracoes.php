<?php

namespace App\Core\Model\Atracoes;

use App\Core\Model\Connection;
use PDO;

class ModelAtracoes extends Connection
{
    public function listarAtracoes(): array
    {
        $query = "SELECT * FROM atracoes";
        $stmt = Connection::getConn()->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        else :
            return [];
        endif;
    }
}
