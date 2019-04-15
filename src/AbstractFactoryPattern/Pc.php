<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class Pc
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class Pc extends Computer
{
    public function show()
    {
        printf('This is an pc with ram: ' . $this->ram->getInfo() . ' and hdd: ' . $this->hdd->getInfo() .
            ' and cpu: ' . $this->cpu->getInfo() . PHP_EOL);
    }
}
