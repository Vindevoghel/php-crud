<?php
declare(strict_types = 1);

//require '../keycodes.php';

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class SQLConnect
{
    private $pdo;

    public function __construct($serverName, $dbName, $userName, $passWord) {

        $pdo = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $passWord);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $dbconnect=mysqli_connect($serverName, $userName, $passWord, $dbName);

        if ($dbconnect->connect_error) {
            die('Database connection failed: ' . $dbconnect->connect_error);
        }
        $this->pdo = $pdo;

    }

    public function getClasses() {
        $sql = 'SELECT * FROM BeCodeDUO.class ORDER BY classID';
        return $this->pdo->query($sql);
    }

    public function getStudents() {
        $sql = 'SELECT * FROM BeCodeDUO.student ORDER BY studentID';
        return $this->pdo->query($sql);
    }

    public function getTeachers() {
        $sql = 'SELECT * FROM BeCodeDUO.teacher ORDER BY teacherID';
        return $this->pdo->query($sql);
    }

    public function deleteClass($_classID) {
        $sql = 'DELETE FROM BeCodeDUO.class WHERE classID=' . $_classID;
    }


}
