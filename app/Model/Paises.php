<?php

namespace App\Model;

use App\Database\Conexao;
use PDO;

class Paises
{    
    /**
     * variável com o nome da tabela a ser manipulada no banco
     *
     * @var string
     */
    protected $table = 'paises';
    
    /**
     * Método responsável por obter um País ou uma lista de Países
     *
     * @param integer $id
     *
     * @return array
     */
    public static function select($id = null)
    {
        /* obtém a conexão com o banco de dados */
        $conn = Conexao::getConnection();
        $paises = array();

        if (isset($id)) {
            try {
                /* prepara a sql de consulta e retorna apenas o País pelo ID */
                $data = $conn->prepare('SELECT * FROM ' . self::$table . " WHERE id = " . $id);
                $data->execute();
    
                /* itera os dados da consulta */
                while ($dataCountry = $data->fetch(PDO::FETCH_ASSOC)) {
                    $paises[$dataCountry['id']] = array(
                        'id' => $dataCountry['id'],
                        'nome' => $dataCountry['nome'],
                        'sigla' => $dataCountry['sigla']
                    );
                }

                /* retorna os dados em formato de array */
                return $paises;
            } catch (\Exception $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        } else {
            try {
                /* prepara a sql de consulta e retorna uma lista de Países */
                $data = $conn->prepare('SELECT * FROM ' . self::$table);
                $data->execute();
    
                /* itera os dados da consulta */
                while ($dataCountry = $data->fetch(PDO::FETCH_ASSOC)) {
                    $paises[$dataCountry['id']] = array(
                        'id' => $dataCountry['id'],
                        'nome' => $dataCountry['nome'],
                        'sigla' => $dataCountry['sigla']
                    );
                }

                /* retorna os dados em formato de array */
                return $paises;
            } catch (\Exception $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        }
    }
}
