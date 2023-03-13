<html>
<head>
    <title>multi diamentional array</title></head>
<body>
    <h1> multi diamentional array</h1>
<?php
    $person=array
    (
    array
    (  
        "name"=>"prasad",
        "mob"=>"7219705442",
        "email"=>"prasadbhavsar7219@gmail.com",
    ),
    array
    (
         "name"=>"nilesh",
        "mob"=>"9309863121",
        "email"=>"nileshpawar7219@gmail.com",
    ),
    array
    (
         "name"=>"yash",
        "mob"=>"85348523287",
        "email"=>"yashbachhav7219@gmail.com",
    )
    );
    //accesing elements
    echo "nilesh email id is".$person[1]["email"],
    "<br>";
    echo "prasad mobile no is ".$person[2]["mob"];
?>
</body>
</html>