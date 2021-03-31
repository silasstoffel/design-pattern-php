<?php


namespace Alura\DesignPattern\AcoesPedido;


use Alura\DesignPattern\Pedido;

interface AcaoAoCriarPedido
{
    public function executar(Pedido $pedido): void;
}
