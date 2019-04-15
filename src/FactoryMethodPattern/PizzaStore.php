<?php

namespace Kennynguyeenx\DesignPattern\FactoryMethodPattern;

/**
 * Class PizzaStore
 * @package Kennynguyeenx\DesignPattern\FactoryMethodPattern
 */
abstract class PizzaStore
{
    /**
     * @param string $type
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
    }

    /**
     * @param string $type
     * @return Pizza
     */
    public abstract function createPizza(string $type): Pizza;
}
