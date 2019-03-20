<?php

namespace Kennynguyeenx\DesignPattern\StrategyPattern\Good;

/**
 * Class Actor
 * @package Kennynguyeenx\DesignPattern\StrategyPattern\Good
 */
class Actor
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var ActionStyleAbstract
     */
    private $actionStyle;

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

    /**
     * @return ActionStyleAbstract
     */
    public function getActionStyle(): ActionStyleAbstract
    {
        return $this->actionStyle;
    }

    /**
     * @param ActionStyleAbstract $actionStyle
     */
    public function setActionStyle(ActionStyleAbstract $actionStyle)
    {
        $this->actionStyle = $actionStyle;
    }

    public function act()
    {
        if (is_null($this->actionStyle)) {
            printf('Act like a normal person' . PHP_EOL);
        } else {
            $this->actionStyle->act();
        }
    }
}