<?php

namespace Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern;

/**
 * Class Request
 * @package Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern
 */
class Request
{
    /**
     * @var int
     */
    private $value;
    /**
     * @var string
     */
    private $description;

    /**
     * Request constructor.
     * @param int $value
     * @param string $description
     */
    public function __construct(int $value, string $description)
    {
        $this->value = $value;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
