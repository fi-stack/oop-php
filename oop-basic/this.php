<?php
class Student
{
    var $firstName;
    var $lastName;

    var $country = 'None';

    function sayHello()
    {
        return 'Hello, World!';
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$student1 = new Student;
$student1->firstName = "Rafi";
$student1->lastName = "Nur Oktafian";
echo $student1->fullName() . "<br>";
echo $student1->sayHello();
