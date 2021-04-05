<?php


namespace Alura\DesignPattern\Venda;


use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\Imposto;
use DateTime;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoEmGramas;

    public function __construct(int $pesoEmGramas)
    {
        $this->pesoEmGramas = $pesoEmGramas;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(
            new DateTime(),
            $this->pesoEmGramas
        );
    }

    public function imposto(): Imposto
    {
        return new ICMS();
    }
}
