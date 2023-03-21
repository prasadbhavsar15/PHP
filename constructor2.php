<?php
    class employee
    {
        public $name;
        public $position;

        function __construct($name,$position)
        {
            $this->name=$name;
            $this->position=$position;
        }
        function show_details()
        {
            echo $this->name ." : ";
            echo " your favourate place is ".$this->position ."<br>";
        }

    }
    $employee_obj=new employee("prasad","devloper");
    $employee_obj->show_details();
    
    $employee2=new employee("amol","tester");
    $employee2->show_details();
    ?>