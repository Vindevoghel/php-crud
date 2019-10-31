<?php


class EditController
{
    public function render(array $GET, array $POST, $_connection)
    {
        //this is just example code, you can remove the line below

        $connection = $_connection;

        if (isset($_POST['newClassLocation'])) {
            $connection->updateField('name', $_POST['newClassLocation'], $GET['ID']);
        }

        require 'View/editClass.php';

    }
}