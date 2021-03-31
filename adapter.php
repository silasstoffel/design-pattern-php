<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 4;
$orcamento->valor = 1000.00;
$orcamento->aprovar();
$orcamento->finalizar();

$httpAdapter = new CurlHttpAdapter();
$registroOrcamento = new RegistroOrcamento($httpAdapter);
$registroOrcamento->registrar($orcamento);


echo '#############################################';

$httpAdapter = new ReactPHPHttpAdapter();
$registroOrcamento = new RegistroOrcamento($httpAdapter);
$registroOrcamento->registrar($orcamento);

echo PHP_EOL;


