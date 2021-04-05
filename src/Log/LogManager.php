<?php


namespace Alura\DesignPattern\Log;


abstract class LogManager
{
    const LOG_TYPE_WARNING = 'warning';
    const LOG_TYPE_ERROR = 'error';
    const LOG_TYPE_INFO = 'info';

    public function log(string $type, string $message)
    {
        /** @var LoggerWritter $log */
        $log = $this->createLogWritter();
        $layoutMessage = sprintf(
            '[%s][%s]: %s%s',
            date('Y-m-d H:i:s'),
            $type,
            $message,
            PHP_EOL
        );
        $log->write($layoutMessage);
    }

    abstract public function createLogWritter(): LoggerWritter;
}
