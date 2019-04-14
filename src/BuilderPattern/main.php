<?php

use Kennynguyeenx\DesignPattern\BuilderPattern\InvalidResponseException;
use Kennynguyeenx\DesignPattern\BuilderPattern\ResponseBuilder;

require __DIR__ . '/../../vendor/autoload.php';

try {
    define('REDIRECT_TYPE', 1);
    define('OK_TYPE', 0);
    $type = isset($argv[1]) ? intval($argv[1]) : 0;


    $responseBuilder = new ResponseBuilder();
    if ($type == REDIRECT_TYPE) {
        $responseBuilder->setRedirect('http://google.com');
        $response = $responseBuilder->build();
        $response->render();
    } else {
        $responseBuilder->setTemplate('template A');
        $responseBuilder->setTitle('This is new page');
        $response = $responseBuilder->build();
        $response->render();
    }
} catch (InvalidResponseException $exception) {
    printf($exception->getMessage() . PHP_EOL);
}