<?php 
include_once("php/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/icon.ico">
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
.login100-pic {
	width: 316px;
}

.login100-pic img {
	max-width: 100%;
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
							<div id="colorlib-logo"><a href="../index.php">ChoiceIndiaTours</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="#login">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(../images/blog-5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">	
										<h1>Login Here</h1><br>
										<a href="#login"><i class="icon icon-arrow-down2" style="border: 1px solid white;border-radius:40%;color: white;font-size: 250%;padding:2%;"></i>
										</a>
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
					<div class="col-md-5 col-md-offset-1 animate-box">
						<div class="login100-pic js-tilt" data-tilt>
							<img src="images/img-01.png" alt="IMG">
						</div>	
					</div>
					<div class="col-md-2 col-md-offset-1 animate-box"></div>
					<div class="col-md-5 col-md-offset-1 animate-box pull-right" id="login">
						<CENTER><br>
							<h3>Enter Your Credentials Here</h3>
						</CENTER>
						<form action="php/login.php" method="POST">
							<div class="row form-group">
								<input type="text" id="username" class="form-control" placeholder="Username">								
							</div>
							<div class="row form-group">
								<input type="password" id="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Login" class="btn btn-primary">
							</div>

						</form>		
					</div>
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
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="../js/google_map.js"></script>

		<!-- Main -->
		<script src="../js/main.js"></script>
		<script src="js/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.1
			})
		</script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
	</body>
	</html>

