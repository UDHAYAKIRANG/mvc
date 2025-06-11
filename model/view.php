<?php

    class view{
        
        public $conn;
        function construct($conn){
            $this->conn=$conn;
            $stmt = $this->conn->query("SELECT * FROM login");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>