<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Class RedDraw
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
class RedDraw implements DrawAPI
{
    /**
     * @param string $shape
     * @return void
     */
    public function draw(string $shape)
    {
        printf('Draw ' . $shape . ' with red color' . PHP_EOL);
    }
}