<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';
$dbConnection = getDBConnection();
$controller = new UserController($dbConnection);
// Routing berdasarkan parameter action
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;
switch ($action) {
    case 'detail':
        $user = $controller->detail($id); 
        include 'app/views/userDetails.php'; 
        break;
    case 'edit':
        $user = $controller->edit($id);  
        include 'app/views/userEdit.php'; 
        break;
    case 'delete':
        $controller->delete($id); 
        break;
    case 'create':
        $controller->create(); 
        break;
    default:
        $users = $controller->show(); 
        include 'app/views/userView.php'; 
        break;
}