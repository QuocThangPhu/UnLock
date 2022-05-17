<?php 

require_once __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

use Thangphu\UnLock\Controllers\AuthController;
use Thangphu\UnLock\core\Application;
use Thangphu\UnLock\Controllers\SiteController;
use Thangphu\UnLock\Transport\RoadFactory;
use Thangphu\UnLock\Transport\SeaFactory;

    $application = new Application( dirname(__DIR__));

    $application->router->get('/',[new SiteController(), 'home']);
    $application->router->get('/contact',[new SiteController(), 'contact']);
    $application->router->post('/contact', [new SiteController(), 'handleContact']);

    $application->router->get('/login', [new AuthController(), 'login']);
    $application->router->post('/login', [new AuthController(), 'login']);
    $application->router->get('/register', [new AuthController(), 'register']);
    $application->router->post('/register', [new AuthController(), 'register']);

    $application->run();
//    $transportRoad = new RoadFactory();
//    for($i = 1; $i <= 5;$i++){
//        echo $transportRoad->deliver()->shippingMethod();
//        echo "\n";
//    }
//    echo "------------Change----------- \n";
//    $transportSea = new SeaFactory();
//    for($i = 1; $i <= 5;$i++){
//        echo $transportSea->deliver()->shippingMethod();
//        echo "\n";
//    }

