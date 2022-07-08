<?php
declare(strict_types=1);

Class Database {
private $connection;//property

    public function connect (): void {
        $username = $_ENV['USERNAME'];
        $password = $_ENV['PASSWORD'];
        $localhost = $_ENV['LOCALHOST'];
        $dbname = $_ENV['DBNAME'];

        try {//Test the connection.
            $this->connection = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "<br>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function getAllCustomers()//method to get all customers.
    {
        $sql = "SELECT lastname, firstname From customer";//Select the columns that are needed from the customer-table
        $result = $this->connection->query($sql);//query() performs a query against a database.
        return $result->fetchAll();//fetchAll() method allows you to fetch all rows from a result set associated with a PDOStatement object into an array.
    }
}
