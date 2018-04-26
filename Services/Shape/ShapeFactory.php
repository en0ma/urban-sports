<?php
namespace Services\Shape;

class ShapeFactory
{
    public static function create(array $collection) : ?IShape
    {
        $type = $collection['type'] ?? '';
        $class = __NAMESPACE__ . '\\' . ucfirst($type);
        return class_exists($class) ? new $class($type, $collection['params']) : null;
    }
}
