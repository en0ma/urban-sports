<?php
namespace Services\Shape;

class NullShape extends BaseShape implements IShape
{
    /**
     * validate the attributes are enough to define this shape
     */
    protected function validateAttributes()
    {
        $this->isValid = false;
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
    protected function definition() : null
    {
        return null;
    }

    /**
     * Get the shape definition format.
     *
     * @return string
     */
    protected function definitionFormat() : string
    {
        return '';
    }
}