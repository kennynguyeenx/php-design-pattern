<?php

namespace Kennynguyeenx\DesignPattern\ObserverPattern;

/**
 * Class PrintInfoObserver
 * @package Kennynguyeenx\DesignPattern\ObserverPattern
 */
class PrintInfoObserver extends ObserverAbstract
{
    /**
     * @param Subject $subject
     * @return void
     */
    public function handle(Subject $subject)
    {
        printf('Latest info: ' . $subject->getLatestInfo() . PHP_EOL);
        printf('Number of updates: ' . $subject->getNumOfUpdates() . PHP_EOL);
    }
}