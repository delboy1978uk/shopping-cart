<?php

namespace Del\Cart;

class Item implements ItemInterface
{
    /** @var string $id */
    private $id;

    /** @var string $name */
    private $name;

    /** @var int $price */
    private $price;

    /** @var int $quantity */
    private $quantity;

    /** @var int $tax */
    private $tax;

    /** @var OptionsInterface[] $options */
    private $options;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax(int $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return OptionsInterface[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param OptionsInterface[] $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}
