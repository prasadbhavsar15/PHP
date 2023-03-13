<?php
    //creating index array 
    $course=array("CO","IF","EJ","ME","CE");
    echo "looping using foreach<br>";
    foreach($course as $val)
    {
        echo $val."<br>";
    }
//count() is used to coint the number of elements in an array
    $total=count($course);
    echo"<br> total number of element are $total<br>";
    echo"looping using for :<br>";
    for ($n=0;$n<$total; $n++)
    {
        echo$course[$n],"<br>";

    }
    ?>