<?php

namespace Animal;

include 'vendor/autoload.php';

new Cachorro();
new Cachorro();
new Cachorro();
new Chiuaua();
new Lobo();
new Lobo();
new Lobo();
new Gato();

echo 'animal ' . Animal::getQuantidade() . PHP_EOL;
echo 'mamifero ' . Mamifero::getQuantidade() . PHP_EOL;
echo 'vertebrado ' . Vertebrado::$quantidade_vertebrado . PHP_EOL;
echo 'viviparo ' . Viviparo::$quantidade_viviparo . PHP_EOL;
echo 'canino ' . Canino::getQuantidade() . PHP_EOL;
echo 'felino ' . Felino::getQuantidade() . PHP_EOL;
echo 'selvagem ' . Selvagem::$quantidade_selvagem . PHP_EOL;
echo 'cachorro ' . Cachorro::getQuantidade() . PHP_EOL;
echo 'chiuaua ' . Chiuaua::getQuantidade() . PHP_EOL;
echo 'lobo ' . Lobo::getQuantidade() . PHP_EOL;
echo 'gato ' . Gato::getQuantidade() . PHP_EOL;
