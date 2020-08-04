<?php

namespace Del\Cart;

class Option implements OptionsInterface
{
    /** @var array $attributes */
    private $attributes = [];

    /**
     * @param $key
     * @return mixed|null
     */
    public function getAttribute($key, $default = null)
    {
        return $this->attributes[$key] ?: $default;
    }

    /**
     * @param string $key
     * @param $value
     */
    public function setAttribute(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
}