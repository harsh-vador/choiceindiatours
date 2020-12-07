<?php
include_once "php/config.php";
session_start();
if (isset($_SESSION['email'])) {
	$email=$_SESSION['email'];
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	echo '<li class="has-dropdown">
	<a href="#"><i class="icon icon-user"></i> '.$name.'</a>
	<ul class="dropdown">
	<li><a href="booked.php">Booked Tours</a></li>
	<li><a href="php/logout.php">Logout</a></li>
	</ul>
	</li>';
}
else{
	echo '
	<li><a href="index.php#login">Login/SignUp</a></li>
	';
}

?>