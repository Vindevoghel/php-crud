<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newClass = new BeCodeClass($_POST['className'], $_POST['classLocation']);
    $newClass->sendToDB($openConnection);
}
?>

<form method="POST">
    Class Name: <br>
    <input type="text" name="className" required><br>
    Class Location <br>
    <input type="text" name="classLocation" required><br>
    <input type="submit" value="Create new class">
</form>

