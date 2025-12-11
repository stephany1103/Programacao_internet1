<?php


require_once __DIR__ . "/app/controllers/loginController.php";


$controller = new LoginController();


$action = $_GET["action"] ?? 'index';


switch ($action) {


    case 'login':
        $controller->login();
        break;

    case 'logout':
        $controller->logout();
        break;
       
    default:
        $controller->index();
        break;
}
?>