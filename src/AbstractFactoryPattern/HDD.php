<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class HDD
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
abstract class HDD
{
    /**
     * @return string
     */
    public abstract function getInfo(): string;
}
