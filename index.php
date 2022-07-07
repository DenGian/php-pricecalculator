<?php
declare(strict_types=1);
/*You need to put this code in every PHP file that uses the environment variables.
If you have multiple PHP files that need the environment variables you can simply
create a common file using this code. Suppose you create a file named loadenv.php
and include the file in other PHP files. using include or require or require_once.*/

require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//get app name from .env file
$userName = $_ENV['USERNAME'];
//echo the app name
echo $userName;



//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}


$controller->render($_GET, $_POST);