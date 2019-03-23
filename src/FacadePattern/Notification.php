<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

/**
 * Class Notification
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
abstract class Notification
{
    /**
     * @param string $target
     * @param string $message
     * @return mixed
     */
    abstract public function notify(string $target, string $message);
}