<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Becode / Students, Class list</title>
    <style>
        label, h4 {
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
    <?php require 'includes/header.php'?>
    <section>
        <?php require 'select.php' ?>
        <!--
        <h4>Select the list you need<?php //echo $user->getName()?>,</h4>
        <label for="submit">Go to:
            <button type="submit" name="submit" class="studentsList">STUDENTS LIST</button>
        </label>
        <label for="submit">Go to:
            <button type="submit" name="submit" class="teachersList">TEACHERS LIST</button>
        </label>
        <label for="submit">Got to:
            <button type="submit" name="submit" class="classList">CLASS LIST</button>
        </label>
        -->
    </section>
    <?php require 'includes/footer.php'?>
</body>
</html>