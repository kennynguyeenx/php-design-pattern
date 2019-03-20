<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Good;

/**
 * Class ActLikeHero
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Good
 */
class NullActionStyle implements ActionStyleAbstract
{
    /**
     * @return void
     */
    public function act()
    {
        // Do nothing
    }
}