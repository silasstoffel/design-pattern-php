<?php


namespace Alura\DesignPattern\Venda;


use DateTimeInterface;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(DateTimeInterface $realizadaEm, string $nomePrestador)
    {
        parent::__construct($realizadaEm);
        $this->nomePrestador = $nomePrestador;
    }
}
