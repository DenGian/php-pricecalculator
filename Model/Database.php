<?php
declare(strict_types=1);

class Database
{
    //properties
    private $connection;
    private array $customers = [];

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

    //method to get all customers for the drop-down.
    public function getAllCustomers()
    {   //select all customers
        $sql = "SELECT * From customer ORDER BY lastname";  //Select the columns that are needed from the customer-table + order alphabetically by lastname.
        $customers = $this->connection->query($sql);   //query() performs a query against a database.
        //loop over result & make new client
        foreach ($customers as $customer)
        {
            $customer[] = new Client($customer['id'], $customer ['lastname'], $customer ['firstname'], $customer ['groupId'], $customer ['fixedDiscount'], $customer ['variableDiscount']);
        }
        //return new customer array
        return $customer;


        //return $result->fetchAll(PDO::FETCH_KEY_PAIR);      //fetchAll() method allows you to fetch all rows from a result set associated with a PDOStatement object into an array.
        //PDO::FETCH_KEY_PAIR mode allows you to retrieve a two-column result in an array where the first column is the key and the second column is the value.
    }
    //method to get all products for the drop-down.
    public function getAllProducts()
    {
        //select all c, loop over result & make new product => return array
        $sql = "SELECT name FROM product ORDER BY name"; // select column 'name' from table 'product'   Order by name
        $connectionProducts = $this->connection->query($sql); // query() performs a query against a database ($sql)
        return $connectionProducts->fetchAll(PDO::FETCH_COLUMN); //PDOStatement::fetchColumn — Returns a single column from the next row of a result set
    }


    //getter for private property customers
    /**
     * @return array
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }




}
