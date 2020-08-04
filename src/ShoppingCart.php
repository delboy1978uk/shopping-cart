<?php

namespace Del\Cart;

use Del\SessionManager;

class ShoppingCart implements ShoppingCartInterface
{
    /** @var SessionManager $sessionManager */
    private $sessionManager;

    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function addItemToCart(ItemInterface $item): void
    {
        // TODO: Implement addItemToCart() method.
    }

    public function removeItemFromCart(ItemInterface $item): void
    {
        // TODO: Implement removeItemFromCart() method.
    }

    public function getItems(): array
    {
        // TODO: Implement getItems() method.
    }

    public function emptyCart(): void
    {
        // TODO: Implement emptyCart() method.
    }
}
