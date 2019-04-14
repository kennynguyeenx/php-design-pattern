<?php

use Kennynguyeenx\DesignPattern\BridgePattern\Circle;
use Kennynguyeenx\DesignPattern\BridgePattern\GreenDraw;
use Kennynguyeenx\DesignPattern\BridgePattern\RedDraw;
use Kennynguyeenx\DesignPattern\BridgePattern\Square;

require __DIR__ . '/../../vendor/autoload.php';

$greenDraw = new GreenDraw();
$circle = new Circle($greenDraw, 3, 5, 10);
$circle->draw();
$square = new Square($greenDraw, 6, 3, 20);
$square->draw();

$redDraw = new RedDraw();
$circle->setDrawAPI($redDraw);
$circle->draw();
$square->setDrawAPI($redDraw);
$square->draw();