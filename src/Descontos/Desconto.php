<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;

abstract class Desconto
{

    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    public abstract function descontar(Orcamento $orcamento): float;
}