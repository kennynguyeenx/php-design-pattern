<?php

namespace Kennynguyeenx\DesignPattern\MediatorPattern;

/**
 * Interface Mediator
 * @package Kennynguyeenx\DesignPattern\MediatorPattern
 */
interface Mediator
{
    /**
     * @param string $message
     * @param Colleague $originator
     * @return void
     */
    public function send(string $message, Colleague $originator);
}
