<?php
namespace Services\Shape;

abstract class BaseShape
{
    /**
     * Shape name.
     *
     * @var string
     */
    protected $type;

    /**
     * Shape's attributes
     *
     * @var array
     */
    protected $attributes;

    /**
     * @var bool
     */
    protected $isValid;

    /**
     * Create a shape instance and set basic attributes
     *
     * @param string $type
     * @param array $attributes
     */
    public function __construct(string $type, array $attributes)
    {
        $this->type = $type;
        $this->attributes = $attributes;
        $this->validateAttributes();
    }

    /**
     * Get shape for presentation.
     *
     * @return array
     */
    protected function toArray() : array
    {
        return [
            'type' => $this->type,
            'is_valid' => $this->valid(),
            'definition' => $this->definition(),
            'definition_format' => $this->definitionFormat(),
        ];
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return $this->isValid;
    }

    abstract protected function definition();
    abstract protected function validateAttributes();
    abstract protected function definitionFormat();
}
