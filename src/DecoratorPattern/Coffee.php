<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern;

/**
 * Class Coffee
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
class Coffee extends Beverage
{
    /**
     * @var int
     */
    private $price = 20000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->price;
    }
}