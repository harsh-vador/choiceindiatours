<?php
include_once("config.php");
$id=$_REQUEST['username'];
$password=$_REQUEST["password"];
$sql="select * from company_details where admin_id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
if ($password==$row['password']){
session_start();
$_SESSION['user_name']=$row['admin_id'];
header('location:../panel.php');
}
else
{
echo "Please enter valid credentials";
}
?>