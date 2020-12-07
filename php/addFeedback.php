<?php 

include_once("config.php");
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

$sql="INSERT INTO  feedbacks (fname,lname,email,subject,message)
                VALUES ('$fname','$lname','$email','$subject','$message');";    
                if(mysqli_multi_query($conn,$sql)){
                	header("location: ../greet.php");
}
else{
header("location : ../feedbacks.php");
exit();
}

?>