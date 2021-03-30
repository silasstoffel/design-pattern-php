<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamentos\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamentos\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function calcularaDescontoExtra(): float
    {
        return $this->estadoAtual->calcularaDescontoExtra($this);
    }

    public function aprovar()
    {
        $this->estadoAtual->aprovar($this);
    }

    public function reprovar()
    {
        $this->estadoAtual->reprovar($this);
    }

    public function finalizar()
    {
        $this->estadoAtual->finalizar($this);
    }
}
