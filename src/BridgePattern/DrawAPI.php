<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Interface DrawAPI
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
interface DrawAPI
{
    /**
     * @param string $shape
     * @return void
     */
    public function draw(string $shape);
}