<?php

namespace Kennynguyeenx\DesignPattern\NullObjectPattern\Bad;

use Kennynguyeenx\DesignPattern\NullObjectPattern\Ipad;
use Kennynguyeenx\DesignPattern\NullObjectPattern\Iphone;
use Kennynguyeenx\DesignPattern\NullObjectPattern\MobileDevice;

/**
 * Class MobileDeviceFactory
 * @package Kennynguyeenx\DesignPattern\NullObjectPattern\Bad
 */
class MobileDeviceFactory
{
    /**
     * @param string $device
     * @return MobileDevice
     */
    public static function getDevice(string $device): MobileDevice
    {
        switch ($device) {
            case 'ipad':
                return new Ipad();
                break;
            case 'iphone':
                return new Iphone();
                break;
        }
    }
}