<?php


namespace Alura\DesignPattern\Venda;


use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\Imposto;
use DateTime;

class VendaServicoFactory implements VendaFactory
{
    private string $prestador;

    public function __construct(string $prestador)
    {
        $this->prestador = $prestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(
            new DateTime(),
            $this->prestador
        );
    }

    public function imposto(): Imposto
    {
        return new ICMS();
    }
}
