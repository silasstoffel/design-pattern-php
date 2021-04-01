<?php


namespace Alura\DesignPattern\Relatorios;


use SimpleXMLElement;

class ArquivoXmlExportado implements ArquivoExportavel
{
    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportavel $conteudo): string
    {
        $el = new SimpleXMLElement("<{$this->nomeElementoPai}/>");
        foreach ($conteudo->conteudo() as $item => $valor) {
            $el->addChild($item, $valor);
        }
        $caminho = tempnam(sys_get_temp_dir(), 'xml');
        $el->asXML($caminho);
        return  $caminho;
    }
}
