<?php

use Kennynguyeenx\DesignPattern\StrategyPattern\Bad\Actor;
use Kennynguyeenx\DesignPattern\StrategyPattern\Bad\ActorActsLikeHero;
use Kennynguyeenx\DesignPattern\StrategyPattern\Bad\ActorActsLikeSuperman;
use Kennynguyeenx\DesignPattern\StrategyPattern\Bad\ActorDoesNothing;

require __DIR__ . '/../../../vendor/autoload.php';
$actor = new Actor('Tom Hank');
printf('Normally ' . $actor->getName() . ' will act' . PHP_EOL);
$actor->act();
$actorActLikeHero = new ActorActsLikeHero('Tom Hank');
printf('But in some films ' . $actorActLikeHero->getName() . ' will act' . PHP_EOL);
$actor->act();
$actorActLikeSuperman = new ActorActsLikeSuperman('Tom Hank');
printf('But in some films ' . $actorActLikeSuperman->getName() . ' will act' . PHP_EOL);
$actor->act();
$actorDoesNothing = new ActorDoesNothing('Tom Hank');
printf('And in some special cases ' . $actor->getName() . ' will do nothing' . PHP_EOL);
$actor->act();