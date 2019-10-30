<?php

require 'Connection.php';


if(isset($_POST['firstName'], $_POST['lastName'], $_POST['class'], $_POST['location'], $_POST['teacherFirstName'], $_POST['teacherLastName'])) {


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $class = $_POST['class'];

    $newStudent = $openConnection->prepare("INSERT INTO student (first_name, last_name, email, class,)
    VALUES (:first_name, :last_name, :emal, :class)");

    $newStudent->bindParam('first_name', $firstName);
    $newStudent->bindParam('last_name', $lastName);
    $newStudent->bindParam('email', $email);
    $newStudent->bindParam('class', $class);

    $newStudent->execute();

}

?>

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

<div class="container">
    <h1 class="jumbotron-heading">Student Registration Form</h1>
    <form method="post">
        <label for="firstName">First Name:
            <input name="firstName" class="form-control mb-1" required>
        </label>
        <label for="lastName">Last Name:
            <input name="lastName" class="form-control mb-1" required>
        </label><br><br>

        <label for="email">E-mail:
            <input name="lastName" class="form-control mb-1" required>
        </label>
        <label for="class">Class:
            <select name="class" class="form-control mb-1">
                <option value="1">Lamarr</option>
            </select>
        </label><br><br>

        <label for="submit">Add to list:
            <button type="submit" name="submit" class="submitButton">ADD STUDENT</button>
        </label><br><br>

    </form>

</body>
</html>