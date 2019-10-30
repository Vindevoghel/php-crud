<?php
declare(strict_types=1);

class Student extends User
{
    public function sendToDB($connection)
    {
        $sqlCmd = 'INSERT INTO BeCodeDUO.student (first_name, last_name, email, classID) VALUES (:first_name, :last_name, :email, :classID)';
        $connection->prepare($sqlCmd)->execute([$this->firstName, $this->lastName, $this->email, $this->classID]);
    }
}