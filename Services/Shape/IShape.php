<?php
namespace Services\Shape;

interface IShape
{
    public function __construct(string $type, array $attributes);

    public function draw() : array;

    public function valid() : bool;

}