<?php


namespace Alura\DesignPattern;


class ItemOrcamento implements Orcavel
{
    public float $valor = 0;

    public function __construct(float $valor = 0)
    {
        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}
