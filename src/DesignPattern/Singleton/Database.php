<?php

namespace App\DesignPattern\Singleton;

use PDO;
use PDOException;


class Database extends BaseSingleton {

    private $conn;
    
    protected function __construct() {
        try {
            $this->conn = new PDO("mysql:host=mysql;dbname=db", "", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Database connection error";
            exit();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public static function connect() {
        $db = static::getInstance();
         return $db->getConnection();
    }
}