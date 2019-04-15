<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class CPU
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
abstract class CPU
{
    /**
     * @return string
     */
    public abstract function getInfo(): string;
}
