<?php


namespace Alura\DesignPattern\AcoesPedido;


use Alura\DesignPattern\Pedido;

class GravarPedido implements AcaoAoCriarPedido
{
    public function executar(Pedido $pedido): void
    {
        echo 'Grava pedido no banco de dados.';
    }
}
