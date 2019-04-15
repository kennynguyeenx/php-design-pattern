<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class PcCPU
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class PcCPU extends CPU
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'CPU for PC';
    }
}
