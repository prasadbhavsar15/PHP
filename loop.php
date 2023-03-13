<html>
<head>
    <title>multi diamentional array</title></head>
<body>
    <h1> multi diamentional array</h1>
<?php
$mobile=array
(
    array("LG",20,18),
    array("samsung",23,12),
    array("Radme",20,49)

);
for($row=0;$row<3;$row++)
    {
        echo"<p><b>Row number $row</b></p>";
        echo"<ul>";
        for($col=0;$col<2;$col++)
        {
            echo "<li>".$mobile[$row][$col]."</li>";
        }
        echo"</ul>";

    }
?>
</body>
</html>