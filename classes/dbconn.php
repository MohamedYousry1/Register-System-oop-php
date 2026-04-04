<?php

namespace App;
// >> use PDO, use PDOException bec, we use namespaces, to read pdo class, pdoexception class
use PDO;
use PDOException;

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

            throw $e;
        }
    }
}
