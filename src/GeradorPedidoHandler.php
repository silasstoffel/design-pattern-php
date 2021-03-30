<?php

namespace Alura\DesignPattern;


use DateTime;

class GeradorPedidoHandler
{

    private $pedidoRepository;
    private $mailService;

    public function __construct($pedidoRepository, $mailService)
    {
        $this->pedidoRepository = $pedidoRepository;
        $this->mailService = $mailService;
    }

    public function executar(GeradorPedido  $geradorPedido) {
        $orcamento = new Orcamento();
        $orcamento->valor = $geradorPedido->getValorOrcamento();
        $orcamento->quantidadeItens = $geradorPedido->getQuantidadeItens();

        $pedido = new Pedido();
        $pedido->orcamento = $orcamento;
        $pedido->dataFinalizacao = new DateTime();
        $pedido->nomeCliente = $geradorPedido->getNomeCliente();

        echo PHP_EOL, '-----------------------------------------------', PHP_EOL;

        // $this->pedidoRepository
        echo 'Salva no banco de dados ($this->pedidoRepository).', PHP_EOL;
        // $this->mailService
        echo 'Envia e-mail para cliente com $this->mailService';


        echo PHP_EOL, '-----------------------------------------------', PHP_EOL;
    }


}
