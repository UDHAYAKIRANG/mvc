<?php
    
    include "model/db.php";
    class studentcontroller{
                               
        public $conn;
        function __construct(){
            global $db;
            $this->conn=$db->conn;
        }
        function insert() {
        
            include "model/insert.php";
            $obj=new Insert($this->conn);
    }

    function getAllData() {
        include "model/view.php";
        $obj=new view();
        return $obj->construct($this->conn);
    }
}
    
?>