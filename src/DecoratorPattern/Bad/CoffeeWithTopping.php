<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Bad;

use Kennynguyeenx\DesignPattern\DecoratorPattern\Beverage;

/**
 * Class CoffeeWithTopping
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Bad
 */
class CoffeeWithTopping extends Beverage
{
    /**
     * @var int
     */
    private $priceOfCoffee = 20000;
    /**
     * @var int
     */
    private $priceOfTopping = 10000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->priceOfCoffee + $this->priceOfTopping;
    }
}