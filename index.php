<?php 

use Thangphu\UnLock\Application;
use Thangphu\UnLock\Controller\HomeController;
use Thangphu\UnLock\Controller\NotFoundController;

require 'vendor/autoload.php';

$application = new Application(
    new HomeController(),
    new NotFoundController()
);

$application->start();

?>
