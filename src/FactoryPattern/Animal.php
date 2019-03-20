<?php

namespace Kennynguyeenx\DesignPattern\FactoryPattern;

abstract class Animal
{
    /**
     * @var string
     */
    private $name;

    /**
     * Animal constructor.
     */
    public function __construct()
    {

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    abstract public function speak();
}