<?php

namespace Kennynguyeenx\DesignPattern\FactoryMethodPattern;

/**
 * Class ChicagoCheesePizza
 * @package Kennynguyeenx\DesignPattern\FactoryMethodPattern
 */
class ChicagoCheesePizza extends Pizza
{
    /**
     * @var string
     */
    protected $name = 'Chicago Style Cheese Pizza';

    public function cut()
    {
        printf('Cutting the pizza into square slices ' . PHP_EOL);
    }
}
