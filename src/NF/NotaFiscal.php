<?php


namespace Alura\DesignPattern\NF;


use Alura\DesignPattern\ItemOrcamento;
use DateTimeInterface;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    /**
     * @var ItemOrcamento[
     */
    public array $itens = [];
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImpostos;


    public function getValor(): float
    {
        return array_reduce(
            $this->itens,
            function (float $soma, ItemOrcamento $item) {
                return $soma + $item->valor();
            },
            0
        );
    }
}
