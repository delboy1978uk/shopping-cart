<?php

namespace Del\Cart;

use Del\SessionManager;

class ShoppingCart implements ShoppingCartInterface
{
    /** @var SessionManager $sessionManager */
    private $sessionManager;

    /** @var ItemInterface[] $cart */
    private $cart = [];

    public function __construct(SessionManager $sessionManager)
    {
        $this->sessionManager = $sessionManager;
    }

    public function addItemToCart(ItemInterface $item): void
    {
        $this->cart[] = $item;
    }

    public function removeItemFromCart(ItemInterface $item): void
    {
        // TODO: Implement removeItemFromCart() method.
    }

    public function getItems(): array
    {
        return $this->cart;
    }

    public function emptyCart(): void
    {
        // TODO: Implement emptyCart() method.
    }
}
