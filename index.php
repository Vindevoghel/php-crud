<?php
declare(strict_types=1);

require 'Connection.php';
//include all your model files here
require 'Model/BeCodeClass.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
require 'Model/User.php';
//include all your controllers here
require 'Controller/ClassController.php';
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
$controller->render($_GET, $_POST);


