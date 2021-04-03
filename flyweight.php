<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\PedidoBase;
use Alura\DesignPattern\PedidoRevitalizado;

require 'vendor/autoload.php';

$pedidos = [];

$hoje = new DateTimeImmutable();

$pedidoBase = new PedidoBase(
    sprintf('Cliente [%s]', 1),
    $hoje
);

for ($i = 0; $i < 9999; $i++) {
    $pedido = new PedidoRevitalizado();
    $pedido->orcamento = new Orcamento();
    $pedido->base = $pedidoBase;
    $pedidos[] = $pedido;
}

echo 'MB: ', (memory_get_peak_usage() / 1024 / 1024), PHP_EOL;
