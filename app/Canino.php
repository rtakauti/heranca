<?php

namespace Animal;


require_once 'Countable.php';

abstract class Canino extends Mamifero
{
    use Countable;

    public static $quantidade = 0;
}