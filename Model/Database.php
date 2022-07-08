<?php
declare(strict_types=1);

Class Database {

    public function connect (): void {
        $username = $_ENV['USERNAME'];
        $password = $_ENV['PASSWORD'];
        $localhost = $_ENV['LOCALHOST'];
        $dbname = $_ENV['DBNAME'];

        try {
            $conn = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
