<?php

namespace Kennynguyeenx\DesignPattern\MediatorPattern;

/**
 * Class MachineColleague
 * @package Kennynguyeenx\DesignPattern\MediatorPattern
 */
class MachineColleague extends Colleague
{
    /**
     * @param string $message
     * @return mixed|void
     */
    public function receive(string $message)
    {
        printf('Machine colleague received the message: ' . $message . PHP_EOL);
    }
}
