<?php


use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NF\ConstrutorNFProduto;
use Alura\DesignPattern\NF\ConstrutorNFServico;

require '../vendor/autoload.php';

$buider = new ConstrutorNFProduto();

$nf = $buider->paraEmpresa('123456789123', 'TagTec')
    ->comItem(new ItemOrcamento(100))
    ->comItem(new ItemOrcamento(200))
    ->comItem(new ItemOrcamento(300))
    ->comObservacoes('Observações')
    ->comData(new DateTimeImmutable())
    ->construir();

echo PHP_EOL . '- NF Produto: '. $nf->getValor() . PHP_EOL;
echo '- Impostos: '. $nf->valorImpostos . PHP_EOL;

$buider = new ConstrutorNFServico();
$nf = $buider->paraEmpresa('123456789123', 'TagTec')
    ->comItem(new ItemOrcamento(200))
    ->comItem(new ItemOrcamento(200))
    ->comObservacoes('Observações')
    ->comData(new DateTimeImmutable())
    ->construir();

echo PHP_EOL . '- NF Servico: '. $nf->getValor() . PHP_EOL;
echo '- Impostos: '. $nf->valorImpostos . PHP_EOL;

