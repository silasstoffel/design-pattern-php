<?php


namespace Alura\DesignPattern\NF;


class ConstrutorNFProduto extends ConstrutorNF
{

    public function construir(): NotaFiscal
    {
        $valor = $this->nf->getValor();
        $this->nf->valorImpostos = $valor * 0.02;
        return $this->nf;
    }
}
