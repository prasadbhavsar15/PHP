<?php
class a
{
    public function dis1()
    {
        echo "parent-a <br>";
    }
}

Trait b


{
    public function dis2()
    {
        echo "derive-b <br>";
    }
}
class c extends a
{
    use b ;
    public function disp3()
    {
        echo "\n child-c";
    }
}
$dis=new c();
$dis->dis1();
$dis->dis2();
$dis->disp3();
?>