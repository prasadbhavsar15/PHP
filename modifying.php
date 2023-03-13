<HTML>
<HEAD>
<TITLE>
Modifying an array
</TITLE>
</HEAD>
<BODY>
<H1>
Modifying an array
</H1>
<?php
$course[0]="Computer Engg";
$course[1]="Information Tech";
$course[2]="Electronics and Telecomm";
echo"<h2>Before modification</h2>";
echo$course[0],"<BR>";
echo$course[1],"<BR>";
echo$course[2],"<BR>";
echo"<br><h2>After modification</h2>";
$course[2]="Mechanical Engg";
$course[]="Civil Engg";
for($i=0;$i<count($course);$i++)
{
	echo$course[$i],"<BR>";
}
?>
</BODY>
</HTML>