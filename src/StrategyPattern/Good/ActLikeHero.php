<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Good;

/**
 * Class ActLikeHero
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Good
 */
class ActLikeHero implements ActionStyleAbstract
{
    /**
     * @return void
     */
    public function act()
    {
        printf('Act like a hero' . PHP_EOL);
    }
}