<?php

namespace Kennynguyeenx\DesignPattern\FactoryMethodPattern;

use Exception;

/**
 * Class ChicagoPizzaStore
 * @package Kennynguyeenx\DesignPattern\FactoryMethodPattern
 */
class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     * @throws Exception
     */
    public function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            return new ChicagoCheesePizza();
        }

        throw new Exception('Invalid type');
    }
}
