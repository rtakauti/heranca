<?php

namespace Animal;


trait Countable
{
    public function __construct()
    {
        ++self::$quantidade;
        get_parent_class(__CLASS__)
            ? parent::__construct()
            : ++static::$quantidade;
        foreach (class_uses(self::class) as $trait) {
            if (method_exists($trait, 'initialize')) {
                $trait::initialize(__CLASS__);
            }
        }
    }

    public static function initialize($class)
    {
        foreach (class_uses($class) as $trait) {
            if ($trait !== __TRAIT__) {
                ++$trait::$quantidade;
            }
        }
    }

    public static function getQuantidade()
    {
        return static::$quantidade;
    }
}