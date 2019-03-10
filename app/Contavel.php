<?php

namespace Animal;

trait Contavel
{
    private static $quantidade = 0;

    public function __construct()
    {
        ++self::$quantidade;
        get_parent_class(__CLASS__) && parent::__construct();
        foreach (class_uses(self::class) as $trait) {
            if ($trait === __TRAIT__) {continue;}
            $quantidade = 'quantidade_' . strtolower(array_pop(explode('\\', $trait)));
            ++$trait::${$quantidade};
        }
    }

    public static function getQuantidade(): int
    {
        return static::$quantidade;
    }
}