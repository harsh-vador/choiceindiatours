<?php
include_once("config.php");
$id=rand(10000000,1200005);
$start_date=urldecode($_REQUEST['start_date']);
$till_date=urldecode($_REQUEST['till_date']);
$type=$_REQUEST['type'];
$places=$_REQUEST['location'];
$price=$_REQUEST['price'];
$description=$_REQUEST['desc'];
$status="pending";

if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/png")) && ($_FILES["file"]["size"]<5000000) ){
	if($_FILES["file"]["error"]>0){
		echo "error".$_FILES["file"]["type"]."</br>";
	}
	else{
		$fileName=$_FILES["file"]["name"];
		$kaboom = explode(".", $fileName);
		$fileExt = end($kaboom);
		$_FILES["file"]["name"]=$id.".".$fileExt;
		$path="images/tour_images/".$_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/tour_images/".$_FILES["file"]["name"]);
		$sql="INSERT INTO tours (type,starting_date,end_date,places,price,image_url,description,status)
		VALUES ('$type','$start_date','$till_date','$places',$price,'$path','$description','$status');";    
		if(mysqli_multi_query($conn,$sql)){
			/*$sql="SELECT * FROM subscribers";
			$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
			$row=mysqli_fetch_assoc($result);
			while($row = mysqli_fetch_array($result)){
				mail($row['email'],'New tour conducted by ChoiceIndiaTours.com', $message);
				$message=include_once('email_template.php');
			}*/
			echo "<script>";
			echo"
			alert('Subscription Letter Sent !');
			";

			echo "window.location.href='../addTour.php'";
			echo "</script>";
		}
	}
}
else{
	header("location : ../addTour.php");
	exit();
}

?>