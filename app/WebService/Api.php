<?php

namespace App\WebService;

use App\Database\Conexao;
use PDO;

class Api
{

    function select() {
        $conn = Conexao::getConnection();
        $states = array();

        $data = $conn->prepare('SELECT * FROM estados');
        $data->execute();

        while ($dataState = $data->fetch(PDO::FETCH_ASSOC)) {
            $states[$dataState['id']] = array(
                'id' => $dataState['id'],
                'nome' => $dataState['nome'],
                'uf' => $dataState['uf'],
                'ibge' => $dataState['ibge']
            );
        }

        return json_encode($states);
    }

}
