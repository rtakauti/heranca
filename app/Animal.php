<?php

namespace Animal;


require_once 'Countable.php';

abstract class Animal
{
    use Countable;

    public static $quantidade = 0;
}

