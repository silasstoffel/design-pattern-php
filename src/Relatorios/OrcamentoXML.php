<?php


namespace Alura\DesignPattern\Relatorios;


use Alura\DesignPattern\Orcamento;

class OrcamentoXML
{
    public function exportar(Orcamento $orcamento)
    {
        $itens = ['<orcamento>'];

        $itens[] = '<valor>';
        $itens[] = $orcamento->valor;
        $itens[] = '</valor>';

        $itens[] = '<quantidadeItens>';
        $itens[] = $orcamento->quantidadeItens;
        $itens[] = '</quantidadeItens>';

        $itens[] = '</orcamento>';

        return implode('', $itens);
    }
}
