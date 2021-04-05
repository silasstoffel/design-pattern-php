<?php


namespace Alura\DesignPattern\Venda;


use DateTimeInterface;

class VendaProduto extends Venda
{

    public int $pesoProduto;

    public function __construct(DateTimeInterface $realizadaEm, int $pesoProduto)
    {
        parent::__construct($realizadaEm);
        $this->pesoProduto = $pesoProduto;
    }
}
