<?php

namespace Kennynguyeenx\DesignPattern\ObserverPattern;

/**
 * Class ObserverAbstract
 * @package Kennynguyeenx\DesignPattern\ObserverPattern
 */
abstract class ObserverAbstract
{
    /**
     * @param Subject $subject
     * @return void
     */
    abstract public function handle(Subject $subject);
}