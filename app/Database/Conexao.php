<?php

namespace App\Database;

use Exception;
use PDO;
use PDOException;

class Conexao
{
    private function __construct()
    {
        //..
    }

    public static function getConnection()
    {
        $pdoConfig  = getenv('DB_DRIVER');
        $pdoConfig .= ":Server=" . getenv('DB_HOST');
        $pdoConfig .= ";Database=" . getenv('DB_NAME');

        try {
            if (!isset($connection)) {
                $connection =  new PDO($pdoConfig, getenv('DB_USER'), getenv('DB_PASSWORD'));
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }
}