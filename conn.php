<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="mani692";  //database name which you created
$con=mysqli_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysqli_error());
}
echo "Connecting successfully";



mysqli_select_db($con,$database);


?>