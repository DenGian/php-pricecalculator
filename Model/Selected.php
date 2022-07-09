<?php
declare(strict_types=1);

class Selected{
    private string $name;
    private string $product;
    private string $pieces;

    /**
     * @param string $name
     * @param string $product
     * @param string $pieces
     */
    public function __construct(string $name, string $product, string $pieces)
    {
        $this->name = $name;
        $this->product = $product;
        $this->pieces = $pieces;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }

    /**
     * @return string
     */
    public function getPieces(): string
    {
        return $this->pieces;
    }

    
}
