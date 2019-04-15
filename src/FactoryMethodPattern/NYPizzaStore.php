<?php

namespace Kennynguyeenx\DesignPattern\FactoryMethodPattern;

use Exception;

/**
 * Class NYPizzaStore
 * @package Kennynguyeenx\DesignPattern\FactoryMethodPattern
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $type
     * @return Pizza
     * @throws Exception
     */
    public function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            return new NYCheesePizza();
        }

        throw new Exception('Invalid type');
    }
}
