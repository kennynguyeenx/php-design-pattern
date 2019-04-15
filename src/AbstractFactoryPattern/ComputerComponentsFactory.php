<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Interface ComputerComponentsFactory
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
interface ComputerComponentsFactory
{
    /**
     * @return RAM
     */
    public function getRAM(): RAM;

    /**
     * @return HDD
     */
    public function getHDD(): HDD;

    /**
     * @return CPU
     */
    public function getCPU(): CPU;
}
