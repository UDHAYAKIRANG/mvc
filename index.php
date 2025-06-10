<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;

    default:
        echo "404 - Page Not Found";
        break;
}


?>
