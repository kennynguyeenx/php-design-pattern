<?php

namespace Kennynguyeenx\DesignPattern\TemplateMethodPattern;

/**
 * Class NinhBinhTrip
 * @package Kennynguyeenx\DesignPattern\DecoratorPattern
 */
class NinhBinhTrip extends Trip
{
    /**
     * @return void
     */
    protected function doComingTransport()
    {
        printf('Come by bus' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doFirstDay()
    {
        printf('Visit Bai Dinh pagoda' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doSecondDay()
    {
        printf('Visit Trang An palace' . PHP_EOL);
    }

    /**
     * @return void
     */
    protected function doReturningTransport()
    {
        printf('Return by bus' . PHP_EOL);
    }
}