<?php

namespace Animal;


trait Countable
{
    public static $quantidade = 0;

    public function __construct()
    {
        ++self::$quantidade;
        if (__CLASS__ !== 'Animal\Animal') {
            parent::__construct();
        }

        if (__CLASS__ === 'Animal\Animal') {
            ++static::$quantidade;
        }

        foreach (class_uses(self::class) as $trait) {
            if ($trait !== __TRAIT__) {
                ++$trait::$quantidade;
            }
        }
    }
}