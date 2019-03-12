<?php

namespace Animal;

trait Constructable
{
    public function __construct()
    {
        ++self::$quantity;
        get_parent_class(__CLASS__) && parent::__construct();
        foreach (class_uses(__CLASS__) as $trait) {
            if (method_exists($trait, 'initialize')) {
                $trait::initialize(__CLASS__);
            }
        }
    }
}