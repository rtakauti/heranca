<?php

namespace Animal;

trait Countable
{
    private static $quantity = 0;

    public static function initialize($class)
    {
        foreach (class_uses($class) as $trait) {
            $quantity = 'quantity_' . strtolower(array_pop(explode('\\', $trait)));
            if (property_exists($trait, $quantity)) {
                ++$trait::${$quantity};
            }
        }
    }

    public static function getQuantity()
    {
        return static::$quantity;
    }
}