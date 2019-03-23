<?php

namespace Kennynguyeenx\DesignPattern\FlyweightPattern;

/**
 * Class Soldier
 * @package Kennynguyeenx\DesignPattern\FlyweightPattern
 */
class Soldier implements SoldierInterface
{
    /**
     * @var SoldierGraphicalRepresentation
     */
    private $representation;

    /**
     * Soldier constructor.
     * @param SoldierGraphicalRepresentation $representation
     */
    public function __construct(SoldierGraphicalRepresentation $representation)
    {
        $this->representation = $representation;
    }

    /**
     * @param int $previousLocationX
     * @param int $previousLocationY
     * @param int $newLocationX
     * @param int $newLocationY
     * @return mixed|void
     */
    public function moveSoldier(int $previousLocationX, int $previousLocationY, int $newLocationX, int $newLocationY)
    {
        $this->representation->removeOldLocation($previousLocationY, $previousLocationY);
        $this->representation->renderNewLocation($newLocationX, $newLocationY);
    }
}