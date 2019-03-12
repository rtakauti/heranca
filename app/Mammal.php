<?php

namespace Animal;

abstract class Mammal extends Animal
{
    use Constructable, Countable, Aliveable, Viviparous, Vertebrate;
}