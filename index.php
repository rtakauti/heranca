<?php

namespace Animal;

spl_autoload_register(function ($class) {
    include_once 'app' . DIRECTORY_SEPARATOR . str_replace(__NAMESPACE__ . '\\', '', $class) . '.php';
});

new Cachorro();
new Cachorro();
new Cachorro();
new Lobo();
new Lobo();
new Lobo();
new Gato();

echo 'animal ' . Animal::$quantidade . PHP_EOL;
echo 'mamifero ' . Mamifero::$quantidade . PHP_EOL;
echo 'vertebrado ' . Vertebrado::$quantidade . PHP_EOL;
echo 'viviparo ' . Viviparo::$quantidade . PHP_EOL;
echo 'canino ' . Canino::$quantidade . PHP_EOL;
echo 'cachorro ' . Cachorro::getQuantidade() . PHP_EOL;
echo 'lobo ' . Lobo::getQuantidade() . PHP_EOL;
echo 'gato ' . Gato::getQuantidade() . PHP_EOL;
