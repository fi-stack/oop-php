<?php

class Student
{
    var $nama;
    var $country = 'None';

    function sayHello()
    {
        return 'Hello ' . $this->nama;
    }
}

$student1 = new Student;
$student2 = new Student;
$student1->nama = "Rafi";
$student2->nama = "Linda";

echo $student1->nama . "<br>";
echo $student1->sayHello() . "<br>";
echo $student2->nama . "<br>";
echo $student2->sayHello() . "<br>";

// $class_vars = get_class_vars('Student');
// print_r($class_vars);
$class_vars = get_class_methods('Student');
print_r($class_vars);

// if (property_exists('Student', 'name')) {
//     echo "tersedia";
// } else {
//     echo "tidak tersedia";
// }
if (method_exists('Student', 'sayHello')) {
    echo "tersedia";
} else {
    echo "tidak tersedia";
}
