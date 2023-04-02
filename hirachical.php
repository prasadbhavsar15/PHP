<?php
class a
{
    public function function_a()
    {
        echo "class a <br>";

    }
}
class b extends a
{
    public function function_b()
    {
        echo "clas b <br>";
    }
}
class c extends a
{
    public function function_c()
    {
        echo "class c";
    }
}
$dis=new b();
$dis7=new c();
$dis->function_a();
$dis->function_b();
$dis7->function_c();
?>