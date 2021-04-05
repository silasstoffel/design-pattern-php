<?php


namespace Alura\DesignPattern\Log;


class StdOutLogWritter implements LoggerWritter
{

    public function write(string $message): void
    {
        echo $message;
    }
}
