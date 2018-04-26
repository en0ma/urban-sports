<?php
namespace Services\Shape;

class Circle extends BaseShape implements IShape
{
    /**
     * The shape definition format, could be Matrix or binary (image)
     */
    const DEFINITION_FORMAT = 'matrix';

    /**
     * validate the attributes are enough to define this shape
     */
    protected function validateAttributes()
    {
        //handle validation here and set isValid
        $this->isValid = true;
    }

    /**
     * Draw shape
     *
     * @return array
     */
    public function draw(): array
    {
        return $this->toArray();
    }

    /**
     * The unique logic to define this shape
     */
    protected function definition()
    {
        //handle shape drawing algo here
    }

    /**
     * Get the shape definition format.
     *
     * @return string
     */
    protected function definitionFormat() : string
    {
        return self::DEFINITION_FORMAT;
    }
}
