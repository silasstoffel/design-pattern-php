<?php


namespace Alura\DesignPattern\Log;


class FileLogWritter implements LoggerWritter
{
    private $handle;

    public function __construct(string $filename)
    {
        $this->handle = fopen($filename, 'a+');
    }

    public function write(string $message): void
    {
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}
