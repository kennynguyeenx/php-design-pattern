<?php

use Kennynguyeenx\DesignPattern\FactoryPattern\AnimalFactory;
use Kennynguyeenx\DesignPattern\FactoryPattern\Cat;
use Kennynguyeenx\DesignPattern\FactoryPattern\Dog;

require __DIR__ . '/../../vendor/autoload.php';

AnimalFactory::getInstance()->registerAnimal('d', Dog::class);
AnimalFactory::getInstance()->registerAnimal('c', Cat::class);

$animal1 = AnimalFactory::getInstance()->createAnimal('d', 'Ki Ki');
$animal1->speak();

$animal2 = AnimalFactory::getInstance()->createAnimal('c', 'Mi Mi');
$animal2->speak();

$animal3 = AnimalFactory::getInstance()->createAnimal('s', '');
$animal3->speak();
