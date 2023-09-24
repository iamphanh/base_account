<?php 

$controller = isset($_GET['controller']) ? $_GET['controller'] . 'controller' : 'userController';

// Kiểm tra xem action có được truyền trong URL hay không
$action = isset($_GET['action']) ? $_GET['action'] : 'loginUser';

// Nếu action không được truyền hoặc action là trang đăng nhập, thì hiển thị trang đăng nhập
if (empty($action) || $action === 'loginUser') {
    require_once('controller/userController.php');
    $userController = new UserController();
    $userController->loginUser();
} else {
    require_once('controller/' . $controller . '.php');
    $userController = new $controller();
    $userController->$action();

}

?>
