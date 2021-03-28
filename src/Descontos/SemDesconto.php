<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{

    public function __construct()
    {
        // Sobrescreve o construtor padrão
        parent::__construct(null);
    }

    public function descontar(Orcamento $orcamento): float
    {
        return 0;
    }
}