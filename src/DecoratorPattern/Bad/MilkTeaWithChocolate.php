<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern\Bad;

use Kennynguyeenx\DesignPattern\DecoratorPattern\Beverage;

/**
 * Class MilkTeaWithChocolate
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern\Bad
 */
class MilkTeaWithChocolate extends Beverage
{
    /**
     * @var int
     */
    private $priceOfMilkTea = 30000;
    /**
     * @var int
     */
    private $priceOfChocolate = 15000;

    /**
     * @return int
     */
    public function price(): int
    {
        return $this->priceOfMilkTea + $this->priceOfChocolate;
    }

}