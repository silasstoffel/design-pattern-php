<?php


use Alura\DesignPattern\CacheOrcamentoProxy;
use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\OrcamentoRevitalizado;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item1->valor = 500.00;

$item2 = new ItemOrcamento();
$item2->valor = 350.50;

$orcamento = new OrcamentoRevitalizado();
$orcamento->adicionarItem($item1);
$orcamento->adicionarItem($item2);

$orcamentoAntigo = new OrcamentoRevitalizado();
$orcamentoAntigo->adicionarItem(
    new ItemOrcamento(49.50)
);

$orcamentoAntigoAinda = new OrcamentoRevitalizado();
$orcamentoAntigo->adicionarItem(
    new ItemOrcamento(100)
);

$orcamentoAntigo->adicionarItem($orcamentoAntigoAinda);

$orcamento->adicionarItem($orcamentoAntigo);


$proxyCache = new CacheOrcamentoProxy($orcamento);

// Dessa forma ele faz 3 calculos em seguida
// echo $orcamento->valor(), PHP_EOL;
//echo $orcamento->valor(), PHP_EOL;
// echo $orcamento->valor(), PHP_EOL;

// Fazendo o calculo apenas uma única vez
echo $proxyCache->valor(), PHP_EOL;
echo $proxyCache->valor(), PHP_EOL;
echo $proxyCache->valor(), PHP_EOL;
echo $proxyCache->valor(), PHP_EOL;

// Tem que lançar exceção. Proteção do valor em cache
// $proxyCache->adicionarItem($item1);


