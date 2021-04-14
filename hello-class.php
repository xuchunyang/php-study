<?php

class Student
{
    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function say_name()
    {
        echo "My name is $this->name, my id is $this->id\n";
    }
}

$xcy = new Student("Xu Chunyang", 3);
$xcy->say_name();

(new Student("Alice", 2))->say_name();

class MathStudent extends Student
{
    function sum_numbers($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo "$this->name says that $num1 + $num2 = $sum.\n";
    }
}

(new MathStudent("Eric", "Chang"))->say_name();
(new MathStudent("Eric", "Chang"))->sum_numbers(1, 33);
