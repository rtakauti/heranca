<?php

namespace Animal;


require_once 'Constructable.php';
require_once 'Countable.php';
require_once 'Aliveable.php';


abstract class Animal
{
    use Constructable, Countable, Aliveable;

    public static $quantidade = 0;
}

