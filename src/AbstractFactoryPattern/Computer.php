<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class Computer
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
abstract class Computer
{
    /**
     * @var RAM
     */
    protected $ram;
    /**
     * @var HDD
     */
    protected $hdd;
    /**
     * @var CPU
     */
    protected $cpu;
    /**
     * @var ComputerComponentsFactory
     */
    protected $computerComponentsFactory;

    /**
     * Computer constructor.
     * @param ComputerComponentsFactory $computerComponentsFactory
     */
    public function __construct(ComputerComponentsFactory $computerComponentsFactory)
    {
        $this->computerComponentsFactory = $computerComponentsFactory;
        $this->ram = $this->computerComponentsFactory->getRAM();
        $this->hdd = $this->computerComponentsFactory->getHDD();
        $this->cpu = $this->computerComponentsFactory->getCPU();
    }

    public abstract function show();
}
