<?php

namespace Kennynguyeenx\DesignPattern\TemplateMethodPattern;

/**
 * Class DaNangTrip
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
class DaNangTrip extends Trip
{
    /**
     * @return void
     */
    protected function doComingTransport()
    {
        printf('Come by plane' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doFirstDay()
    {
        printf('Visit Thien Mu pagoda' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doSecondDay()
    {
        printf('Visit Hue palace' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doReturningTransport()
    {
        printf('Return by plane' . PHP_EOL);
    }
}