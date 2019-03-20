<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Bad;

/**
 * Class Actor
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Bad
 */
class Actor
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Actor constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function act()
    {
        printf('Act like a normal person' . PHP_EOL);
    }
}