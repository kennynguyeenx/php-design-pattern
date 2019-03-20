<?php

namespace Kennynguyeenx\DesignPattern\DecoratorPattern;

/**
 * Class Trip
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
abstract class Beverage
{
    /**
     * @return int
     */
    abstract public function price(): int;
}