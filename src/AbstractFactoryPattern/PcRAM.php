<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class PcRAM
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class PcRAM extends RAM
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'RAM for PC';
    }
}
