<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Good;

/**
 * Class BeverageWithTopping
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Good
 */
class BeverageWithTopping extends DecoratedBeverage
{
    /**
     * @var int
     */
    private $toppingPrice = 10000;

    /**
     * @return int
     */
    public function price(): int
    {
        return parent::price() + $this->toppingPrice();
    }

    /**
     * @return int
     */
    public function toppingPrice(): int
    {
        return $this->toppingPrice;
    }
}