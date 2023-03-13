<?php
$course=array("CO","IF","EJ","ME","CE");
echo"<h2>Before deletion:</h2><br>";
echo"$course[0]<br>";
echo"$course[1]<br>";
echo"$course[2]<br>";
echo"$course[3]<br>";
echo"$course[4]<br>";
unset($course[3]);
echo"<h2> Before deletion:</h2><br>";
print_r($course);
echo"<h2> Delete entire array elements:</h2><br>";
unset($course);
?>