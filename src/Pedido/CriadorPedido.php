<?php


namespace Alura\DesignPattern\Pedido;


use Alura\DesignPattern\Orcamento;
use DateTimeImmutable;

class CriadorPedido
{
    private array $templates = [];

    public function criar(string $nomeCliente, string $dataFormatada, Orcamento $orcamento): PedidoRevitalizado
    {
        $template = $this->criarTemplate($nomeCliente, $dataFormatada);
        $pedido = new PedidoRevitalizado();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    public function criarTemplate(string $nomeCliente, string $dataFormatada): PedidoTemplate
    {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $template = new PedidoTemplate($nomeCliente, new DateTimeImmutable($dataFormatada));
            $this->templates[$hash] = $template;
        }
        return $this->templates[$hash];
    }

}
