<?php 
namespace App\model;
use PDO;
use PDOException;
class DbModel {
    protected static $connection = null;
    public function connect() {
        $dbPath = 'databases.db';
        if (!is_null(self::$connection)) {
            return self::$connection;
        } else{
            try {
                $pdo = new PDO("sqlite:$dbPath");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection = $pdo;
                return self::$connection;
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }
    }
}
