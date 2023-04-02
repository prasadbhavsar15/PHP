<?php
class a
{
    function dis1()
    {

    echo "hello <br>";
    }
}
class b extends a
{
    function dis2()
    {
        echo "PHP programing <br>";
    }
}
$dis=new b();
$dis->dis1();
$dis->dis2();
