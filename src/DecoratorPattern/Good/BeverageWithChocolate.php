<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Good;

/**
 * Class BeverageWithChocolate
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Good
 */
class BeverageWithChocolate extends DecoratedBeverage
{
    /**
     * @var int
     */
    private $chocolatePrice = 15000;

    /**
     * @return int
     */
    public function price(): int
    {
        return parent::price() + $this->chocolatePrice();
    }

    /**
     * @return int
     */
    public function chocolatePrice(): int
    {
        return $this->chocolatePrice;
    }
}