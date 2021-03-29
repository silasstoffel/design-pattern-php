<?php

use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\ICPP;
use Alura\DesignPattern\Impostos\IKCV;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->valor = 10.00;
$orcamento->quantidadeItens = 2;

$calc = new CalculadoraImpostos();

echo 'ICPP: ';
echo $calc->calcular($orcamento, new ICPP());

echo PHP_EOL;

echo 'IKCP: ';
echo $calc->calcular($orcamento, new IKCV());

echo PHP_EOL;




