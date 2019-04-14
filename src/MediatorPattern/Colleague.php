<?php

namespace Kennynguyeenx\DesignPattern\MediatorPattern;

/**
 * Class Colleague
 * @package Kennynguyeenx\DesignPattern\MediatorPattern
 */
abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    /**
     * Colleague constructor.
     * @param Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @return Mediator
     */
    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    /**
     * @param string $message
     */
    public function send(string $message)
    {
        $this->mediator->send($message, $this);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public abstract function receive(string $message);
}
