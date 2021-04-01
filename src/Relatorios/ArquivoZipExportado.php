<?php


namespace Alura\DesignPattern\Relatorios;


use ZipArchive;

class ArquivoZipExportado implements ArquivoExportavel
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportavel $conteudo): string
    {
        $caminho = tempnam(sys_get_temp_dir(), 'zip');
        $zip = new ZipArchive();
        $zip->open($caminho, ZipArchive::CREATE);
        $zip->addFromString(
            $this->nomeArquivoInterno,
            serialize($conteudo->conteudo())
        );
        $zip->close();
        return  $caminho;
    }
}
