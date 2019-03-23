<?php

namespace Kennynguyeenx\DesignPattern\FlyweightPattern;

/**
 * Class SoldierInterface
 * @package Kennynguyeenx\DesignPattern\FlyweightPattern
 */
interface SoldierInterface
{
    /**
     * @param int $previousLocationX
     * @param int $previousLocationY
     * @param int $newLocationX
     * @param int $newLocationY
     * @return mixed
     */
    public function moveSoldier(int $previousLocationX, int $previousLocationY, int $newLocationX, int $newLocationY);
}