<html>
<head>
<style>
    .error{color:#ff0000;}
</style>
</head>
<body>
    <?php
        //define a variable and set to empty value
        $nameErr=$emailErr=$genderErr=$websiteErr="";
        $name=$email=$gender=$comment=$website="";
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST["name"]))
            {
                $nameErr="name is required";
            }
            else
            {
                $name=test_input($_POST["name"]);
            }
            if(empty($_POST["email"]))
            {
                $emailErr="email is required";
            }else
            {
                $email=test_input($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                $emailErr="invalid email format";
            }
        
        if (empty($_POST["comment"]))
        {
            $comment="";
        }
        else
        {
            $comment=test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"]))
        {
            $genderErr="gender is required";
        }
        else
        {
            $gender=test_input($_POST["gender"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<? echo $emailErr ?>
<h2>Somwanshi Sir Classes Registration Form</h2>

<!-- <p><span class="error"> required field.</span></p> -->
 <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<table>

<tr>

<td>Name:</td>

<td><input type="text" name="name">

<span class="error">* <?php echo $nameErr; ?></span>

</td> </tr>

<tr>

<td>E-mail*: </td> <td><input type="text" name = "email" >

<span class="error">* <?php echo $emailErr; ?></span> </td>

</tr>



<tr>

<td>Classes:</td>

<td><textarea name = "comment" rows= "5" cols="48"></textarea></td>

</tr> <tr>

<td>Gender:</td>

<td>

<input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value= "male">Male

<span

class="error">* <?php echo $genderErr; ?></span>

</td>

</tr> <td>

<input type="submit" name="submit" value="Submit">
</td>

</table>

</form>


</body>

</html
