<?php

namespace Alura\DesignPattern;


use Alura\DesignPattern\AcoesPedido\AcaoAoCriarPedido;
use DateTime;

class GeradorPedidoHandler
{

    private $pedidoRepository;
    private $mailService;

    /**
     * @var AcaoAoCriarPedido[]
     */
    private array $acoesAoCriarPedido = [];

    public function __construct($pedidoRepository, $mailService)
    {
        $this->pedidoRepository = $pedidoRepository;
        $this->mailService = $mailService;
    }

    public function adicionarAcaoAoCriarPedido(AcaoAoCriarPedido $acao)
    {
        $this->acoesAoCriarPedido[] = $acao;
    }

    public function executar(GeradorPedido $geradorPedido, $designPattern = 'command')
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $geradorPedido->getValorOrcamento();
        $orcamento->quantidadeItens = $geradorPedido->getQuantidadeItens();

        $pedido = new Pedido();
        $pedido->orcamento = $orcamento;
        $pedido->dataFinalizacao = new DateTime();
        $pedido->nomeCliente = $geradorPedido->getNomeCliente();

        if ($designPattern === 'command') {
            $this->acoesCommand();
        } else {
            $this->acoesObserver($pedido);
        }

    }

    private function acoesCommand()
    {
        echo PHP_EOL, '-----------------------------------------------', PHP_EOL;

        // $this->pedidoRepository
        echo 'Salva no banco de dados ($this->pedidoRepository).', PHP_EOL;
        // $this->mailService
        echo 'Envia e-mail para cliente com $this->mailService';


        echo PHP_EOL, '-----------------------------------------------', PHP_EOL;
    }

    private function acoesObserver(Pedido $pedido)
    {
        foreach ($this->acoesAoCriarPedido as $acao) {
            $acao->executar($pedido);
            echo PHP_EOL;
        }
    }

}
