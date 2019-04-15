<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class ServerRAM
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class ServerRAM extends RAM
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'RAM for Server';
    }
}
