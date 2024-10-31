<?php

class Person
{
    private string $name;
    private int $age;
    private string $city;

    protected function __construct(string $name, int $age, string $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    static function create(string $name, int $age, string $city)
    {
        return new Person($name, $age, $city);
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }

    function getCity()
    {
        return $this->city;
    }

    function setName(string $name)
    {
        $this->name = $name;
    }

    function setAge(int $age)
    {
        $this->age = $age;
    }

    function setCity(string $city)
    {
        $this->city = $city;
    }
}


$Pessoa1 = Person::create("Ewerton", 34, "Patos");

echo $Pessoa1->getName() . "\n";
echo $Pessoa1->getAge() . "\n";
echo $Pessoa1->getCity() . "\n";

$Pessoa1->setName("New Name");

echo $Pessoa1->getName();
