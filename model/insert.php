<?php
    // include "db.php";
    class Insert {
        public $conn;
    function __construct($conn){
        $this->conn=$conn;
            if (isset($_GET['username']) && isset($_GET['password'])) {
            $stmt = $this->conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
            $stmt->bindValue(1, $_GET['username']);
            $stmt->bindValue(2, $_GET['password']);
            $stmt->execute();
        }
    }
    }
?>