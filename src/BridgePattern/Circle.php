<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Class Circle
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
class Circle extends Shape
{
    /**
     * @var int
     */
    protected $x = 0;
    /**
     * @var int
     */
    protected $y = 0;
    /**
     * @var int
     */
    protected $radius = 0;

    /**
     * Circle constructor.
     * @param DrawAPI $drawAPI
     * @param int $x
     * @param int $y
     * @param int $radius
     */
    public function __construct(DrawAPI $drawAPI, int $x, int $y, int $radius)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        $this->drawAPI->draw($this->prepareCircleToDraw());
    }

    /**
     * @return string
     */
    protected function prepareCircleToDraw(): string
    {
        return 'circle with center point is ('. $this->x . ', ' . $this->y . ') and radius ' . $this->radius;
    }
}