<?php

use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->valor = 1000.00;
$orcamento->quantidadeItens = 5;

echo PHP_EOL, '---------------------------------------------------', PHP_EOL;

echo sprintf('Valor: R$ %s ', $orcamento->valor);
echo PHP_EOL;
echo sprintf('Estado Atual: %s ', $orcamento->estadoAtual);

echo PHP_EOL, 'Aplicando desconto ...', PHP_EOL;
$desconto = $orcamento->calcularaDescontoExtra();
echo sprintf('Desconto R$ %s', $desconto);

echo PHP_EOL, '---------------------------------------------------', PHP_EOL;

echo PHP_EOL, 'Aprovando ...', PHP_EOL;

$orcamento->aprovar();

echo sprintf('Estado Atual: %s ', $orcamento->estadoAtual);

echo PHP_EOL, 'Aplicando desconto ...', PHP_EOL;

$desconto = $orcamento->calcularaDescontoExtra();
echo sprintf('Desconto R$ %s', $desconto);

echo PHP_EOL, '---------------------------------------------------', PHP_EOL;

echo PHP_EOL, 'Fechar ...', PHP_EOL;
$orcamento->finalizar();

echo sprintf('Estado Atual: %s ', $orcamento->estadoAtual);

