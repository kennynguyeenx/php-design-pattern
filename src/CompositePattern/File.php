<?php

namespace Kennynguyeenx\DesignPattern\CompositePattern;

use Exception;

/**
 * Class File
 * @package Kennynguyeenx\DesignPattern\CompositePattern
 */
class File extends AbstractItem
{
    /**
     * @var int
     */
    private $sizeInByte;

    /**
     * File constructor.
     * @param string $name
     * @param int $sizeInByte
     */
    public function __construct(string $name, int $sizeInByte)
    {
        $this->name = $name;
        $this->sizeInByte = $sizeInByte;
    }

    /**
     * @return int
     */
    public function getSizeInByte(): int
    {
        return $this->sizeInByte;
    }

    /**
     * @param int $sizeInByte
     */
    public function setSizeInByte(int $sizeInByte)
    {
        $this->sizeInByte = $sizeInByte;
    }

    /**
     * @param AbstractItem $item
     * @throws Exception
     */
    public function addItem(AbstractItem $item)
    {
        throw new Exception('Can not add more item to file');
    }

    /**
     * @param AbstractItem $item
     * @throws Exception
     */
    public function removeItem(AbstractItem $item)
    {
        throw new Exception('Can not remove item from file');
    }
}
