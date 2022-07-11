<?php //<!-- ADDED WEEKEND -->
declare(strict_types=1);

class PriceCalc
{
    //properties
    private Database $connection;//get all groups for customer
    private Client $customer;
    private Products $product;
    private int $pieces;//weg
    private int $price;
    private int $fixed_discount;
    private int $variable_discount;

    //constructor
    /**
     * @param Database $connection
     * @param Client $customer
     * @param Products $product
     * @param int $pieces
     * @param int $price
     * @param int $fixed_discount
     * @param int $variable_discount
     */
    public function __construct(Database $connection, Client $customer, Products $product, int $pieces, int $price, int $fixed_discount, int $variable_discount)
    {
        $this->connection = $connection;
        $this->customer = $customer;
        $this->product = $product;
        $this->pieces = $pieces;
        $this->price = $price;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
    }

    public function productFetch($POST)
    {
        $price = $this->connect()->query("SELECT price, FROM product WHERE name =" . $POST['product']);
        $fetchPrice = $price->fetch();
        return $fetchPrice;
    }







    /*public function selected():string
    {
        $string = " ";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer = $_POST['customers'];
            $product = $_POST['product'];
            $quantity = $_POST['pieces'];
            $string = "$customer, wants to buy $quantity of $product";
        }
        return $string;
    }*/





}

