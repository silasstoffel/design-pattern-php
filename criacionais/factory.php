<?php

use Alura\DesignPattern\Log\FileLogManager;
use Alura\DesignPattern\Log\LogManager;
use Alura\DesignPattern\Log\StdOutLogManager;

require '../vendor/autoload.php';

/**
 * Apenas mudando a instancia que pode ser
 * new FileLogManager() ou new StdOutLogManager()
 * a assinatura de gerar o log é mesma apenas os comportamento
 * que muda, ou seja, escreve em tela ou grava arquivo.
 */


$filename = sprintf(
    '%s/tmp/%s_log.log',
    dirname(__DIR__),
    date('Y-m-d')
);

$logMananger = new FileLogManager($filename);
$logMananger->log(LogManager::LOG_TYPE_INFO, "Hello, i'm log message");
echo PHP_EOL;

$logMananger = new StdOutLogManager();
$logMananger->log(LogManager::LOG_TYPE_INFO, "Hello, i'm log message");
echo PHP_EOL;


