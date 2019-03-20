<?php

use Kennynguyeenx\DesignPattern\NullObjectPattern\Good\MobileDeviceFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$device = MobileDeviceFactory::getDevice($argv[1]);
$device->show();