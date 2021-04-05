<?php


use Alura\DesignPattern\Venda\VendaProdutoFactory;
use Alura\DesignPattern\Venda\VendaServicoFactory;

require '../vendor/autoload.php';


$fabricaServico = new VendaServicoFactory('Silas Stoffel');
$fabricaProduto = new VendaProdutoFactory(600);

$fabricas = [$fabricaProduto, $fabricaServico];

// Independente se é produto ou serviço, implementando
// abstração vai dar certo.
foreach ($fabricas as $fabrica) {
    $venda = $fabrica->criarVenda();
    $imposto = $fabrica->imposto();

    var_dump($venda);
    var_dump($imposto);
    echo '____________________________________________________________________________', PHP_EOL;
}
