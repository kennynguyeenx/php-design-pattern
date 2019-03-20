<?php

namespace Kennynguyeenx\DesignPattern\NullObjectPattern;

/**
 * Class Iphone
 * @package Kennynguyeenx\DesignPattern\NullObjectPattern
 */
class Iphone extends MobileDevice
{
    public function show()
    {
        printf('This is an iphone' . PHP_EOL);
    }
}