<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Bad;

/**
 * Class ActorActsLikeSuperman
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Bad
 */
class ActorActsLikeSuperman extends Actor
{
    public function act()
    {
        printf('Act like a superman' . PHP_EOL);
    }
}