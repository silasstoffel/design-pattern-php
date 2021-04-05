<?php


namespace Alura\DesignPattern\Log;


class FileLogManager extends LogManager
{

    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function createLogWritter(): LoggerWritter
    {
        return new FileLogWritter($this->filename);
    }
}
