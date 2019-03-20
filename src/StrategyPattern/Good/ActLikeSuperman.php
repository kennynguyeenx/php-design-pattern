<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Good;

/**
 * Class ActLikeSuperman
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Good
 */
class ActLikeSuperman implements ActionStyleAbstract
{
    /**
     * @return void
     */
    public function act()
    {
        printf('Act like a superman' . PHP_EOL);
    }
}