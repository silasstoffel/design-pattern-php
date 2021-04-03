<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamentos\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamentos\EstadoOrcamento;

class OrcamentoRevitalizado implements Orcavel
{
    /**
     * @var ItemOrcamento[]
     */
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
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

    public function adicionarItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn(float $somatorio, Orcavel $item) => $somatorio + $item->valor(),
            0
        );
    }
}
