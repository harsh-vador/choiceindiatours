<?php
$servername="localhost";
$username="root";
$password="";
$dbname="choiceindiatours";
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn)
{
//die("Connecton failed:".mysqli_connect_error());
echo "problem in server";
exit();
}
else
{
//echo "connected successfully";
//mysqli_close($conn);
}
?>