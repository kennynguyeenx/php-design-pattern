<?php

namespace Kennynguyeenx\DesignPattern\ObserverPattern;

/**
 * Class ConcreteSubject
 * @package Kennynguyeenx\DesignPattern\ObserverPattern
 */
class ConcreteSubject extends Subject
{
    /**
     * @param string $latestInfo
     */
    protected function doUpdateInfo(string $latestInfo)
    {
        $this->latestInfo = $latestInfo;
        $this->numOfUpdates++;
    }
}