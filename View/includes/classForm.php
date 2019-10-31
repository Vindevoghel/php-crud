<?php

if (isset($_POST['className'], $_POST['classLocation'])) {
    $newClass = new BeCodeClass($_POST['className'], $_POST['classLocation']);
    $connection->sendClasstoDatabase($newClass);
}
?>

<div class="container">
    <h1 class="jumbotron-heading">Class Registration Form</h1>
    <form method="POST">
        <fieldset><legend>Class Info</legend>
            <label for="className">Class Name: <br>
                <input type="text" name="className" class="form-control mb-1" required>
            </label><br>
            <label for="classLocation">Class Location: <br>
                <input type="text" name="classLocation" class="form-control mb-1" required>
            </label><br>
        </fieldset><br>
            <label for="submit">Add to list: <br>
                <input type="submit" value="Create new class" class="submitButton">
            </label>
    </form>
</div>

