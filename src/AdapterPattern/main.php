<?php

use Kennynguyeenx\DesignPattern\AdapterPattern\AmazonS3StorageAdapter;
use Kennynguyeenx\DesignPattern\AdapterPattern\ExternalLibForAmazonS3;

require __DIR__ . '/../../vendor/autoload.php';

$storage = new AmazonS3StorageAdapter(new ExternalLibForAmazonS3());
var_dump($storage->save('data', 'path/to/object'));
var_dump($storage->load('path/to/object'));
var_dump($storage->delete('path/to/object'));