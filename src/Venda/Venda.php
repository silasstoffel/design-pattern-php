<?php


namespace Alura\DesignPattern\Venda;


use DateTimeInterface;

abstract class Venda
{
    public DateTimeInterface $realizadaEm;

    public function __construct(DateTimeInterface $realizadaEm)
    {
        $this->realizadaEm = $realizadaEm;
    }
}
