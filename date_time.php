<html>
<head>time date program <br><br></head>
<body>
<?php
echo "today's date is :";
$today=date("d/m/Y");
echo $today;
// time date 
$timestamp=time();
echo($timestamp);
echo"<br/>";
echo(date("F d,Y h:i:s A",$timestamp));
?>
</body>
</html>