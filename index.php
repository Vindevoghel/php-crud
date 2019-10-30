<?php
declare(strict_types=1);
require 'keycodes.php';

//require 'Connection.php';
//include all your model files here
require 'Model/SQLConnect.php';
require 'Model/BeCodeClass.php';
require 'Model/User.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
//include all your controllers here
require 'Controller/ClassController.php';
require 'Controller/HomepageController.php';
$connection = new SQLConnect($serverName, $dbName, $userName, $passWord);
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

/*$controller = new HomepageController();
$controller->render($_GET, $_POST);*/

$controller = new ClassController();
$controller->render($_GET, $_POST);
