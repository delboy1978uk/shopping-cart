<?php

namespace Del\Cart;

use Del\SessionManager;

interface ShoppingCartInterface
{
    public function __construct(SessionManager $sessionManager);
    public function addItemToCart(ItemInterface $item): void ;
    public function removeItemFromCart(ItemInterface $item): void;
    public function getItems(): array;
    public function emptyCart(): void;
}