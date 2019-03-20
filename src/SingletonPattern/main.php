<?php

use Kennynguyeenx\DesignPattern\SingletonPattern\SingletonDatabase;

require __DIR__ . '/../../vendor/autoload.php';

$database = SingletonDatabase::getInstance();
var_dump($database->connect());
$otherDatabase = SingletonDatabase::getInstance();
var_dump($database->connect());