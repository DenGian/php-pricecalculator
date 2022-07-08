<?php
declare(strict_types=1);

class Products
{
    private int $id;
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        //$this->id= $id;
        $this->name = $name;
        $this->price = $price;
    }

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
