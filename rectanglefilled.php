<?php
class rectangle
{
    public$length=0;
    public $width=0;
    public function getperimeter()
    {
        return(2*($this->length+$this->width));

    }
    public function getarea()
    {
        return($this->length*$this->width);

    }
}
$obj=new rectangle;
echo $obj->length ."<br>";
echo $obj->width ."<br>";
$obj->length=30;
$obj->width=20;
echo"length is ". $obj->length ."<br>";
echo"width is  ". $obj->width ."<br>";
echo"perimeter  is". $obj->getperimeter() ."<br>";
echo"area is". $obj->getarea() ."<br>";
?> 