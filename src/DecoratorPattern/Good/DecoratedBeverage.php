<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Good;

use Kennynguyeenx\DesignPattern\DecoratorPattern\Beverage;

/**
 * Class DecoratedBeverage
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Good
 */
class DecoratedBeverage extends Beverage
{
    /**
     * @var Beverage
     */
    protected $beverage;

    /**
     * BeverageWithTopping constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->beverage->price();
    }
}