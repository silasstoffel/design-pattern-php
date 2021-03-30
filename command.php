<?php

use Alura\DesignPattern\GeradorPedido;
use Alura\DesignPattern\GeradorPedidoHandler;

require 'vendor/autoload.php';

/**
 * Esta implementação é um command adaptado, pois o comand
 * se propõe a executar um determinado comando igual em qualquer
 * contexto que ele for executado, por exemplo: CLI, API, formulário web.
 * Para não acoplar demais o fonte, esse "command" é adaptado com objeto que representa
 * os dados "GeradorPedido" e um objeto que de fato executa o comando "GerarPedidoHandler".
 *
 * Command e Command Handler (ApplicationServices, UseCase) se complementam, o command
 * é uma abordagem mais antiga, já o command Handler é algo mais moderno e adotado
 * até momento de codificação desse arquivo.
 */


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

// A propost que executa tenha o mesmo comportamento, seja via CLI, form e API
$manipulador->executar($pedido);
