<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Bad;

/**
 * Class ActorActsLikeHero
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Bad
 */
class ActorActsLikeHero extends Actor
{
    public function act()
    {
        printf('Act like a hero' . PHP_EOL);
    }
}