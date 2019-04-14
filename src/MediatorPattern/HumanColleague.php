<?php

namespace Kennynguyeenx\DesignPattern\MediatorPattern;

/**
 * Class HumanColleague
 * @package Kennynguyeenx\DesignPattern\MediatorPattern
 */
class HumanColleague extends Colleague
{
    /**
     * @param string $message
     * @return mixed|void
     */
    public function receive(string $message)
    {
        printf('Human colleague received the message: ' . $message . PHP_EOL);
    }
}
