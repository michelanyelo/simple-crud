<?php
/* @autor Miguel Ángel Monzón Martínez */

class Database
{
    private $driver = DB_DRIVER;
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    public $conn;

    // método constructor
    public function __construct()
    {
        $this->getConn();
    }


    public function getConn()
    {
        try {
            $dsn = "$this->driver:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->conn = new PDO($dsn, $this->username, $this->password);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Error al conectar con la base de datos" . $e->getMessage();
        }
    }
}
