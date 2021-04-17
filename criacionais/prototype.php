<?php


use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NF\ConstrutorNFProduto;
use Alura\DesignPattern\NF\ConstrutorNFServico;

require '../vendor/autoload.php';

$buider = new ConstrutorNFServico();

$nf = $buider->paraEmpresa('123456789123', 'TagTec')
    ->comItem(new ItemOrcamento(200))
    ->comItem(new ItemOrcamento(200))
    ->comObservacoes('Observações')
    ->comData(new DateTimeImmutable())
    ->construir();

echo PHP_EOL . '- NF 001: ' . $nf->getValor() . PHP_EOL;
echo '- Impostos: ' . $nf->valorImpostos . PHP_EOL;
echo '- Data: ' . (string) $nf->dataEmissao->format('Y-m-d H:i:s') . PHP_EOL;

echo PHP_EOL . '------------------------------------------------' . PHP_EOL;

sleep(1);

$nf2 = clone $nf;
$nf2->itens[] = new ItemOrcamento(50);

echo PHP_EOL . '- NF CLONE: ' . $nf2->getValor() . PHP_EOL;
echo '- Impostos: ' . $nf2->valorImpostos . PHP_EOL;
echo '- Data: ' . (string) $nf2->dataEmissao->format('Y-m-d H:i:s') . PHP_EOL . PHP_EOL;

