<?php

namespace Kennynguyeenx\DesignPattern\FacadePattern;

/**
 * Class EmailNotification
 * @package Kennynguyeenx\DesignPattern\FacadePattern
 */
class EmailNotification extends Notification
{
    /**
     * @param string $target
     * @param string $message
     * @return mixed
     */
    public function notify(string $target, string $message)
    {
        printf('Sending message: ' . $message . ' to email: ' . $target . PHP_EOL);
    }
}