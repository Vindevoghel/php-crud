<?php
require '../Connection.php';
require '../Controller/HomepageController.php';

?>


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
        td {
            width: 200px;
            text-align: right;
            border: 2px solid darkolivegreen;
        }
        th {
            width: 200px;
            text-align: left;
            border: 2px solid darkolivegreen;
        }
    </style>
</head>
<body>
    <?php require 'includes/header.php'?>
    <section>
        <h4>Hello <?php //echo $user->getName()?>,</h4>
        <p>Put your content here.</p>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sqlTeacher = 'SELECT * FROM BeCodeDUO.teacher ORDER BY classID';
            foreach ($openConnection->query($sqlTeacher) as $row): ?>
            <tr>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['class_name'] ?></td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <?php require 'includes/footer.php'?>
</body>
</html>