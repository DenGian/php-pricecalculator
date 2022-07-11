<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

##-TEST-##
//get app name from .env file
//$userName = $_ENV['USERNAME'];
//echo the app name
//echo $userName;

//include all your model files here
require 'Model/Database.php';
require 'Model/Client.php';
require 'Model/Products.php';
require 'Model/PriceCalc.php';

//include all your controllers here
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
$controller = new HomepageController();
//if(isset($_GET['page']) && $_GET['page'] === 'info') {
    //$controller = new InfoController();
//}

$controller->render($_GET, $_POST);