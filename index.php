<?php 

require_once __DIR__.'/vendor/autoload.php';
// use Thangphu\UnLock\Application;
use Thangphu\UnLock\Controller\HomeController;
use Thangphu\UnLock\Controller\NotFoundController;
use Thangphu\UnLock\core\Application;

// require 'vendor/autoload.php';

// $application = new Application(
//     new HomeController(),
//     new NotFoundController()
// );

// $application->start();s

    $application = new Application();
    // var_dump('dafsa'); die

    // $application->router->get('/', function(){
    //     return 'hello router';
    // });
    $application->router->get('/contact',function(){
        return "xin chao contact";
    });
    $application->run();
?>
