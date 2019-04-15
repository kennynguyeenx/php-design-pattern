<?php

namespace Kennynguyeenx\DesignPattern\CompositePattern;

/**
 * Class AbstractItem
 * @package Kennynguyeenx\DesignPattern\CompositePattern
 */
abstract class AbstractItem
{
    /**
     * @var string
     */
    protected $name;

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

    /**
     * @return int
     */
    public abstract function getSizeInByte(): int;

    /**
     * @param AbstractItem $item
     * @return void
     */
    public abstract function addItem(AbstractItem $item);

    /**
     * @param AbstractItem $item
     * @return void
     */
    public abstract function removeItem(AbstractItem $item);
}
