<?php


namespace Alura\DesignPattern\EstadosOrcamentos;


use Alura\DesignPattern\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * Calcula desconto exta.
     * @param Orcamento $orcamento Orçamento
     * @throws DomainException
     */
    abstract public function calcularaDescontoExtra(Orcamento $orcamento): float;

    public function aprovar(Orcamento $orcamento)
    {
        throw new DomainException('Orçamento não pode ser aprovado.', 400);
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new DomainException('Orçamento não pode ser reprovado.', 400);
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new DomainException('Orçamento não pode ser finalizado.', 400);
    }

    public function __toString()
    {
        return Aprovado::class;
    }
}
