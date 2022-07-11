<?php
declare(strict_types=1);

class Database
{
    private $connection;//property

    public function connect(): void
    {
        $username = $_ENV['USERNAME'];
        $password = $_ENV['PASSWORD'];
        $localhost = $_ENV['LOCALHOST'];
        $dbname = $_ENV['DBNAME'];

        try {//Test the connection.
            $this->connection = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getAllCustomers()//method to get all customers for the drop-down.
    {
        $sql = "SELECT c.lastname, c.firstname From customer c ORDER BY lastname, firstname";  //Select the columns that are needed from the customer-table + order alphabetically by lastname.
        $result = $this->connection->query($sql);   //query() performs a query against a database.
        return $result->fetchAll(PDO::FETCH_KEY_PAIR);      //fetchAll() method allows you to fetch all rows from a result set associated with a PDOStatement object into an array.
        //PDO::FETCH_KEY_PAIR mode allows you to retrieve a two-column result in an array where the first column is the key and the second column is the value.
    }

    public function getAllProducts()//method to get all products for the drop-down.
    {
        $sql = "SELECT name FROM product ORDER BY name"; // select column 'name' from table 'product'   Order by name
        $connectionProducts = $this->connection->query($sql); // query() performs a query against a database ($sql)
        return $connectionProducts->fetchAll(PDO::FETCH_COLUMN); //PDOStatement::fetchColumn — Returns a single column from the next row of a result set
    }

    public function getNormalPrice()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = $_POST['product'];
            $sql = "SELECT price FROM product WHERE name = ('$product')";
            $price = $this->connection->query($sql);
            var_dump($price->fetch(PDO::FETCH_OBJ));
            return $price->fetch(PDO::FETCH_OBJ);
        }

    }


}
