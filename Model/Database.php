<?php

Class Database {

    public function connect () {
        $username = $_ENV['USERNAME'];
        $password = $_ENV['password'];
        $localhost = $_ENV['localhost'];
        $dbname = $_ENV['dbname'];

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

