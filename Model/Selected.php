<?php //<!-- ADDED WEEKEND -->
declare(strict_types=1);

require 'View/homepage.php';

class Selected{
    private string $name;
    private string $product;
    private int $pieces;
    private Database $connection;

    /**
     * @param string $name
     * @param string $product
     * @param int $pieces
     */
    public function __construct(string $name, string $product, int $pieces)
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
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }



}
