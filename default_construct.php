<?php
    class student
    {
        public $roll_no;
        public $name;
        function __construct()
        {
            $this->roll_no="10";
            $this->name="prasad";
        }
 
    public function display()
    {
        echo"Roll no : " .$this->roll_no . "<br>";
        echo"Name : " .$this->name;

    }
}
$s1= new student;
$s1->display();
?>