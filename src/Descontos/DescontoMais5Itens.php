<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\OrcamentoRevitalizado;

class DescontoMais5Itens extends Desconto
{
    public function descontar(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->descontar($orcamento);
    }

    public function descontarRevitalizado(OrcamentoRevitalizado $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->descontar($orcamento);
    }
}
