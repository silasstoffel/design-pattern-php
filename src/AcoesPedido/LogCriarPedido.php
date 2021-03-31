<?php


namespace Alura\DesignPattern\AcoesPedido;


use Alura\DesignPattern\Pedido;

class LogCriarPedido implements AcaoAoCriarPedido
{
    public function executar(Pedido $pedido): void
    {
        echo 'Grava log de pedido.';
    }
}
