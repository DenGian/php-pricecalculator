<?php
declare(strict_types=1);

class Database
{
    //properties
    private $connection;

    //method to make the connection
    public function connect(): void
    {
        $username = $_ENV['USERNAME'];
        $password = $_ENV['PASSWORD'];
        $localhost = $_ENV['LOCALHOST'];
        $dbname = $_ENV['DBNAME'];

        //Test the connection.
        try {
            $this->connection = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //1//method to get all customers for the drop-down.
    public function getAllCustomers()
    {   //1a//select all customers
        $sql = "SELECT * FROM customer ORDER BY lastname";  //Select the columns that are needed from the customer-table + order alphabetically by lastname.
        $customers = $this->connection->query($sql);   //query() performs a query against a database.
        //1b//loop over the result & make new client
        $customerArray = [];
        foreach ($customers as $customer) {
            $customerArray[] = new Client($customer['id'], $customer ['lastname'], $customer ['firstname'], $customer ['group_id'], $customer ['fixed_discount'], $customer ['variable_discount']); // Made sure keys are the same name as DB column
        }
        //1c//return new customer array
        return $customerArray;
    }

    //method to get all products for the drop-down.
    public function getAllProducts()
    {   //2a//select all products
        $sql = "SELECT * FROM product ORDER BY name"; // select all from table 'product'   Order by name
        $products = $this->connection->query($sql);// query() performs a query against a database ($sql)
        //2b//loop over the result & make a new product
        $productArray = [];
        foreach ($products as $product) {
            $productArray[] = new Products($product['id'], $product['name'], $product['price']);
        }
        //2c//return new product array
        return $productArray;
    }

    public function getAllGroupsByUser($groupId)
    {
        //$client = new $client;
        //var_dump($client);
        $sql = "SELECT *
                FROM customer_group
                WHERE id = ' . $groupId . ' limit 1";
        $query = $this->connection->query($sql);
        var_dump($groupId);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function retrieveCustomer($Id)
    {
        //$client = new $client;
        //var_dump($client);
        //$dbh = $this->connection;
        $sql = "SELECT *
                FROM customer
                WHERE id = ' . $Id . ' limit 1";
        var_dump($sql);
        $query = $this->connection->query($sql);
        var_dump($query->fetch(PDO::FETCH_ASSOC));
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function retrieveProduct($id)
    {
        //$client = new $client;
        //var_dump($client);
        $sql = "SELECT *
                FROM product
                WHERE id = ' . $id . ' limit 1";
        $query = $this->connection->query($sql);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    //getter for private property customers
    /**
     * @return array
     */
//    public function getCustomers(): array
//    {
//        return $this->customers;
//    }


}