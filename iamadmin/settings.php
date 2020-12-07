
<?php
include_once("php/config.php");
$sql="SELECT * FROM company_details";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$username=$row['admin_id'];
$password=($row['password']);
$email=$row['email'];
$contact=$row['contact_no'];
$street=$row['street'];
$roadNo=$row['roadNo'];
$city=$row['city'];
$pincode=$row['pincode'];
$description=$row['description'];
$twitter_link=$row['twitter'];
$facebook_link=$row['facebook'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="../images/icon.ico">
	<title>Choice Tours & Travels</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<script	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>
<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
<![endif]-->

</head>
<style type="text/css">
.aboutUs{
	font-size: 40px;
	position: center;
	display: block;
	margin-top: 0px;
	top: 10px !important;
	line-height: 1;
	color: #FFDD00;
	font-weight: 700;
}
#display: {
	align-self: left;
}
.info{
	display: none;
	margin-top:5px;
}
</style>
<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">ChoiceIndiaTours</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="addTour.php">Announce A Tour</a></li>
								<li><a href="upcoming_Tour.php">Upcoming Tour</a></li>
								<li><a href="feedbacks.php">Feedbacks</a></li>
								<li class="has-dropdown">
									<a href="#">Admin <i class="fa fa-chevron-down" aria-hidden="true"></i>
									</a>
									<ul class="dropdown">
										<li><a href="profile.php"><i class="icon icon-user"></i> Profile</a></li>
										<li><a href="settings.php"><i class="icon icon-settings"></i> Settings</a></li>
										<li><a href="php/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(../images/img_bg_3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Hi</h1>
										<h1>Would you like to change things to make it different ?</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/hotel-6.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>There are things you can Modify...</h1>
										<h1>Give it a try !</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/cover-img-5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>We try the best...</h1>
										<h1>So that you can make it like you want !</h1>
									</div>
								</div> 	
							</div>
						</div>
					</li>	   	
				</ul>
			</div>
		</aside>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Look Up,Make Changes,Hit Save !</h3>
						<form method="POST" action="php/update.php">
							<div class="row form-group">
								<div class="col-md-5">
									<label for="username">Username</label>
									<input type="text" id="username" name="username" class="form-control" value="<?php echo $username;?>" required editable="false">
								</div>
								<div class="col-md-7">
										<label for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" value="<?php echo $email;?>" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="contact">Your Contact</label>
									<input type="tel" id="contact" name="contact" class="form-control" value="<?php echo $contact;?>" required="true">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="street">Street</label>
									<input type="text" id="street" name="street" value="<?php echo $street;?>" class="form-control" required>
								</div>
								<div class="col-md-6">
									<label for="roadNo">Road Number</label>
									<input type="text" id="roadNo" name="roadNo" value="<?php echo $roadNo;?>" class="form-control" required="true">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="city">City</label>
									<input type="text" id="city" name="city" class="form-control" value="<?php echo $city;?>" required>
								</div>
								<div class="col-md-6">
									<label for="pincode">Pin Code</label>
									<input type="number" id="pincode" name="pincode" min="0" value="<?php echo $pincode;?>" class="form-control" required="true">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="faceboo">Facebook Link</label>
									<input type="url" id="fblink" name="facebook_link" class="form-control" value="<?php echo $facebook_link;?>">
								</div>
								<div class="col-md-6">
									<label for="twitter">Twitter Link</label>
									<input type="url" id="twlink" name="twitter_link"class="form-control" value="<?php echo $twitter_link;?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="description">Description</label>
									<textarea name="description" id="desc" cols="30" rows="10" class="form-control" required><?php echo $description;?></textarea>
									<span id="info" class="info">
										<span id="display" style="color: red;"></span>	
									</span>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" id="btn" value="Save Changes" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
		<?php
		include_once("admin_footer.php");
		?>
		<script type="text/javascript">
		$(document).ready(function() {
			$("#desc").keyup(function () {
				$("#display").show();
				$("#info").css("display","block");
				var value=$("#desc").val();
				var len=value.length;
				$("#display").text("Number of characters="+len);
				if (len>1000) {
					$("#btn").attr('disabled',true);
				}
				else{
					$("#btn").removeAttr('disabled');
				}
			});
		});
	</script>
		<!-- jQuery -->
		<script src="../js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="../js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="../js/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script src="../js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="../js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="../js/jquery.magnific-popup.min.js"></script>
		<script src="../js/magnific-popup-options.js"></script>
		<!-- Date Picker -->
		<script src="../js/bootstrap-datepicker.js"></script>
		<!-- Stellar Parallax -->
		<script src="../js/jquery.stellar.min.js"></script>
		<!-- Main -->
		<script src="../js/main.js"></script>

	</body>
	</html>

