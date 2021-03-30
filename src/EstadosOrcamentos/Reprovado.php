<?php


namespace Alura\DesignPattern\EstadosOrcamentos;


use Alura\DesignPattern\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calcularaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Orçamento reprovado não pode receber desconto',400);
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
