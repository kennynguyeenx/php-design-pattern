<?php

use Kennynguyeenx\DesignPattern\StrategyPattern\Good\ActionStyleFactory;
use Kennynguyeenx\DesignPattern\StrategyPattern\Good\Actor;

require __DIR__ . '/../../../vendor/autoload.php';
$actor = new Actor('Tom Hank');
$actionStyleFactory = new ActionStyleFactory();
printf('Normally ' . $actor->getName() . ' will act' . PHP_EOL);
$actor->act();
$actor->setActionStyle($actionStyleFactory::getActionStyle('hero'));
printf('But in some films ' . $actor->getName() . ' will act' . PHP_EOL);
$actor->act();
$actor->setActionStyle($actionStyleFactory::getActionStyle('superman'));
printf('And in some other films ' . $actor->getName() . ' will act' . PHP_EOL);
$actor->act();
$actor->setActionStyle($actionStyleFactory::getActionStyle('wrongStyle'));
printf('And in some special cases ' . $actor->getName() . ' will do nothing' . PHP_EOL);
$actor->act();