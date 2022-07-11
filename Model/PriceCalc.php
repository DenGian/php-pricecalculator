<?php //<!-- ADDED WEEKEND -->
declare(strict_types=1);

class PriceCalc extends Database
{
    private Database $connection;
    private Selected $customer;
    private Selected $product;
    private Selected $pieces;
    private int $price;
    private int $fixed_discount;
    private int $variable_discount;

    /**
     * @param Database $connection
     * @param Selected $customer
     * @param Selected $product
     * @param Selected $pieces
     * @param int $price
     * @param int $fixed_discount
     * @param int $variable_discount
     */
/*    public function __construct(Database $connection, int $price, int $fixed_discount, int $variable_discount)
    {
        $this->connection = $connection;
        $this->customer = $_POST['customers'];
        $this->product = $_POST['product'];
        $this->pieces = $_POST['pieces'];
        $this->price = $price;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
    }*/




    public function selected():string
    {
        $string = " ";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer = $_POST['customers'];
            $product = $_POST['product'];
            $quantity = $_POST['pieces'];
            $string = "$customer, wants to buy $quantity of $product";
        }
        return $string;
    }





}

