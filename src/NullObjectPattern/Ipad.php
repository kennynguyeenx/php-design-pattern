<?php

namespace Kennynguyeenx\DesignPattern\NullObjectPattern;

/**
 * Class Ipad
 * @package Kennynguyeenx\DesignPattern\NullObjectPattern
 */
class Ipad extends MobileDevice
{
    public function show()
    {
        printf('This is an ipad' . PHP_EOL);
    }
}