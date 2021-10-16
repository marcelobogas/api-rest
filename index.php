<?php

use App\Core\Enviroments;
use App\Services\Estados;

require __DIR__ . '/vendor/autoload.php';

/* carrega as variáveis de ambiente */
Enviroments::load(__DIR__ . '/config');

/* define que os dados da aplicação sejam em formato JSON */
header('Content-Type: application/json');

/* instância da classe Estado */
/* caso o ID não seja informado o retorno será uma lista */
$estados = Estados::get();
echo $estados;
