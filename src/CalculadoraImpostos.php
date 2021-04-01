<?php


namespace Alura\DesignPattern;


class CalculadoraImpostos
{

    /**
     * @param Orcamento $orcamento
     * @param $imposto
     * @return mixed
     */
    public function calcular(Orcamento $orcamento, $imposto)
    {
        return $imposto->calcular($orcamento);
    }
}
