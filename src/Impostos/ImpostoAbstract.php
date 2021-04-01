<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

abstract class ImpostoAbstract implements Imposto
{

    private ?ImpostoAbstract $impostoAdicional;

    public function __construct(ImpostoAbstract $impostoAdicional = null)
    {
        $this->impostoAdicional = $impostoAdicional;
    }

    abstract protected function realizarCalculo(Orcamento $orcamento): float;

    public function calcular(Orcamento $orcamento): float
    {
        return $this->realizarCalculo($orcamento) + $this->calcularImpostoAdicional($orcamento);
    }

    private function calcularImpostoAdicional(Orcamento $orcamento): float
    {
        return is_null($this->impostoAdicional) ? 0 : $this->impostoAdicional->calcular($orcamento);
    }
}
