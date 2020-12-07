<link href='../css/bootstrap.css' rel='stylesheet'> 
<?php
include_once("config.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$number=$_POST['number'];
$dob=$_POST['dob'];
$name=$fname." ".$lname;
/*echo $id."\n".$name."\n".$year."\n".$a."\n".$b."<br>".$sugg;*/
$sql="INSERT INTO users(name,password,email,pnumber,dob) VALUES('$name','$password','$email','$number','$dob')";    
	if(mysqli_multi_query($conn,$sql)){
		echo "<br><Br><div class='container try'>";
		echo"
		<div class='alert alert-success'>
		<strong>Thank You!</strong>  
		</div>
		";

		echo "<div class='alert alert-info'>
		<center> <a href='../index.php#login'><button type='button' class='btn btn-default'>Login now</button></a>
		</center>
		</div>";
		echo "</div>";

	}
	else{
		echo "<br><br><div class='alert alert-danger'>
		<strong>Oops!</strong> There seems to  be  an error in your form.Click below to fill it again.
		</div>";
		echo "<div class='alert alert-info'>
		<center> <a href='../signup.php'>Click to go : Form</a>.</center>
		</div>";
	}
?>