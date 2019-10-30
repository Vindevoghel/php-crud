<?php

require 'connection.php';


if(isset($_POST['firstName'], $_POST['lastName'], $_POST['class'], $_POST['location'], $_POST['teacherFirstName'], $_POST['teacherLastName'])) {


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $class = $_POST['class'];
    $location = $_POST['location'];
    $teacherFirstName = $_POST['teacherFirstName'];
    $teacherLastName = $_POST['teacherLastName'];


    $newStudent = $openConnection->prepare("INSERT INTO students (first_name, last_name, class, location, teacher_first_name, teachet_last_name)
    VALUES (:first_name, :last_name, :class, :location, :teacher_first_name, :teachet_last_name)");

    $newStudent->bindParam('first_name', $firstName);
    $newStudent->bindParam('last_name', $lastName);
    $newStudent->bindParam('class', $class);
    $newStudent->bindParam('location', $location);
    $newStudent->bindParam('teacher_first_name', $teacherFirstName);
    $newStudent->bindParam('teacher_first_name', $teacherLastName);

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
            height: 36px;
            width: 200px;
            padding-top: 4px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 4px;
            background-color: lightseagreen;
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

        <label for="class">Class:
            <input name="lastName" class="form-control mb-1" required>
        </label>
        <label for="class">Location:
            <input name="lastName" class="form-control mb-1" required>
        </label><br><br>

        <label for="firstName">Teacher First Name:
            <input name="teacherFirstName" class="form-control mb-1" required>
        </label>
        <label for="lastName">Teacher Last Name:
            <input name="teacherLastName" class="form-control mb-1" required>
        </label><br><br>

        <label for="submit">Add to list:
            <button type="submit" name="submit" class="btn btn-success">ADD STUDENT</button>
        </label><br><br>

    </form>

</body>
</html>
