<?php

namespace Kennynguyeenx\DesignPattern\ObserverPattern;

/**
 * Class Subject
 * @package Kennynguyeenx\DesignPattern\ObserverPattern
 */
abstract class Subject
{
    /**
     * @var int
     */
    protected $numOfUpdates = 0;
    /**
     * @var string
     */
    protected $latestInfo = '';
    /**
     * @var array
     */
    protected $observerArray = [];

    /**
     * @param string $latestInfo
     */
    public final function updateInfo(string $latestInfo)
    {
        $this->doUpdateInfo($latestInfo);
        $this->notifyObservers();
    }

    /**
     * @param string $latestInfo
     */
    protected function doUpdateInfo(string $latestInfo)
    {
        $this->latestInfo = $latestInfo;
    }

    /**
     * @return int
     */
    public function getNumOfUpdates(): int
    {
        return $this->numOfUpdates;
    }

    /**
     * @return string
     */
    public function getLatestInfo(): string
    {
        return $this->latestInfo;
    }

    public function attachObserver(ObserverAbstract $observer)
    {
        $className = get_class($observer);
        if (!in_array($className, array_keys($this->observerArray))) {
            $this->observerArray[$className] = $observer;
        }
    }

    public function detachObserver(ObserverAbstract $observer)
    {
        $className = get_class($observer);
        if (in_array($className, array_keys($this->observerArray))) {
            unset($this->observerArray[$className]);
        }
    }

    protected function notifyObservers()
    {
        /** @var ObserverAbstract $observer */
        foreach ($this->observerArray as $observer) {
            $observer->handle($this);
        }
    }
}