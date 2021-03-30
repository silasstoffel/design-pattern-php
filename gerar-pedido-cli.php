<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';


$valorOrcamento = $argv[1];
$quantidadeItens = $argv[2];
$cliente = $argv[3];


$orcamento = new Orcamento();
$orcamento->valor = $valorOrcamento;
$orcamento->quantidadeItens = $quantidadeItens;

$pedido = new Pedido();
$pedido->orcamento = $orcamento;
$pedido->dataFinalizacao = new DateTime();
$pedido->nomeCliente = $cliente;

echo PHP_EOL, '-----------------------------------------------', PHP_EOL;

echo PHP_EOL, '1. Salva pedido no banco de dados', PHP_EOL;
echo PHP_EOL, '2. Envia pedido', PHP_EOL;

