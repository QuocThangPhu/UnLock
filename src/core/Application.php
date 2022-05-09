<?php

namespace Thangphu\UnLock\core;
use Thangphu\UnLock\core\Router;
use Thangphu\UnLock\core\Request;

class Application
{
    public Router $router;
    public Request $request;
    
    public function __construct()
    {
        $this->request = new Request;
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}
?>
