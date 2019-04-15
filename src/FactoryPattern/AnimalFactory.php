<?php

namespace Kennynguyeenx\DesignPattern\FactoryPattern;

use Exception;

/**
 * Class AnimalFactory
 * @package Kennynguyeenx\DesignPattern\FactoryPattern
 */
class AnimalFactory
{
    /**
     * @var array
     */
    private $registeredAnimalArray = [];
    /**
     * @var AnimalFactory|null
     */
    private static $instance;

    /**
     * AnimalFactory constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return AnimalFactory
     */
    public static function getInstance(): AnimalFactory
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @throws Exception
     */
    public function __clone()
    {
        throw new Exception('You can not clone singleton object');
    }

    /**
     * @param string $animalCode
     * @param string $animalClassName
     */
    public function registerAnimal(string $animalCode, string $animalClassName)
    {
        $this->registeredAnimalArray[$animalCode] = $animalClassName;
    }

    /**
     * @param string $animalCode
     * @param string $animalName
     * @return Animal
     */
    public function createAnimal(string $animalCode, string $animalName): Animal
    {
        return isset($this->registeredAnimalArray[$animalCode]) ?
            new $this->registeredAnimalArray[$animalCode]($animalName) :
            new NullAnimal($animalName);
    }
}
