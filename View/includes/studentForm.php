<?php
/*
require 'Connection.php';

if(isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['class'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    $newStudent = $openConnection->prepare("INSERT INTO BeCodeDUO.student (first_name, last_name, email, classID)
    VALUES (:first_name, :last_name, :emal, :class)");

    $newStudent->bindParam('first_name', $firstName);
    $newStudent->bindParam('last_name', $lastName);
    $newStudent->bindParam('email', $email);
    $newStudent->bindParam('classID', $class);

    $newStudent->execute();
}
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newStudent = new Student($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['class']);
    $newStudent->sendToDB($openConnection);
}

?>
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode / Add student</title>
    <style>
        label, h1 {
            margin-left: 40px;
        }
        button {
            height: 34px;
            width: 200px;

            font-size: 20px;
            font-weight: bold;
            border: 2px solid darkslategray;
            border-radius: 4px;
            background-color: lightseagreen;
        }
        button:hover {
            background-color: limegreen;
        }
    </style>
</head>
<body>
-->

<div class="container">
    <h1 class="jumbotron-heading">Student Registration Form</h1>
    <form method="POST">
        <fieldset><legend>Student Name</legend>
            <label for="firstName">First Name: <br>
                <input name="firstName" class="form-control mb-1" required>
            </label>
            <label for="lastName">Last Name: <br>
                <input name="lastName" class="form-control mb-1" required>
            </label>
        </fieldset><br>
        <fieldset><legend>Student Info</legend>
            <label for="email">E-mail: <br>
                <input name="lastName" class="form-control mb-1" required>
            </label>
        <label for="class">Class: <br>
            <select name="class" class="form-control mb-1">
                <?php $sqlClass = 'SELECT * FROM BeCodeDUO.class ORDER BY classID';
                    foreach ($openConnection->query($sqlClass) as $row): ?>
                <option value="<?php echo $row['classID']?>"><?php echo $row['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        </fieldset><br>
            <label for="submit">Add to list: <br>
                <button type="submit" value="Create new student" class="submitButton">ADD STUDENT</button>
            </label>
    <
    </form>
</div>

<!--
</body>
</html>
-->