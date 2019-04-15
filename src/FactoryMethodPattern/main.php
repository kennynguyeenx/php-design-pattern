<?php

use Kennynguyeenx\DesignPattern\FactoryMethodPattern\ChicagoPizzaStore;
use Kennynguyeenx\DesignPattern\FactoryMethodPattern\NYPizzaStore;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $pizzaStore = new NYPizzaStore();
    $pizzaStore->orderPizza('cheese');

    $pizzaStore = new ChicagoPizzaStore();
    $pizzaStore->orderPizza('cheese');
} catch (Exception $exception) {
    printf($exception->getMessage() . PHP_EOL);
}
