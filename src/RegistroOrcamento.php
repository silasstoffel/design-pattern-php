<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamentos\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;
use DomainException;

class RegistroOrcamento
{
    private HttpAdapter $httpAdapter;

    public function __construct(HttpAdapter $httpAdapter)
    {
        $this->httpAdapter = $httpAdapter;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException('Apenas orçamentos finalizados podem ser registrados.');
        }
        // Chamar uma API de api de registro
        $this->httpAdapter->post(
            'http://api.orcamento.com',
            [
                'valor' => $orcamento->valor,
                'quantidade_itens' => $orcamento->quantidadeItens
            ]
        );
    }
}
