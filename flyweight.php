<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\CriadorPedido;

require 'vendor/autoload.php';

$pedidos = [];
$criador = new CriadorPedido();

for ($i = 0; $i < 9999; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criador->criar(
        'Silas Stoffel de Castro Moura',
        date('Y-m-d'),
        $orcamento
    );
    $pedidos[] = $pedido;
}

echo 'MB: ', (memory_get_peak_usage() / 1024 / 1024), PHP_EOL;
