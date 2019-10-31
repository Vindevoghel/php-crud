<?php
declare(strict_types=1);

//require '../keycodes.php';

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class SQLConnect
{
    private $pdo;

    public function __construct($serverName, $dbName, $userName, $passWord)
    {

        $pdo = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $passWord);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        $dbconnect = mysqli_connect($serverName, $userName, $passWord, $dbName);

        if ($dbconnect->connect_error) {
            die('Database connection failed: ' . $dbconnect->connect_error);
        }
        $this->pdo = $pdo;

    }

    public function getClasses()
    {
        $sql = 'SELECT * FROM BeCodeDUO.class ORDER BY classID';
        return $this->pdo->query($sql);
    }

    public function getStudents()
    {
        $sql = 'SELECT * FROM BeCodeDUO.student ORDER BY studentID';
        return $this->pdo->query($sql);
    }

    public function getTeachers()
    {
        $sql = 'SELECT * FROM BeCodeDUO.teacher ORDER BY teacherID';
        return $this->pdo->query($sql);
    }

    public function deleteClass(int $_classID)
    {
        $sql = 'DELETE FROM BeCodeDUO.class WHERE classID=' . $_classID;
        return $this->pdo->query($sql);
    }

    public function updateClassField($_columnName, $_newValue, $_condition){
        $sql = 'UPDATE BeCodeDUO.class SET ' . $_columnName . ' = ' . $_newValue . ' WHERE classID = ' .$_condition;
        return $this->pdo->query($sql);
    }

    public function updateTeacherField($_columnName, $_newValue, $_condition){
        $sql = 'UPDATE BeCodeDUO.teacher SET ' . $_columnName . ' = ' . $_newValue . ' WHERE teacherID = ' .$_condition;
        return $this->pdo->query($sql);
    }

    public function updateStudentField($_columnName, $_newValue, $_condition){
        $sql = 'UPDATE BeCodeDUO.student SET ' . $_columnName . ' = ' . $_newValue . ' WHERE studentID = ' .$_condition;
        return $this->pdo->query($sql);
    }



    public function deleteTeacher(int $_teacherID)
    {
        $sql = 'DELETE FROM BeCodeDUO.teacher WHERE teacherID=' .$_teacherID;
        return $this->pdo->query($sql);
    }

    public function deleteStudent (int $_studentID)
    {
        $sql = 'DELETE FROM BeCodeDUO.student WHERE studentID=' .$_studentID;
        return $this->pdo->query($sql);
    }

    public function sendClasstoDatabase(object $class)
    {
        $sql = 'INSERT INTO BeCodeDUO.class (name, location) VALUES (:name, :location)';
        $this->pdo->prepare($sql)->execute([$class->getName(), $class->getLocation()]);
    }

    public function sendTeacherToDatabase(object $teacher)
    {
        $sql = 'INSERT INTO BeCodeDUO.teacher (first_name, last_name, email, classID) VALUES (:first_name, :last_name, :email, :classID)';
        $this->pdo->prepare($sql)->execute([$teacher->getFirstName(), $teacher->getLastName(), $teacher->getEmail(), $teacher->getClassID()]);
    }

    public function sendStudentToDatabase(object $student)
    {
        $sql = 'INSERT INTO BeCodeDUO.student (first_name, last_name, email, classID) VALUES (:first_name, :last_name, :email, :classID)';
        $this->pdo->prepare($sql)->execute([$student->getFirstName(), $student->getLastName(), $student->getEmail(), $student->getClassID()]);
    }

}
