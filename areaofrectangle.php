<?php
Class Rectangle
{
   Public $lenght=0;
   Public $width=0;
   Public function getPerimeter ()
{
    Return (2*($this-> length + $this -> width));
}
Public function getArea()
{
 Return ($this-> length*$this->width);
}
}
$obj = new Rectangle;
echo $obj->length. "<br>";
echo $obj->width."<br>";
$obj->length=30;
$obj->width=30;
echo"length:".$obj->length."<br>";
echo"width:".$obj->width."<br>";
echo"Perimeter:" .$obj->getPerimeter()."<br>";
echo"Area:".$obj->getArea()."<br>";
?>