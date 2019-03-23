<?php

namespace Kennynguyeenx\DesignPattern\FlyweightPattern;

/**
 * Class SoldierClient
 * @package Kennynguyeenx\DesignPattern\FlyweightPattern
 */
class SoldierClient
{
    /**
     * @var Soldier
     */
    private $soldier;
    /**
     * @var int
     */
    private $currentLocationX;
    /**
     * @var int
     */
    private $currentLocationY;

    /**
     * SoldierClient constructor.
     */
    public function __construct()
    {
        $this->soldier = SoldierFactory::getSoldier();
        $this->currentLocationX = 0;
        $this->currentLocationY = 0;
    }

    /**
     * @param int $newLocationX
     * @param int $newLocationY
     * @return mixed|void
     */
    public function moveSoldier(int $newLocationX, int $newLocationY)
    {
        $this->soldier->moveSoldier($this->currentLocationX, $this->currentLocationY, $newLocationX, $newLocationY);
        $this->currentLocationX = $newLocationX;
        $this->currentLocationY = $newLocationY;
    }
}