<?php
	include_once('config.php');
	$username=$_POST['username'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$street=$_POST['street'];
	$roadNo=$_POST['roadNo'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$facebook_link=$_POST['facebook_link'];
	$twitter_link=$_POST['twitter_link'];
	$description=$_POST['description'];
?>
<?php
		 $sql = "UPDATE company_details SET email='$email',contact_no='$contact',street='$street',roadNo='$roadNo',city='$city',pincode='$pincode',facebook='$facebook_link',twitter='$twitter_link',description='$description' WHERE admin_id='$username';";		
//$result=mysqli_query($conn,$sql);

if(mysqli_multi_query($conn,$sql))
	{
echo "<script>";
echo"
alert('Changes Saved!');
";

echo "window.location.href='../profile.php'";
echo "</script>";
}
else{
echo "
Image Size should be less than 500 Kb!
</div>
";
exit();
}
?>