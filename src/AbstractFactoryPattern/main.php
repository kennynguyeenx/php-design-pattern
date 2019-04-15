<?php

use Kennynguyeenx\DesignPattern\AbstractFactoryPattern\ComputerFactory;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $pc = ComputerFactory::createComputer('pc');
    $pc->show();

    $server = ComputerFactory::createComputer('server');
    $server->show();
} catch (Exception $exception) {
    printf($exception->getMessage() . PHP_EOL);
}
