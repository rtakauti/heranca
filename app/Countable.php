<?php

namespace Animal;


trait Countable
{
    public static function initialize($class)
    {
        foreach (class_uses($class) as $trait) {
            if (property_exists($trait, 'quantidade')) {
                ++$trait::$quantidade;
            }
        }
    }

    public static function getQuantidade()
    {
        return static::$quantidade;
    }
}