<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        try{
            if($numero === false) {
                throw new \InvalidArgumentException;
            }
        }catch( \InvalidArgumentException $exception){
            echo "CPF invalido" . PHP_EOL;
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }
}
