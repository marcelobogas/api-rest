<?php

namespace App\Services;

use App\Model\Estados as ModelEstados;

class Estados
{
    public static function get($id = null)
    {
        if (!isset($id)) {
            /* retorna uma lista de estados */
            $estados = ModelEstados::select();
        } else {
            /* retorna um estado com base em seu ID */
            $estados = ModelEstados::select($id);
        }

        /* retorna os dados em formato JSON */
        return $estados;
        /* return json_encode($estados, JSON_UNESCAPED_UNICODE); */
    }

    public static function post()
    {
        
    }

    public static function put()
    {

    }

    public static function delete()
    {

    }

}
