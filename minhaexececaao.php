<?php


class MinhaExcecao extends DomainException
{
    public function exibeItalo()
    {
        echo "Italo";
    }
}
try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e){
    $e->exibeItalo();
}



