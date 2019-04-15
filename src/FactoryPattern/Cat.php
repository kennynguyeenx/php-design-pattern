<?php

namespace Kennynguyeenx\DesignPattern\FactoryPattern;

/**
 * Class Cat
 * @package Kennynguyeenx\DesignPattern\FactoryPattern
 */
class Cat extends Animal
{
    public function speak()
    {
        printf('Meo' . PHP_EOL);
    }
}
