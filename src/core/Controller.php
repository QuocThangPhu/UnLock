<?php

namespace Thangphu\UnLock\core;

class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

}
