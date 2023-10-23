<?php 
require_once('core/Application.php');
$app = new Application();

$app->router->get('/base_account/', '', 'login'); 
$app->router->get('/base_account/?action=loginUser','loginUser', 'login'); 
$app->router->post('/base_account/?action=loginUser','loginUser', 'profile');   
$app->router->get('/base_account/?action=signupUser', 'signupUser', 'signup');  
$app->router->post('/base_account/?action=updateUser','updateUser', 'profile'); 
$app->router->post('/base_account/?action=signupUser','signupUser','profile');
$app->router->get('/base_account/?action=logoutUser','logoutUser', 'signup');  
$app->run();
?>