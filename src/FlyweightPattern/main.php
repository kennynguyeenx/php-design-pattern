<?php

use Kennynguyeenx\DesignPattern\FlyweightPattern\SoldierClient;

require __DIR__ . '/../../vendor/autoload.php';

/** @var SoldierClient[] $soldierArray */
$soldierArray = [
    new SoldierClient(),
    new SoldierClient()
];

$soldierArray[0]->moveSoldier(12, 23);
$soldierArray[1]->moveSoldier(13, 26);