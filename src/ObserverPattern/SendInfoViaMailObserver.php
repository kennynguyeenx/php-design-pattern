<?php

namespace Kennynguyeenx\DesignPattern\ObserverPattern;

/**
 * Class SendInfoViaMailObserver
 * @package Kennynguyeenx\DesignPattern\ObserverPattern
 */
class SendInfoViaMailObserver extends ObserverAbstract
{
    /**
     * @param Subject $subject
     * @return void
     */
    public function handle(Subject $subject)
    {
        printf('Sending info: ' . $subject->getLatestInfo() . ' with number of updates ' .
            $subject->getNumOfUpdates() .' via email ' . PHP_EOL);
    }
}