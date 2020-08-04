<?php

namespace DelTesting;

use Codeception\TestCase\Test;
use Del\Cart\Option;
use Del\Cart\OptionsInterface;

class OptionTest extends Test
{
    /**
     * @var OptionsInterface
     */
    protected $option;

    protected function _before()
    {
        $this->option = new Option();
    }

    protected function _after()
    {
        unset($this->option);
    }

    /**
     * Check tests are working
     */
    public function testGetSetAttribute()
    {
        $this->option->setAttribute('teststring', 'Ready to start building tests');
        $this->assertEquals('Ready to start building tests', $this->option->getAttribute('teststring'));
    }

    /**
     * Check tests are working
     */
    public function testGetSetAttributes()
    {
        $this->option->setAttributes([
            'teststring' => 'Ready to start building tests',
            'test2' => 'etc',
        ]);
        $attributes = $this->option->getAttributes();
        $this->assertCount(2, $attributes);
        $this->assertArrayHasKey('teststring', $attributes);
        $this->assertArrayHasKey('test2', $attributes);
        $this->assertEquals('Ready to start building tests', $attributes['teststring']);
        $this->assertEquals('etc', $attributes['test2']);
    }
}
