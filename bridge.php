<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorios\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorios\ArquivoZipExportado;
use Alura\DesignPattern\Relatorios\OrcamentoExportado;
use Alura\DesignPattern\Relatorios\OrcamentoXML;
use Alura\DesignPattern\Relatorios\OrcamentoZip;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 1500;
$orcamento->aprovar();
$orcamento->finalizar();

// Problema:
// Para cada novo item precisamos criar uma classe e exportar
// isso não é saudável. Abaixo está sendo exportado Zip e em XML
$orcamentoZip = new OrcamentoZip();
$orcamentoZip->exportar($orcamento);

$orcamentoXML = new OrcamentoXML();
$orcamentoXML->exportar($orcamento);

echo PHP_EOL;

// Solução recomendada.

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoXml = new ArquivoXmlExportado('orcamento');

echo $orcamentoXml->salvar($orcamentoExportado), PHP_EOL;

$orcamentoZip = new ArquivoZipExportado('orcamento-zip');
echo $orcamentoZip->salvar($orcamentoExportado), PHP_EOL;
