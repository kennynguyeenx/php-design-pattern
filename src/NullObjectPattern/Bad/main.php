<?php

use Kennynguyeenx\DesignPattern\NullObjectPattern\Bad\MobileDeviceFactory;

require __DIR__ . '/../../../vendor/autoload.php';

if (!empty($argv[1]) && in_array($argv[1], ['ipad', 'iphone'])) {
    $device = MobileDeviceFactory::getDevice($argv[1]);
    $device->show();
}