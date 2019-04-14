<?php

namespace Kennynguyeenx\DesignPattern\BridgePattern;

/**
 * Class Square
 * @package Kennynguyeenx\DesignPattern\BridgePattern
 */
class Square extends Shape
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
    protected $edgeLength = 0;

    /**
     * Circle constructor.
     * @param DrawAPI $drawAPI
     * @param int $x
     * @param int $y
     * @param int $edgeLength
     */
    public function __construct(DrawAPI $drawAPI, int $x, int $y, int $edgeLength)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->edgeLength = $edgeLength;
    }

    public function draw()
    {
        $this->drawAPI->draw($this->prepareSquareToDraw());
    }

    /**
     * @return string
     */
    protected function prepareSquareToDraw(): string
    {
        return 'square with top left point is ('. $this->x . ', ' . $this->y . ') and edge ' . $this->edgeLength;
    }
}