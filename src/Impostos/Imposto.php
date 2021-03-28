<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

interface Imposto
{
    public function calcular(Orcamento $orcamento): float;
}