<?php


namespace Alura\DesignPattern\Relatorios;


use Alura\DesignPattern\Orcamento;
use ZipArchive;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento)
    {
        $caminho = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'orcamento.zip';
        $zip = new ZipArchive();
        $zip->open($caminho, ZipArchive::CREATE);
        $zip->addFromString('orcamento-serializado', serialize($orcamento));
        $zip->close();
    }
}
