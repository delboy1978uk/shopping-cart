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

        if ($this->sessionManager->has('shopping-cart')) {
            $this->cart = $this->sessionManager->get('shopping-cart');
        }
    }

    public function addItemToCart(ItemInterface $item): void
    {
        $this->cart[] = $item;
        $this->sessionManager->set('shopping-cart', $this->cart);
    }

    /**
     * @param ItemInterface $item
     */
    public function removeItemFromCart(ItemInterface $item): void
    {
        $itemId = $item->getId();

        /**
         * @var int $index
         * @var Item $item
         */
        foreach ($this->cart as $index => $cartItem) {
            if ($cartItem->getId() === $itemId) {
                unset($this->cart[$index]);
                $this->sessionManager->set('shopping-cart', $this->cart);
            }
        }
    }

    public function getItems(): array
    {
        return $this->cart;
    }

    public function emptyCart(): void
    {
        $this->cart = [];
        $this->sessionManager->set('shopping-cart', $this->cart);
    }
}
