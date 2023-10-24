<?php
namespace App\core;

// require_once("core/Request.php");
// require_once("core/Router.php");
class Application
{

    private Request $request;
    public Router $router;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
      $this->router->resolve();
    }
}
