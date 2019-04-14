<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Class GreenDraw
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
class GreenDraw implements DrawAPI
{
    /**
     * @param string $shape
     * @return void
     */
    public function draw(string $shape)
    {
        printf('Draw ' . $shape . ' with green color' . PHP_EOL);
    }
}