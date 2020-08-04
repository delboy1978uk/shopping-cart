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
}