<?php 

require_once __DIR__.'/vendor/autoload.php';
use Thangphu\UnLock\core\Application;

    $application = new Application( dirname(__DIR__));

    $application->router->get('/','hello');

    $application->router->get('/contact','contact');
    $application->run();
?>
