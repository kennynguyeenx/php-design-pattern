<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Class Shape
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
abstract class Shape
{
    /**
     * @var DrawAPI
     */
    protected $drawAPI;

    /**
     * Circle constructor.
     * @param DrawAPI $drawAPI
     */
    public function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    /**
     * @return DrawAPI
     */
    public function getDrawAPI(): DrawAPI
    {
        return $this->drawAPI;
    }

    /**
     * @param DrawAPI $drawAPI
     */
    public function setDrawAPI(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    public abstract function draw();
}