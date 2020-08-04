<?php

namespace DelTesting;

use Codeception\TestCase\Test;
use Del\Cart\Item;
use Del\Cart\ItemInterface;

class ItemTest extends Test
{

    /**
     * @var ItemInterface
     */
    protected $item;

    protected function _before()
    {
        $this->item = new Item();
    }

    protected function _after()
    {
        unset($this->item);
    }

    public function testGettersAndSetters()
    {
        $this->item->setId('id-5');
        $this->item->setName('Dongle');
        $this->item->setPrice(10000);
        $this->item->setQuantity(3);
        $this->item->setTax(20);
        $this->item->setOptions([
            'color' => 'red',
            'features' => 'awesome',
        ]);
        $this->assertEquals('id-5', $this->item->getId());
        $this->assertEquals('Dongle', $this->item->getName());
        $this->assertEquals(10000, $this->item->getPrice());
        $this->assertEquals(3, $this->item->getQuantity());
        $this->assertEquals(20, $this->item->getTax());
        $options = $this->item->getOptions();
        $this->assertIsArray($options);
        $this->assertCount(2, $options);
        $this->assertEquals('red', $options['color']);
        $this->assertEquals('awesome', $options['features']);
    }
}
