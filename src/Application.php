<?php

namespace Thangphu\UnLock;

use ThangPhu\UnLock\Controller\HomeController;
use ThangPhu\UnLock\Controller\NotFoundController;

class Application
{
    /**
     * @var Homecontroller
     */
    protected HomeController $homeController;

    /**
     * @var notFoundController
     */
    protected $notFoundController;

    /**
     * @var string
     */
    protected $requestMethod;

    /**
     * @var string
     */
    protected $requestUri;

    /**
     * @param HomeController $homeController 
     * @param NotFoundController $notFoundController 
     */
    public function __construct(HomeController $homeController, NotFoundController $notFoundController)
    {
        $this->homeController = $homeController;
        $this->notFoundController = $notFoundController;
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }

    /**
     * @return void
     */
    public function start()
    {
        $request = $this->requestMethod . '.' . $this->requestUri;
        switch($request){
            case 'GET./':
                $respone = $this->homeController->index();
                break;
            default:
                $respone = $this->notFoundController->notFound();
        }
        echo $respone;
    }

}
?>
