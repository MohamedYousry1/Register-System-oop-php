<?php

class DBConn
{
    private $dsn = "mysql:host=sql301.infinityfree.com;dbname=if0_41567081_login_system;charset=utf8mb4";
    private $username = 'if0_41567081';
    private $password = 'Bondok2779';
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
