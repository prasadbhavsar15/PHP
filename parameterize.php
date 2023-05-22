<?php
    class simple
    {
        private $num1;
        private $num2;

    public function simple($n1,$n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;

    }
public function printvalues()
    {
        echo"num1 : ".$this->num1 ."<br>";
        echo"num2 : ".$this->num2 ."<br>";
    }
}
$s=new simple(10,20);
$s->printvalues();