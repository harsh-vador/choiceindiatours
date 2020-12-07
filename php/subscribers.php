<?php 
include_once("config.php");
$email=$_REQUEST['email'];
$sql="INSERT INTO  subscribers (email)
                VALUES ('$email');";    
                if(mysqli_multi_query($conn,$sql)){
                	header("location: ../sgreet.php");
}
else{
header("location : ../index.php");
exit();
}

?>