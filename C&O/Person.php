<?php
class Person
{
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name = $name;
    }

    public function getAge()
    {
        return $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender = $gender;
    }

    public function getInfo()
    {
        return "{$this->name} , {$this->age} years old, {$this->gender}";
    }
}

$person = new Person("John Dee", 30, "male");
echo $person->getInfo();
