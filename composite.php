<?php


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



echo $orcamento->valor();



