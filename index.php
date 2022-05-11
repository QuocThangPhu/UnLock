<?php 

require_once __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
use Thangphu\UnLock\core\Application;
use Thangphu\UnLock\Controllers\SiteController;

    $application = new Application( dirname(__DIR__));

    $application->router->get('/','hello');
    $application->router->get('/contact',[new SiteController(), 'contact']);
    $application->router->post('/contact', [new SiteController(), 'handleContact']);


    $application->run();
?>
