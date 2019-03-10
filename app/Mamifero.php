<?php

namespace Animal;

abstract class Mamifero extends Animal
{
    use Contavel, Viviparo, Vertebrado;

    public static $quantidade = 0;
}