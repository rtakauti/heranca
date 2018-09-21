<?php

namespace Animal;


trait Constructable
{
    public function __construct()
    {
        ++self::$quantidade;
        get_parent_class(__CLASS__)
            ? parent::__construct()
            : ++static::$quantidade;
        foreach (class_uses(__CLASS__) as $trait) {
            if (method_exists($trait, 'initialize')) {
                $trait::initialize(__CLASS__);
            }
        }
    }

}