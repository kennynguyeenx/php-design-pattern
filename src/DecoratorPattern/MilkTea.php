<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern;

/**
 * Class MilkTea
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
class MilkTea extends Beverage
{
    /**
     * @var int
     */
    private $price = 30000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->price;
    }
}