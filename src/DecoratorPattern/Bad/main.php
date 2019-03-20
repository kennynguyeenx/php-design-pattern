<?php

use Kennynguyeenx\DesignPattern\DecoratorPattern\Bad\CoffeeWithChocolate;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Bad\CoffeeWithTopping;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Bad\MilkTeaWithChocolate;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Bad\MilkTeaWithTopping;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Coffee;
use Kennynguyeenx\DesignPattern\DecoratorPattern\MilkTea;

require __DIR__ . '/../../../vendor/autoload.php';

$coffee = new Coffee();
$coffeeWithTopping = new CoffeeWithTopping();
$coffeeWithChocolate = new CoffeeWithChocolate();
$milkTea = new MilkTea();
$milkTeaWithTopping = new MilkTeaWithTopping();
$milkTeaWithChocolate = new MilkTeaWithChocolate();


printf('Coffee has price: ' . $coffee->price() . PHP_EOL);
printf('Coffee with topping has price: ' . $coffeeWithTopping->price() . PHP_EOL);
printf('Coffee with chocolate has price: ' . $coffeeWithChocolate->price() . PHP_EOL);
printf('MilkTea has price: ' . $milkTea->price() . PHP_EOL);
printf('MilkTea with topping has price: ' . $milkTeaWithTopping->price() . PHP_EOL);
printf('MilkTea with chocolate has price: ' . $milkTeaWithChocolate->price() . PHP_EOL);
// ... Imagine we have double topping and double chocolate for coffee and milk-tea.