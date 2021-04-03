<?php


namespace Alura\DesignPattern;


use DomainException;

class CacheOrcamentoProxy extends OrcamentoRevitalizado
{
    private float $valorCache = 0.00;
    private OrcamentoRevitalizado $orcamento;

    public function __construct(OrcamentoRevitalizado $orcamento)
    {
        $this->orcamento = $orcamento;
        parent::__construct();
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }
        return $this->valorCache;
    }

    public function adicionarItem(Orcavel $item)
    {
        throw new DomainException(
          'Não é possível adicionar um item de orçamento ao cache de orçamento.'
        );
    }

}
