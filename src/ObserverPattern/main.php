<?php

use Kennynguyeenx\DesignPattern\ObserverPattern\ConcreteSubject;
use Kennynguyeenx\DesignPattern\ObserverPattern\PrintInfoObserver;
use Kennynguyeenx\DesignPattern\ObserverPattern\SendInfoViaMailObserver;

require __DIR__ . '/../../vendor/autoload.php';

$subject = new ConcreteSubject();
$printInfoObserver = new PrintInfoObserver();
$sendInfoViaMailObserver = new SendInfoViaMailObserver();
$subject->attachObserver($printInfoObserver);

// Update info for the first time
$subject->updateInfo('Latest info at: ' . date('Y-m-d H:i:s'));

sleep(2);

// Update info for the second time
$subject->attachObserver($sendInfoViaMailObserver);
$subject->updateInfo('Latest info at: ' . date('Y-m-d H:i:s'));

sleep(2);

// Update info for the third time
$subject->detachObserver($printInfoObserver);
$subject->updateInfo('Latest info at: ' . date('Y-m-d H:i:s'));