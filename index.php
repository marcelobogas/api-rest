<?php

use App\WebService\Api;

require __DIR__ . '/vendor/autoload.php';

$API = new Api;
header('Content-Type: application/json');
echo $API->select();
