<?php

namespace Kennynguyeenx\DesignPattern\FactoryMethodPattern;

/**
 * Class Pizza
 * @package Kennynguyeenx\DesignPattern\FactoryMethodPattern
 */
abstract class Pizza
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function prepare()
    {
        printf('Preparing ' . $this->name . PHP_EOL);
    }

    public function bake()
    {
        printf('Bake for 25 minutes at 350 ' . PHP_EOL);
    }

    public function cut()
    {
        printf('Cutting the pizza into diagonal slices ' . PHP_EOL);
    }

    public function box()
    {
        printf('Place pizza in official box ' . PHP_EOL);
    }
}
