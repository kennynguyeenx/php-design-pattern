<?php

namespace Kennynguyeenx\DesignPattern\AbstractFactoryPattern;

use Exception;

/**
 * Class ComputerFactory
 * @package Kennynguyeenx\DesignPattern\AbstractFactoryPattern
 */
class ComputerFactory
{
    /**
     * @param string $type
     * @return Computer
     * @throws Exception
     */
    public static function createComputer(string $type): Computer
    {
        if ($type == 'pc') {
            return new Pc(new PcComponentsFactory());
        } elseif ($type == 'server') {
            return new Server(new ServerComponentsFactory());
        }

        throw new Exception('Invalid type');
    }
}
