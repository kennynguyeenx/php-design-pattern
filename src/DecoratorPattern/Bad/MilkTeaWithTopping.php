<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Bad;

use Kennynguyeenx\DesignPattern\DecoratorPattern\Beverage;

/**
 * Class MilkTeaWithTopping
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Bad
 */
class MilkTeaWithTopping extends Beverage
{
    /**
     * @var int
     */
    private $priceOfMilkTea = 30000;
    /**
     * @var int
     */
    private $priceOfTopping = 10000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->priceOfMilkTea + $this->priceOfTopping;
    }

}