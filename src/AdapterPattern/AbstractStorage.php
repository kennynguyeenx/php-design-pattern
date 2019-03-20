<?php

namespace Kennynguyeenx\DesignPattern\AdapterPattern;

/**
 * Class AbstractStorage
 * @package Kennynguyeenx\DesignPattern\AdapterPattern
 */
abstract class AbstractStorage
{
    /**
     * @param string $data
     * @param string $path
     * @return bool
     */
    abstract public function save(string $data, string $path): bool;

    /**
     * @param string $path
     * @return string
     */
    abstract public function load(string $path): string;

    /**
     * @param string $path
     * @return bool
     */
    abstract public function delete(string $path): bool;
}