<?php

require_once('core/Request.php');
require_once('controller/userController.php');

class Router {

    protected array $routes = [];

    protected array $view = [];
    private Request $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    public function get($path, $callback, $view){
        $this->routes['get'][$path] = $callback;
        $this->view[$callback] = $view;
    }
    
    public function post($path, $callback, $view){
        $this->routes['post'][$path] = $callback;
        $this->view[$callback] = $view;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $mehthod = $this->request->getMethod();
        $callback = $this->routes[$mehthod][$path] ?? false;
        if($callback === false) {
            echo "Not found 404";
            exit(1);
        }
        if($callback == ''){
            return $this->renderView($callback);
        }
        return call_user_func("UserController::".$callback);
    }

    public function renderView($view){
        $renderView = $this->view[$view];
        require_once("view/php/$renderView.php");

    }
}
?>