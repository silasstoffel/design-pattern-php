<?php


namespace Alura\DesignPattern\Http;


class CurlHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $data): void
    {
        // imagina que exista uma implen
        echo PHP_EOL, 'Orçamento registrado com cUrl.', PHP_EOL;
    }
}
