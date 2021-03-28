<?php

use Alura\DesignPattern\CalculadoraDesconto;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 1000.00;
$orcamento->quantidadeItens = 1;

$calcDesconto = new CalculadoraDesconto();
$desconto = $calcDesconto->calcular($orcamento);

echo sprintf('Desconto (R$): %s', $desconto);

