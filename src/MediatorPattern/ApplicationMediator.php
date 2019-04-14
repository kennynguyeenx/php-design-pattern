<?php

namespace Kennynguyeenx\DesignPattern\MediatorPattern;

/**
 * Class ApplicationMediator
 * @package Kennynguyeenx\DesignPattern\MediatorPattern
 */
class ApplicationMediator implements Mediator
{
    /**
     * @var Colleague[]
     */
    protected $colleagueArray = [];

    /**
     * ApplicationMediator constructor.
     */
    public function __construct()
    {
        $this->colleagueArray = [];
    }

    /**
     * @param Colleague $colleague
     */
    public function addColleague(Colleague $colleague)
    {
        $this->colleagueArray[] = $colleague;
    }

    /**
     * @param string $message
     * @param Colleague $originator
     */
    public function send(string $message, Colleague $originator)
    {
        /** @var Colleague $colleague */
        foreach ($this->colleagueArray as $colleague) {
            if ($colleague !== $originator) {
                $colleague->receive($message);
            }
        }
    }
}
