<?/*php
declare(strict_types = 1);

require 'keycodes.php';

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

function OpenConnection($serverName, $dbName, $userName, $passWord) {

    $pdo = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $passWord);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $dbconnect=mysqli_connect($serverName, $userName, $passWord, $dbName);

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }

    return $pdo;
}

$openConnection = OpenConnection($serverName, $dbName, $userName, $passWord);
*/