<?php

namespace Thangphu\UnLock\Controllers;

use Thangphu\UnLock\core\Application;

class SiteController
{
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return 'handling submittid';
    }
}
