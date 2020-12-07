<?php
echo "Processing...";
include_once('config.php');
$fname = $_POST["fname"];
$lname=$_POST["lname"];
$password=md5($_POST["password"]);
$number=$_POST['number'];
$email = $_POST["email"];
$dob=$_POST["dob"];
$name=$fname." ".$lname;
$sql="INSERT INTO  users (name,password,email,pnumber,dob)
VALUES ('$name','$password,'$email','$number','$dob');";    
if(mysqli_multi_query($conn,$sql)){
 
}

else{
	echo "invalid";
}
?>