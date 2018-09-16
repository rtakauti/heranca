<?php

namespace Animal;


require_once 'Countable.php';
require_once 'Vertebrado.php';
require_once 'Viviparo.php';

abstract class Mamifero extends Animal
{
    use Countable, Viviparo, Vertebrado;

    public static $quantidade = 0;
}