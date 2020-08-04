<?php

namespace DelTesting;

use Codeception\TestCase\Test;
use Del\Cart\Item;
use Del\Cart\ItemInterface;
use Del\Cart\ShoppingCart;
use Del\Cart\ShoppingCartInterface;
use Del\SessionManager;

class ShoppingCartTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var ShoppingCartInterface
     */
    protected $cart;

    protected function _before()
    {
        $session = SessionManager::getInstance();
        $this->cart = new ShoppingCart($session);
    }

    protected function _after()
    {
        unset($this->cart);
    }

    /**
     * Check tests are working
     */
    public function testAddItemToCart()
    {
        $item = new Item();
        $this->cart->addItemToCart($item);
        $items = $this->cart->getItems();
        $this->assertCount(1, $items);
        $this->assertInstanceOf(ItemInterface::class, $items[0]);
    }
}
