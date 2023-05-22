<?php
    class test
    {
        function __construst()
        {
            print"Constructor called....<br>";
        }
        function __destruct()
        {
            print"distructor called.....";
        }
    }
$obj =new test();
?>