<?php
    
    
    class Database{
        
        public $conn;
       
        function __construct(){
            $dsn="mysql:host=localhost;dbname=virat;port=3308";
            $this->conn=new PDO($dsn,"root","");
        }
    }
    $db=new Database();

    
    
?>