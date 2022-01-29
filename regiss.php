<html>

<head>
    <title>REGISTRATION FORM</title>

    <body>

        <!-- <form name="regiss" method="post" action="regiss.php">
            <!-- we will create registration.php after registration.html -->
            <!-- USERNAME:<input type="text" name="name" value=""></br>
            EMAIL-ID:<input type="text" name="email" value=""></br>
            PASSWORD:<input type="text" name="password" value=""></br>
            <!-- RE-PASSWORD:<input type="text" name="repassword" value=""></br> -->
            <!-- <input type="submit" name="submit" value="submit"> -->
        <!-- </form> -->

    </body>
</head>
</html

<?php     //start php tag
//include connect.php page for database connection
Include("conn.php");
//if submit is not blanked i.e. it is clicked.
    if(isset($_REQUEST['submit'])!='')
    {
    if($_REQUEST['Name']=='' || $_REQUEST['Email']=='' || $_REQUEST['Mobile']=='' || $_REQUEST['Address']=='')
    {
    Echo "please fill the empty field.";
    }
    Else
    {
    $sql= "INSERT INTO orders(Name,Email,Mobile,Address) values('".$_REQUEST['Name']."', '".$_REQUEST['Email']."' , '".$_REQUEST['Mobile']."', '".$_REQUEST['Address']."')";
    $res=mysqli_query($con,$sql);
    if($res<TRUE)
    {
    echo "Your order placed successfully";
    }
    else
    {
    echo "Something wrong";
    }

    }
    }

?>




<?php

if(isset($_POST['submit']))
{
    $to      = 'sudalaimmani@@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: ssmanibtc@gmail.com';

    mail($to, $subject, $message, $headers);

    echo 'your order has been placed success.';
}

?>