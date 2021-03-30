<?php


namespace Alura\DesignPattern;

class GeradorPedido
{
    private float $valorOrcamento;
    private int $quantidadeItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $quantidadeItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->quantidadeItens = $quantidadeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getQuantidadeItens(): int
    {
        return $this->quantidadeItens;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

}
