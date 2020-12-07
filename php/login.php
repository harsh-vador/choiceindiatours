<?php
include_once("config.php");
$id=$_REQUEST['email'];
$password=md5($_REQUEST["password"]);
$sql="select * from users where email='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
if ($password==$row['password']){
session_start();
$_SESSION['email']=$row['email'];
header('location:../index.php');
}
else
{
echo "<script>";
echo"
alert('Invalid detials !');
";

echo "window.location.href='../index.php'";
echo "</script>";

}
?>