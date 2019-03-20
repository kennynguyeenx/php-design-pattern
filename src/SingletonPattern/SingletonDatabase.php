<?php

namespace Kennynguyeenx\DesignPattern\SingletonPattern;

use Exception;

/**
 * Class SingletonDatabase
 * @package Kennynguyeenx\DesignPattern\SingletonPattern
 */
class SingletonDatabase
{
    /**
     * @var string
     */
    private $connection;
    /**
     * @var SingletonDatabase|null
     */
    private static $instance;

    /**
     * SingletonDatabase constructor.
     */
    private function __construct()
    {
        // Should create real connection to database
        printf('SingletonDatabase object is created' . PHP_EOL);
        $this->connection = 'Connection';
    }

    /**
     * @return SingletonDatabase
     */
    public static function getInstance(): SingletonDatabase
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @throws Exception
     */
    private function __clone()
    {

    }

    /**
     * @throws Exception
     */
    private function __wakeup()
    {

    }

    /**
     * @return string
     */
    public function connect(): string
    {
        return $this->connection;
    }
}