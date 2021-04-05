<?php


namespace Alura\DesignPattern\Log;


interface LoggerWritter
{
    public function write(string $message): void;
}
