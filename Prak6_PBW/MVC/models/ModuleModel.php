<?php
namespace MVC\Models;

require_once __DIR__ . '/../config/db.php';

use MVC\Config\Database;

class ModuleModel {
    private $pdo;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->pdo;
    }

    public function getAllModules() {
        $stmt = $this->pdo->prepare("SELECT * FROM Moduls");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
