<?php

use Kennynguyeenx\DesignPattern\TemplateMethodPattern\NinhBinhTrip;

require __DIR__ . '/../../vendor/autoload.php';

$ninhBinhTrip = new NinhBinhTrip();
printf('Ninh Binh trip should be performed like below' . PHP_EOL);
$ninhBinhTrip->performTrip();

$daNangTrip = new \Kennynguyeenx\DesignPattern\TemplateMethodPattern\DaNangTrip();
printf('Da Nang trip should be performed like below' . PHP_EOL);
$daNangTrip->performTrip();