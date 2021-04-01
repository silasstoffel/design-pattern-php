<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ISSRevitalizado extends ImpostoAbstract
{
    protected function realizarCalculo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
