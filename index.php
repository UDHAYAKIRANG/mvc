<?php
require_once "./controllers/studentcontroller.php";

$controller = new StudentController();
$controller->insert();
$data = $controller->getAllData();
print_r($_SERVER['QUERY_STRING']);
include "./views/hello.php";

?>
