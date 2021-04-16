<?php


namespace Alura\DesignPattern\NF;


use Alura\DesignPattern\ItemOrcamento;
use DateTimeImmutable;
use DateTimeInterface;

abstract class ConstrutorNF
{
    protected NotaFiscal $nf;

    /**
     * ConstrutorNF constructor.
     */
    public function __construct()
    {
        $this->nf = new NotaFiscal();
        $this->nf->dataEmissao = new DateTimeImmutable();
        return $this;
    }

    abstract public function construir();

    public function paraEmpresa(string $cnpj, string $razaoSocial): self
    {
        $this->nf->cnpjEmpresa = $cnpj;
        $this->nf->razaoSocialEmpresa = $razaoSocial;
        return $this;
    }

    public function comItem(ItemOrcamento $item): self
    {
        $this->nf->itens[] = $item;
        return $this;
    }

    public function comObservacoes(string $observacoes): self
    {
        $this->nf->observacoes = $observacoes;
        return $this;
    }

    public function comData(DateTimeInterface $emissao): self
    {
        $this->nf->dataEmissao = $emissao;
        return $this;
    }

}
