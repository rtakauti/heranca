<?php

namespace Animal;


require_once 'Constructable.php';
require_once 'Countable.php';
require_once 'Aliveable.php';
require_once 'Vertebrado.php';
require_once 'Viviparo.php';

abstract class Mamifero extends Animal
{
    use Constructable, Countable, Aliveable, Viviparo, Vertebrado;

    public static $quantidade = 0;
}