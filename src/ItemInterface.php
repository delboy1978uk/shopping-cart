<?php

namespace Del\Cart;

interface ItemInterface
{
    public function getId(): string;
    public function getName(): string;
    public function getPrice(): int;
    public function getQuantity(): int;
    public function getTax(): int;
    public function getOptions(): array;
    public function setId(string $id): void;
    public function setName(string $name): void;
    public function setPrice(int $price): void;
    public function setQuantity(int $quantity): void;
    public function setTax(int $tax): void;
    public function setOptions(array $options): void;
}