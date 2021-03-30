<?php


namespace Alura\DesignPattern\EstadosOrcamentos;


use Alura\DesignPattern\Orcamento;
use DomainException;

class Finalizado extends  EstadoOrcamento
{
    public function calcularaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Orçamento finalizado não pode receber desconto',400);
    }

    public  function  __toString()
    {
        return self::class;
    }
}
