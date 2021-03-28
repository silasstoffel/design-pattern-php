<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;

class DescontoMais500Reais extends  Desconto
{
    public function descontar(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }
        return $this->proximoDesconto->descontar($orcamento);
    }
}