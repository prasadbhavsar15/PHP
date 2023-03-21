<?php
    class student
    {
        var $roll_no;
        var $name;
        function display()
        {
            echo"Roll No".$this-> roll_no . "<br>";
            echo"name :".$this-> name;

        }
    }
$s1 =new student;
$s1 ->roll_no=10;
$s1 ->name="prasad";
$s1 ->display();
?>