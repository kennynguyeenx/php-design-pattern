<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

/**
 * Class ServerHDD
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class ServerHDD extends HDD
{
    /**
     * @return string
     */
    public function getInfo(): string
    {
        return 'HDD for Server';
    }
}
