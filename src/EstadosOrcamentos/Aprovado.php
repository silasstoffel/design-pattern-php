<?php


namespace Alura\DesignPattern\EstadosOrcamentos;


use Alura\DesignPattern\Orcamento;

class Aprovado extends  EstadoOrcamento
{
    public function calcularaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }

    public  function  __toString()
    {
        return self::class;
    }
}
