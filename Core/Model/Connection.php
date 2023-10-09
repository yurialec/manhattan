<?php

namespace App\Core\Model;

use PDO;

class Connection
{
    /**
     * instanciar um novo objeto de conexao
     *
     * @var object
     */
    private static object $instance;

    /**
     * Undocumented function
     *
     * @return object
     */
    public static function getConn(): object
    {
        /** Caso nao exista uma instancia de conexao ele cria uma nova */
        if (!isset(self::$instance)) :
            self::$instance = new PDO('mysql:host=31.170.162.119;dbname=campoverde_manhattan_site', 'campoverde_manhattan_site', 'Recife@2020');
        endif;

        return self::$instance;
    }
}
