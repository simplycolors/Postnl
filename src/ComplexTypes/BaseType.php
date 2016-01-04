<?php namespace DivideBV\Postnl\ComplexTypes;

use ReflectionClass;

abstract class BaseType
{

    /**
     * Create a class instance statically without calling the constructor.
     */
    public static function create()
    {
        $className = get_called_class();
        return new $className();
    }
}
