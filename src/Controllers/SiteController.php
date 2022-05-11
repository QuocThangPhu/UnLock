<?php

namespace Thangphu\UnLock\Controllers;

use Thangphu\UnLock\core\Application;

class SiteController
{
    /**
     * @return string|string[]
     */
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    /**
     * @return string
     */
    public function handleContact()
    {
        return 'handling submittid';
    }

    /**
     * @param $number1
     * @param $number2
     * @return string
     */
    public function sum($number1, $number2)
    {
        $finalnumber = $number1 + $number2;
        return $finalnumber;
    }
}
