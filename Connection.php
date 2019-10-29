<?php
declare(strict_types = 1);

require "keycodes.php";

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

function OpenConnection() {

    $pdo = new PDO("mysql:host=$servername;$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $dbconnect=mysqli_connect($servername, $username, $password, $dbname);

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
    $stmt = $pdo->prepare('SELECT first_name FROM student WHERE id = :id');

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->execute();


    return $pdo;
}

$openConnection = OpenConnection();
