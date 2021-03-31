<?php


namespace Alura\DesignPattern\AcoesPedido;


use Alura\DesignPattern\Pedido;

class EnviarPedido implements AcaoAoCriarPedido
{
    public function executar(Pedido $pedido): void
    {
        echo 'Envia pedido por e-mail.';
    }
}
