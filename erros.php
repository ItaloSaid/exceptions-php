<?php

error_reporting(E_ALL);
ini_set('display_errors', 1); // 0 para nao mostrar erros ao usuario usando

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno){
        case E_WARNING:
            echo "Aviso: isso é perigoso. ";
            break;
        case E_NOTICE:
            echo "Melhor nao fazer isso. ";
            break;
    }
});

echo $variavel;
echo $array =  [1];

