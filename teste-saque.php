<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular, SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);

try {
    $conta->saca(600);
} catch(SaldoInsuficienteException $exception){
    echo "Você nao tem saldo suficiente para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}
echo $conta->recuperaSaldo();
