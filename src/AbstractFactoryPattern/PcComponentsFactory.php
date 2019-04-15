<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class PcComponentsFactory
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class PcComponentsFactory implements ComputerComponentsFactory
{
    /**
     * @return RAM
     */
    public function getRAM(): RAM
    {
        return new PcRAM();
    }

    /**
     * @return HDD
     */
    public function getHDD(): HDD
    {
        return new PcHDD();
    }

    /**
     * @return CPU
     */
    public function getCPU(): CPU
    {
        return new PcCPU();
    }
}
