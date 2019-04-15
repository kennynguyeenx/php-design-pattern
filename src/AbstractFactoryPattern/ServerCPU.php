<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class CPU
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class ServerCPU extends CPU
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'CPU for Server';
    }
}
