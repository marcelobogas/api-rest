<?php

namespace App\Model;

use App\Database\Conexao;
use PDO;

class Estados
{    
    /**
     * variável com o nome da tabela a ser manipulada no banco
     *
     * @var string
     */
    protected static $table = 'estados';
    
    /**
     * Método responsável por retornar um Estado ou uma lista de Estados
     *
     * @param integer $id
     *
     * @return array
     */
    public static function select($id = null)
    {
        /* inicia a conexão com o banco de dados */
        $conn = Conexao::getConnection();
        $estados = array();

        if (isset($id)) {
            try {
                /* prepara a sql de consulta e retorna apenas o País pelo ID */
                $data = $conn->prepare('SELECT * FROM ' . self::$table . " WHERE id = " . $id);
                $data->execute();

                /* retorna os dados em formato de array */
                return $data->fetchAll(PDO::FETCH_ASSOC);
    
                /* itera os dados da consulta */
                /* while ($dataState = $data->fetch(PDO::FETCH_ASSOC)) {
                    $estados[$dataState['id']] = array(
                        'id' => $dataState['id'],
                        'nome' => $dataState['nome'],
                        'uf' => $dataState['uf'],
                        'ibge' => $dataState['ibge'],
                        'id_pais' => $dataState['id_pais'],
                    );
                } */

                /* retorna os dados em formato de array */
                /* return $estados; */
            } catch (\Exception $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        } else {
            try {
                /* prepara a sql de consulta e retorna uma lista de Países */
                $data = $conn->prepare('SELECT * FROM ' . self::$table);
                $data->execute();
    
                /* itera os dados da consulta */
                while ($dataState = $data->fetch(PDO::FETCH_ASSOC)) {
                    $estados[$dataState['id']] = array(
                        'id' => $dataState['id'],
                        'nome' => $dataState['nome'],
                        'uf' => $dataState['uf'],
                        'ibge' => $dataState['ibge'],
                        'id_pais' => $dataState['id_pais'],
                    );
                }

                /* retorna os dados em formato de array */
                return $estados;
            } catch (\Exception $e) {
                die('Erro de conexão: ' . $e->getMessage());
            }
        }
    }
    
    /**
     * Método responsável por inserir um novo registro no banco de dados
     *
     * @return void
     */
    public static function insert()
    {
        
    }
    
    /**
     * Método responsável por atualizar um registro existente no banco de dados
     *
     * @param integer $id
     *
     * @return void
     */
    public static function update($id)
    {

    }
    
    /**
     * Método responsável por excluir um registro no banco de dados
     *
     * @param integer $id
     *
     * @return boolean
     */
    public static function delete($id)
    {

    }
}
