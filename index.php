<?php

namespace Animal;

spl_autoload_register(function ($class) {
    include_once 'app' . DIRECTORY_SEPARATOR . str_replace(__NAMESPACE__ . '\\', '', $class) . '.php';
});

new Dog();
new Dog();
new Dog();
new Wolf();
new Wolf();
new Cat();

echo 'animal ' . Animal::getQuantity() . PHP_EOL;
echo 'mamifero ' . Mammal::getQuantity() . PHP_EOL;
echo 'vertebrado ' . Vertebrate::$quantity_vertebrate . PHP_EOL;
echo 'viviparo ' . Viviparous::$quantity_viviparous . PHP_EOL;
echo 'canino ' . Canine::getQuantity() . PHP_EOL;
echo 'felino ' . Feline::getQuantity() . PHP_EOL;
echo 'selvagem ' . Wild::$quantity_wild . PHP_EOL;
echo 'cachorro ' . Dog::getQuantity() . PHP_EOL;
echo 'lobo ' . Wolf::getQuantity() . PHP_EOL;
echo 'gato ' . Cat::getQuantity() . PHP_EOL;
