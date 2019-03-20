<?php

namespace Kennynguyeenx\DesignPattern\NullObjectPattern\Good;

use Kennynguyeenx\DesignPattern\NullObjectPattern\Ipad;
use Kennynguyeenx\DesignPattern\NullObjectPattern\Iphone;
use Kennynguyeenx\DesignPattern\NullObjectPattern\MobileDevice;

/**
 * Class MobileDeviceFactory
 * @package Kennynguyeenx\DesignPattern\NullObjectPattern\Good
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
            default:
                return new NullDevice();
                break;
        }
    }
}