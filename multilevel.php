<?php
class grandparent
{
    function dis1()
    {
        echo "Grand-Parent <br>";
    }
}
class parents extends grandparent
{
    function dis2()
    {
        echo "parent class <br>";

    }
}
class child extends parents
{
    function dis3()
    {
        echo "child";
    }
}
$dis=new child();
$dis->dis1();
$dis->dis2();
$dis->dis3();