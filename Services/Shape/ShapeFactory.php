<?php
namespace Services\Shape;

class ShapeFactory
{
    public static function create(array $collection) : IShape
    {
        $type = $collection['type'];
        $class = __NAMESPACE__ . '\\' . ucfirst($type);
        if (class_exists($class)) {
            $shape = new $class($type, $collection['params']);
            if ($shape->valid()) {
                return $shape;
            }
        }
        return new NullShape($type, $collection['params']);
    }
}
