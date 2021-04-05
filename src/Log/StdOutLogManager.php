<?php


namespace Alura\DesignPattern\Log;


class StdOutLogManager extends LogManager
{

    public function createLogWritter(): LoggerWritter
    {
        return new StdOutLogWritter();
    }
}
