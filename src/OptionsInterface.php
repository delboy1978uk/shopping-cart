<?php

namespace Del\Cart;

interface OptionsInterface
{
    public function getAttribute($key, $default = null);
    public function setAttribute(string $key, $value): void;
    public function setAttributes(array $attributes): void;
    public function getAttributes(): array;
}