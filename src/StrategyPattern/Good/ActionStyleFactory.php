<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Good;

/**
 * Class ActionStyleFactory
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Good
 */
class ActionStyleFactory
{
    /**
     * @param string $style
     * @return ActionStyleAbstract
     */
    public static function getActionStyle(string $style): ActionStyleAbstract
    {
        switch ($style) {
            case 'hero':
                return new ActLikeHero();
                break;
            case 'superman':
                return new ActLikeSuperman();
                break;
            default:
                return new NullActionStyle();
                break;
        }
    }
}