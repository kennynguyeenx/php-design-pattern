<?php

namespace Kennynguyeenx\DesignPattern\CompositePattern;

/**
 * Class Folder
 * @package Kennynguyeenx\DesignPattern\CompositePattern
 */
class Folder extends AbstractItem
{
    /**
     * @var AbstractItem[]
     */
    private $itemArray;

    /**
     * Folder constructor.
     * @param string $name
     * @param array $itemArray
     */
    public function __construct(string $name, array $itemArray = [])
    {
        $this->name = $name;
        $this->itemArray = $itemArray;
    }

    /**
     * @return AbstractItem[]
     */
    public function getItemArray(): array
    {
        return $this->itemArray;
    }

    /**
     * @param AbstractItem[] $itemArray
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
    }

    /**
     * @param AbstractItem $item
     */
    public function addItem(AbstractItem $item)
    {
        if (!isset($this->itemArray[$item->getName()])) {
            $this->itemArray[$item->getName()] = $item;
        }
    }

    /**
     * @param AbstractItem $item
     */
    public function removeItem(AbstractItem $item)
    {
        if (isset($this->itemArray[$item->getName()])) {
            unset($this->itemArray[$item->getName()]);
        }
    }

    /**
     * @return int
     */
    public function getSizeInByte(): int
    {
        $sizeInByte = 0;
        foreach ($this->itemArray as $item) {
            $sizeInByte += $item->getSizeInByte();
        }

        return $sizeInByte;
    }
}
