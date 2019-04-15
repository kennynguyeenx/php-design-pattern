<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class Server
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class Server extends Computer
{
    public function show()
    {
        printf('This is a server with ram: ' . $this->ram->getInfo() . ' and hdd: ' . $this->hdd->getInfo() .
            ' and cpu: ' . $this->cpu->getInfo() . PHP_EOL);
    }
}
