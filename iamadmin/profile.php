<?php
include_once("php/config.php");
$sql="SELECT * FROM company_details";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$username=$row['admin_id'];
$password=$row['password'];
$email=$row['email'];
$contact=$row['contact_no'];
$street=$row['street'];
$roadNo=$row['roadNo'];
$city=$row['city'];
$pincode=$row['pincode'];
$desc=$row['description'];
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
<![endif]-->

</head>
<style type="text/css">
.submit{
	color:  #00BBF0;
	background-color: white;
	padding: 6px;
	border: 2px solid  #00BBF0;
}
.submit:hover{
	color: white;
	background-color:  #00BBF0;
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
										<li class="active"><a href="profile.php"><i class="icon icon-user"></i> Profile</a></li>
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
					<li style="background-image: url(../images/cover-img-5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>More About You ! </h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<div id="colorlib-about" style="margin-bottom: 0px;">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box" style="height: 100%;">
							<div class="row">
								<div class="col-md-12 about">
									<h2>About</h2>

									<ul>
										<li><a href="#username">Username</a></li>
										<li><br></li>
										<li><a href="#email">Email Id</a></li>
										<li><br></li>
										<li><a href="#address">Address</a></li>
										<li><br></li>
										<li><a href="#desc">Description</a></li>
										<li><br></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box">
							<div class="row">
								<div class="col-md-12" id="username">
									<br>
									<h4><b> <?php echo $username; ?></b></h4>
									<br>
								</div>
								<div class="col-md-12" id="email">
									<h4><b> <?php echo $email; ?></b></h4>
									<br>
								</div>
								<div class="col-md-12" id="url">
									<h4><b> <?php echo $street.",".$roadNo.",".$city."-".$pincode; ?></b></h4>
									<br>
								</div>
								<div class="col-md-12" id="desc">
									<h4><b> <?php echo $desc; ?></b></h4>
								</div>
							</div>
						</div>
					</div>
					<center>
						<a href="settings.php">
							<button type="button" class="submit">
								Make Changes ?
							</button>
						</a>
					</center>
					<br><br>
				</div>
			</div>
			<?php
			include_once("admin_footer.php");
		?>

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

