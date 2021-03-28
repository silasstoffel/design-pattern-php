<?php

use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\ISS;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->valor = 100.00;

$calc = new CalculadoraImpostos();

echo 'ICMS: ';
echo $calc->calcular($orcamento, new ICMS());

echo PHP_EOL;

echo 'ISS: ';
echo $calc->calcular($orcamento, new ISS());



