<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'task_manager';
    private $username = 'root';
    private $password = '1234';
    private $conn;

    // Constructor: connects automatically
    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }

    // Query executor (SELECT, INSERT, etc.)
    public function query($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    // Fetch all rows (used for SELECT)
    public function fetchAll($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch single row
    public function fetch($sql, $params = []) {
        return $this->query($sql, $params)->fetch(PDO::FETCH_ASSOC);
    }
}
