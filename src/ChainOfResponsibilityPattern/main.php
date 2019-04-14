<?php

use Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern\ConcreteHandlerOne;
use Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern\ConcreteHandlerThree;
use Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern\ConcreteHandlerTwo;
use Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern\Request;

require __DIR__ . '/../../vendor/autoload.php';

$handlerOne = new ConcreteHandlerOne();
$handlerTwo = new ConcreteHandlerTwo();
$handlerThree = new ConcreteHandlerThree();
$handlerTwo->setSuccessor($handlerThree);
$handlerOne->setSuccessor($handlerTwo);

$handlerOne->handleRequest(new Request(-1, 'Request 1'));
$handlerOne->handleRequest(new Request(0, 'Request 2'));
$handlerOne->handleRequest(new Request(51, 'Request 3'));
