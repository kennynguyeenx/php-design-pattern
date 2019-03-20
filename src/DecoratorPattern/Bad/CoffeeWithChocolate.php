<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Bad;

use Kennynguyeenx\DesignPattern\DecoratorPattern\Beverage;

/**
 * Class CoffeeWithChocolate
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Bad
 */
class CoffeeWithChocolate extends Beverage
{
    /**
     * @var int
     */
    private $priceOfCoffee = 20000;
    /**
     * @var int
     */
    private $priceOfChocolate = 15000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->priceOfCoffee + $this->priceOfChocolate;
    }
}