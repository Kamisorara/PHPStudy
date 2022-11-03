<?php

class mysqlConnectionTools {

    public function __construct($dbConfig) {
        try {
            $host = $dbConfig['host'];
            $port = $dbConfig['port'];
            $user = $dbConfig['user'];
            $pass = $dbConfig['pass'];
            $database = $dbConfig['database'];
            $charset = $dbConfig['charset'];
            $this->dsn = "mysql:host=$host;port=$port;dbname=$database;charset=$charset";
            $this->conn = new PDO($this->dsn, $user, $pass);
            echo "连接成功";
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function connect($dbConfig) {
        return new self($dbConfig);
    }
}
