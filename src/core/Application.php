<?php

namespace Thangphu\UnLock\core;

use Thangphu\UnLock\core\Request;
use Thangphu\UnLock\core\Router;
use Thangphu\UnLock\core\Response;

class Application
{
    /**
     * @var string
     */
    public static string $ROOT_DIR;

    /**
     * @var \Thangphu\UnLock\core\Router
     */
    public Router $router;

    /**
     * @var \Thangphu\UnLock\core\Request
     */
    public Request $request;

    /**
     * @var \Thangphu\UnLock\core\Response
     */
    public Response $response;

    /**
     * @var Application
     */
    public static Application $app;

    /**
     * @param $rootPath
     */
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        self::$app = $this;
        $this->router = new Router($this->request, $this->response);
    }

    /**
     * @return void
     */
    public function run(): void
    {
        echo $this->router->resolve();
    }
}
