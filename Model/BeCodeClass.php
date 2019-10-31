<?php

class BeCodeClass
{
    private $classID;
    private $name;
    private $location;

    public function __construct(string $name, string $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function sendToDB($connection) {
        $sql = 'INSERT INTO BeCodeDUO.class (name, location) VALUES (:name, :location)';
        $connection->prepare($sql)->execute([$this->name, $this->location]);
    }

    /**
     * @return mixed
     */
    public function getClassID()
    {
        return $this->classID;
    }

    /**
     * @param mixed $classID
     */
    public function setClassID($classID): void
    {
        $this->classID = $classID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
}
