<?php

namespace Kennynguyeenx\DesignPattern\TemplateMethodPattern;

/**
 * Class Trip
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
abstract class Trip
{
    /**
     * @return void
     */
    public final function performTrip()
    {
        $this->doComingTransport();
        $this->doFirstDay();
        $this->doSecondDay();
        $this->doReturningTransport();
    }

    /**
     * @return void
     */
    abstract protected function doComingTransport();

    /**
     * @return void
     */
    abstract protected function doFirstDay();

    /**
     * @return void
     */
    abstract protected function doSecondDay();

    /**
     * @return void
     */
    abstract protected function doReturningTransport();
}