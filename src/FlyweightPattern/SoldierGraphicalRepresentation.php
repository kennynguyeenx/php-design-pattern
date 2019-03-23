<?php

namespace Kennynguyeenx\DesignPattern\FlyweightPattern;

/**
 * Class SoldierGraphicalRepresentation
 * @package Kennynguyeenx\DesignPattern\FlyweightPattern
 */
class SoldierGraphicalRepresentation
{
    /**
     * @param int $previousLocationX
     * @param int $previousLocationY
     */
    public function removeOldLocation(int $previousLocationX, int $previousLocationY)
    {
        printf('Remove soldier at location: (' . $previousLocationX . ', ' . $previousLocationY . ')' . PHP_EOL);
    }

    /**
     * @param int $newLocationX
     * @param int $newLocationY
     */
    public function renderNewLocation(int $newLocationX, int $newLocationY)
    {
        printf('Render soldier at location: (' . $newLocationX . ', ' . $newLocationY . ')' . PHP_EOL);
    }
}