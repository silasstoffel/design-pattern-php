<?php

use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\ICMSRevitalizado;
use Alura\DesignPattern\Impostos\ISSRevitalizado;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->valor = 100.00;

$calc = new CalculadoraImpostos();


echo PHP_EOL, '### Exemplo de Decorator ###', PHP_EOL;

echo 'ICMS: ';
echo $calc->calcular($orcamento, new ICMSRevitalizado());

echo PHP_EOL;

echo 'ISS: ';
echo $calc->calcular($orcamento, new ISSRevitalizado());

echo PHP_EOL;

echo 'ICMS+ISS: ';

echo $calc->calcular($orcamento, new ISSRevitalizado(
    new ICMSRevitalizado()
));

echo PHP_EOL;
echo PHP_EOL;

