<?php

namespace Kennynguyeenx\DesignPattern\FactoryPattern;

/**
 * Class Dog
 * @package Kennynguyeenx\DesignPattern\FactoryPattern
 */
class Dog extends Animal
{
    public function speak()
    {
        printf('Go' . PHP_EOL);
    }
}