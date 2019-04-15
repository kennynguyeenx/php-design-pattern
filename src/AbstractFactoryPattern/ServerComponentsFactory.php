<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class ServerComponentsFactory
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class ServerComponentsFactory implements ComputerComponentsFactory
{
    /**
     * @return RAM
     */
    public function getRAM(): RAM
    {
        return new ServerRAM();
    }

    /**
     * @return HDD
     */
    public function getHDD(): HDD
    {
        return new ServerHDD();
    }

    /**
     * @return CPU
     */
    public function getCPU(): CPU
    {
        return new ServerCPU();
    }
}
