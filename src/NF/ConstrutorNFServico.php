<?php


namespace Alura\DesignPattern\NF;


class ConstrutorNFServico extends ConstrutorNF
{

    public function construir(): NotaFiscal
    {
        $valor = $this->nf->getValor();
        $this->nf->valorImpostos = $valor * 0.01;
        return $this->nf;
    }
}
