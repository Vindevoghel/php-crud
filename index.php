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
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/EditController.php';
$connection = new SQLConnect($serverName, $dbName, $userName, $passWord);
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
if (isset($_GET['page'])) {
    if ($_GET['page'] === 'students') {
        $controller = new StudentController();
    } else if ($_GET['page'] === 'teachers') {
        $controller = new TeacherController();
    } else if ($_GET['page'] === 'class') {
        $controller = new ClassController();
    } else if($_GET['page'] === 'home') {
        $controller = new HomepageController();
    } else if($_GET['page'] === 'edit') {
        $controller = new EditController();
    }
}


$controller->render($_GET, $_POST, $connection);
