<?php

namespace Kennynguyeenx\DesignPattern\FlyweightPattern;

/**
 * Class SoldierFactory
 * @package Kennynguyeenx\DesignPattern\FlyweightPattern
 */
class SoldierFactory
{
    /**
     * @var null
     */
    private static $soldier = null;

    /**
     * SoldierFactory constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * @return Soldier
     */
    public static function getSoldier(): Soldier
    {
        if (is_null(self::$soldier)) {
            self::$soldier = new Soldier(new SoldierGraphicalRepresentation());
        }

        return self::$soldier;
    }
}