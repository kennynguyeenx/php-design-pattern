<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class PcHDD
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class PcHDD extends HDD
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'HDD for PC';
    }
}
