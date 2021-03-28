<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMais500Reais;
use Alura\DesignPattern\Descontos\DescontoMais5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDesconto
{
    public function calcular(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMais5Itens(
            new DescontoMais500Reais(new SemDesconto())
        );

        return $cadeiaDescontos->descontar($orcamento);
    }
}