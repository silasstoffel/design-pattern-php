<?php


namespace Alura\DesignPattern\EstadosOrcamentos;


use Alura\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calcularaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function  reprovar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }

    public  function  __toString()
    {
        return self::class;
    }
}
