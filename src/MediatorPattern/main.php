<?php

use Kennynguyeenx\DesignPattern\MediatorPattern\ApplicationMediator;
use Kennynguyeenx\DesignPattern\MediatorPattern\HumanColleague;
use Kennynguyeenx\DesignPattern\MediatorPattern\MachineColleague;

require __DIR__ . '/../../vendor/autoload.php';

$mediator = new ApplicationMediator();
$humanColleague = new HumanColleague($mediator);
$machineColleague = new MachineColleague($mediator);
$mediator->addColleague($humanColleague);
$mediator->addColleague($machineColleague);

$humanColleague->send('Hello');
$machineColleague->send('Hi');
