<?php
namespace MVC\Config;

class Database {
    public $pdo;

    public function __construct() {
        $host = 'localhost';
        $db   = 'modul';
        $user = 'root';
        $pass = '';

        $this->pdo = new \PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    }
}
