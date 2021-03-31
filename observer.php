<?php

use Alura\DesignPattern\AcoesPedido\EnviarPedido;
use Alura\DesignPattern\AcoesPedido\GravarPedido;
use Alura\DesignPattern\AcoesPedido\LogCriarPedido;
use Alura\DesignPattern\GeradorPedido;
use Alura\DesignPattern\GeradorPedidoHandler;

require 'vendor/autoload.php';

$valorOrcamento = $argv[1];
$quantidadeItens = $argv[2];
$cliente = $argv[3];


// Representação do pedido
$pedido = new GeradorPedido($valorOrcamento, $quantidadeItens, $cliente);
$fakeRepository = null;
$fakeMailService = null;

// Executador de Gerar Pedido
$manipulador = new GeradorPedidoHandler(
    $fakeRepository,
    $fakeMailService
);

$manipulador->adicionarAcaoAoCriarPedido(new GravarPedido());
$manipulador->adicionarAcaoAoCriarPedido(new EnviarPedido());
$manipulador->adicionarAcaoAoCriarPedido(new LogCriarPedido());

// A proposta que executa tenha o mesmo comportamento, seja via CLI, form e API
$manipulador->executar($pedido, 'observer');
