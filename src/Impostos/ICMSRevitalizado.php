<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ICMSRevitalizado extends ImpostoAbstract
{
    public function realizarCalculo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.10;
    }
}
