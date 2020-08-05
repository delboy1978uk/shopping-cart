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

    /**
     * Check tests are working
     */
    public function testRemovetemFromCart()
    {
        $item = new Item();
        $item->setId('custom1');
        $this->cart->addItemToCart($item);

        $item = new Item();
        $item->setId('custom2');
        $this->cart->addItemToCart($item);
        $toDelete = clone $item;

        $item = new Item();
        $item->setId('custom3');
        $this->cart->addItemToCart($item);
        $this->cart->removeItemFromCart($toDelete);

        $items = $this->cart->getItems();
        $this->assertCount(2, $items);
        $item1 = $items[0];
        $item2 = $items[2];
        $this->assertEquals('custom1', $item1->getId());
        $this->assertEquals('custom3', $item2->getId());
    }

    /**
     * Check tests are working
     */
    public function testEmptyCart()
    {
        $item = new Item();
        $this->cart->addItemToCart($item);
        $items = $this->cart->getItems();
        $this->assertCount(1, $items);
        $this->assertInstanceOf(ItemInterface::class, $items[0]);
        $this->cart->emptyCart();
        $items = $this->cart->getItems();
        $this->assertCount(0, $items);
    }

    /**
     * Check tests are working
     */
    public function testSession()
    {
        $item = new Item();
        $this->cart->addItemToCart($item);
        unset($this->cart);
        $session = SessionManager::getInstance();
        $this->cart = new ShoppingCart($session);
        $items = $this->cart->getItems();
        $this->assertCount(1, $items);
        $this->assertInstanceOf(ItemInterface::class, $items[0]);
    }
}
