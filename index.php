<?php 

require_once __DIR__.'/vendor/autoload.php';
use App\controller\UserController;
use App\core\Application;
// require_once 'core/Application.php';
// require_once 'controller/userController.php';


$app = new Application();

$app->router->get('/base_account/', [UserController::class, 'loginUser' ]); 
$app->router->get('/base_account/?action=loginUser', [UserController::class,'loginUser']); 
$app->router->post('/base_account/?action=loginUser', [UserController::class,'loginUser']);   
$app->router->get('/base_account/?action=signupUser', [UserController::class,'signupUser']);  
$app->router->post('/base_account/?action=updateUser',[UserController::class,'updateUser']); 
$app->router->post('/base_account/?action=signupUser',[UserController::class,'signupUser']);
$app->router->get('/base_account/?action=logoutUser',[UserController::class,'logoutUser']);  
$app->run();
?>