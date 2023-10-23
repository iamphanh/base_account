<?php

require_once('core/Request.php');

class Router {

    protected array $routes = [];
    private Request $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    
    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $mehthod = $this->request->getMethod();
        $callback = $this->routes[$mehthod][$path] ?? false;
        if($callback === false) {
            echo "Not found 404";
            exit(1);
        }
        return call_user_func($callback);
    }

}
?>