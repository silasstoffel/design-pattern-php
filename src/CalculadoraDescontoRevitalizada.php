<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMais500Reais;
use Alura\DesignPattern\Descontos\DescontoMais5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDescontoRevitalizada
{
    public function calcular(OrcamentoRevitalizado $orcamento): float
    {
        $cadeiaDescontos = new DescontoMais5Itens(
            new DescontoMais500Reais(new SemDesconto())
        );

        $desconto = $cadeiaDescontos->descontar($orcamento);

        $log = new LogDesconto();
        $log->informar($desconto);

        return $desconto;
    }
}
