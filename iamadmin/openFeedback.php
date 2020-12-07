<?php
$feedback_id=filter_input(INPUT_GET,"f_id",FILTER_SANITIZE_STRING);
include_once("php/config.php");
$sql="SELECT * FROM feedbacks WHERE feedback_id='$feedback_id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$name=$row['fname'].' '.$row['lname'];
$email=$row['email'];
$subject=$row['subject'];
$message=$row['message'];

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

	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="feedbacks.css">
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
								<li class="active"><a href="feedbacks.php">Feedbacks</a></li>
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
					<li style="background-image: url(../images/singapore.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Hi</h1>
										<h1>Let's Know What Others Feel About Us !</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/tour-4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Wanna know how ?</h1>
										<h1>We make it simple for you...</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/tour-5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Here is a panel for you...</h1>
										<h1>Read the minds !</h1>
									</div>
								</div> 	
							</div>
						</div>
					</li>  	
				</ul>
			</div>
		</aside>
		<div class="container-fluid">
			<div class="row" style="margin-bottom: 0px">
				<div class="col-xs-2"></div>
				<div class="col-md-8">
					<br><br>
					<div>
						<h2><?php echo $subject;?></b><a style="color: black;"><a href="php/delete.php?id=<?php echo $feedback_id;?>" style="color: black;"><i class="fa fa-trash pull-right" aria-hidden="true" style="font-size: 90%"></i></a></h2>
						<hr>	
					</div>
				</div>
				<div class="col-xs-2"></div>
			</div>
			<div class="row" style="margin-top: 1px!important;">
				<div class="col-xs-2"></div>
				<div class="col-md-8">
					<br><br>
					<div>
						<h2><font style="color:red;"> <?php echo $name;?></font>(<?php echo $email;?>)<span class="pull-right" style="color: darkgrey;"><?php echo $feedback_id;?></span></h2>
						<hr>
					</div>
				</div>
				<div class="col-xs-2"></div>
			</div>
			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-md-8">
					<br><br>
					<div>
						<p>
							<?php echo $message; ?>
						</p>
					</div>
				</div>
				<div class="col-xs-2"></div>
			</div>	
		</div>
		<?php
		include_once("admin_footer.php");
		?>
		<script>
			function refresh() {
				location.reload();
			}
		</script>
		<script type="text/javascript" src="feedbacks.js"></script>
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

