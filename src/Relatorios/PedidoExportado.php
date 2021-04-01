<?php


namespace Alura\DesignPattern\Relatorios;


use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportavel
{


    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data' => $this->pedido->dataFinalizacao->format('d/m/y'),
            'cliente' => $this->pedido->nomeCliente
        ];
    }
}
