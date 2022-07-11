<?php
declare(strict_types=1);

class Products
{
    //properties
    private int $id;
    private string $name;
    private int $price;

    //constructor
    public function __construct(int $id, string $name, int $price)
    {
        $this->id= $id;
        $this->name = $name;
        $this->price = $price;
    }

    //getters to access private properties
    public function getProductId(): int
    {
        return $this->id;
    }

    public function getProductName(): string
    {
        return $this->name;
    }

    public function getProductPrice(): int
    {
        return $this->price;
    }
}
