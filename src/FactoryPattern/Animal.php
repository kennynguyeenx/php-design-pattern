<?php

namespace Kennynguyeenx\DesignPattern\FactoryPattern;

/**
 * Class Animal
 * @package Kennynguyeenx\DesignPattern\FactoryPattern
 */
abstract class Animal
{
    /**
     * @var string
     */
    private $name;

    /**
     * Animal constructor.
     * @param string $name
     */
    public function __construct(string $name = '')
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

    abstract public function speak();
}
