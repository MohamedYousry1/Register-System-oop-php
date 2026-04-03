<?php

class DBConn
{
    private $dsn = "mysql:host=localhost;dbname=auth_system;charset=utf8mb4";
    private $username = 'root';
    private $password = '';
    private $conn;

    protected function connect()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";
            die();
        }
    }
}
