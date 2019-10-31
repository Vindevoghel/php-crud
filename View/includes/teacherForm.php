<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newStudent = new Student($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['class']);
    $newStudent->sendToDB($openConnection);
}
?>

<div class="container">
    <h1 class="jumbotron-heading">Teachers Registration Form</h1>
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
    </form>
</div>