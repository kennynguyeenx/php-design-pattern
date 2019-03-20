<?php

use Kennynguyeenx\DesignPattern\DecoratorPattern\Good\BeverageWithChocolate;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Good\BeverageWithTopping;
use Kennynguyeenx\DesignPattern\DecoratorPattern\Coffee;
use Kennynguyeenx\DesignPattern\DecoratorPattern\MilkTea;

require __DIR__ . '/../../../vendor/autoload.php';

$coffee = new Coffee();
$coffeeWithTopping = new BeverageWithTopping($coffee);
$coffeeWithDoubleTopping = new BeverageWithTopping(new BeverageWithTopping($coffee));
$coffeeWithChocolate = new BeverageWithChocolate($coffee);
$coffeeWithDoubleChocolate = new BeverageWithChocolate(new BeverageWithChocolate($coffee));
$coffeeWithToppingAndChocolate = new BeverageWithChocolate(new BeverageWithTopping($coffee));
$milkTea = new MilkTea();
$milkTeaWithTopping = new BeverageWithTopping($milkTea);
$milkTeaWithChocolate = new BeverageWithChocolate($milkTea);

printf('Coffee has price: ' . $coffee->price() . PHP_EOL);
printf('Coffee with topping has price: ' . $coffeeWithTopping->price() . PHP_EOL);
printf('Coffee with double topping has price: ' . $coffeeWithDoubleTopping->price() . PHP_EOL);
printf('Coffee with chocolate has price: ' . $coffeeWithChocolate->price() . PHP_EOL);
printf('Coffee with double chocolate has price: ' . $coffeeWithDoubleChocolate->price() . PHP_EOL);
printf('Coffee with topping and chocolate has price: ' . $coffeeWithToppingAndChocolate->price() . PHP_EOL);
printf('MilkTea has price: ' . $milkTea->price() . PHP_EOL);
printf('MilkTea with topping has price: ' . $milkTeaWithTopping->price() . PHP_EOL);
printf('MilkTea with chocolate has price: ' . $milkTeaWithChocolate->price() . PHP_EOL);