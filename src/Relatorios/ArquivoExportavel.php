<?php


namespace Alura\DesignPattern\Relatorios;


interface ArquivoExportavel
{
    public function salvar(ConteudoExportavel $conteudo): string;
}
