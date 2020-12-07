<?php


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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
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
								<li class="active"><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="#">Tours</a>
									<ul class="dropdown">
										<li><a href="domestic.php">Domestic</a></li>
										<li><a href="international.php">International</a></li>
									</ul>
								</li>
								<?php
								include_once "show.php";
								?>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								</ul>
								</div>
								</div>
								</div>
								</div>
								</nav>
								<aside id="colorlib-hero">
								<div class="flexslider">
								<ul class="slides">
								<li style="background-image: url(images/img_bg_1.jpg);">
								<div class="overlay"></div>
								<div class="container-fluid">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
								<h2>2 Days Tour</h2>
								<h1>Amazing Chennai Tour</h1>
								</div>
								</div>
								</div>
								</div>
								</li>
								<li style="background-image: url(images/img_bg_2.jpg);">
								<div class="overlay"></div>
								<div class="container-fluid">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
								<h2>10 Days Cruises</h2>
								<h1>From Greece to Spain</h1>
								</div>
								</div>
								</div>
								</div>
								</li>
								<li style="background-image: url(images/img_bg_5.jpg);">
								<div class="overlay"></div>
								<div class="container-fluids">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
								<h2>Explore our most tavel agency</h2>
								<h1>Our Travel Agency</h1>
								</div>
								</div> 	
								</div>
								</div>
								</li>
								<li style="background-image: url(images/img_bg_4.jpg);">
								<div class="overlay"></div>
								<div class="container-fluid">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
								<div class="slider-text-inner text-center">
								<h2>Experience the</h2>
								<h1>Best Trip Ever</h1>
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
								<?php 
								if (isset($_SESSION['email'])) {
									echo '
										<CENTER><br><br><br>
								<h2> Hurray! Already logged in <img src="images/logged.png" alt="logged"style="width:20%;height:20%;"></h2>
									';
								}
								else{
									echo '
								<CENTER><br>
								<h3>Enter Your Credentials Here</h3>
								</CENTER>
								<form action="php/login.php" method="POST">
								<div class="row form-group">
								<input type="email" id="email" class="form-control" placeholder="Username" name="email">								
								</div>
								<div class="row form-group">
								<input type="password" id="password" class="form-control" name="password" placeholder="Password">
								</div>
								<div class="form-group text-center">
								<input type="submit" value="Login" class="btn btn-primary">
								</div>
								<center><p>Not registered yet? <a href="signup.php">Sign Up</a></p></center>

								</form>	';
								}	
								?>
								</div>
								</div>
								</div>
								</div>
								<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
								<div class="overlay"></div>
								<div class="container">
								<div class="row">
								<div class="col-md-6 animate-box">
								<div class="intro-desc">
								<div class="text-salebox">
								<div class="text-rights">
								<h3 class="title">Just have a glimpse of India!</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><br><br><br><br>
								<blockquote style="color: yellow;">
								"India has two million gods, and worships them all. In religion all other countries are paupers; India is the only millionaire."<br> – Mark Twain
								</blockquote>
								</div>
								</div>
								</div>
								</div>
								<div class="col-md-6 animate-box">
								<div class="video-wrap">
								<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
								<a href="video/video.mp4" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								<div id="colorlib-hotel">
								<div class="container">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
								<h2>Upcoming Tours</h2>
								<p>We love to tell our successful far far away, behind the word mountains, far from the routine, there live the blind texts.</p>
								</div>
								</div>
								<div class="row">
								<div class="col-md-12 animate-box">
								<div class="owl-carousel">
								<div class="item">
								<div class="hotel-entry">
								<a href="#" class="hotel-img" style="background-image: url(images/hotel-1.jpg);">
								<p class="price"><span>Rs. 20,000</span><small></small></p>
								</a>
								<div class="desc">
								<span class="place">Kerela</span>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
								</div>
								</div>
								<div class="item">
								<div class="hotel-entry">
								<a href="#" class="hotel-img" style="background-image: url(images/hotel-2.jpg);">
								<p class="price"><span>Rs. 20,000</span><small></small></p>
								</a>
								<div class="desc">
								<span class="place">New York, USA</span>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
								</div>
								</div>
								<div class="item">
								<div class="hotel-entry">
								<a href="#" class="hotel-img" style="background-image: url(images/hotel-3.jpg);">
								<p class="price"><span>Rs. 20,000</span><small></small></p>
								</a>
								<div class="desc">

								<span class="place">New York, USA</span>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
								</div>
								</div>
								<div class="item">
								<div class="hotel-entry">
								<a href="#" class="hotel-img" style="background-image: url(images/hotel-4.jpg);">
								<p class="price"><span>Rs. 20,000</span><small></small></p>
								</a>
								<div class="desc">
								<span class="place">New York, USA</span>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>	
								<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
								<div class="overlay"></div>
								<div class="container">
								<div class="row">
								<div class="col-md-12 animate-box" id="about">
								<div class="intro-desc">
								<div class="text-salebox">
								<center>
								<span class="aboutUs">About Us</span>
								<br>
								<h3 class="title"><p style="color: white;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p style="color: white;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								<p><a href="about.php" class="btn btn-primary btn-outline">Read more</a></p><br>
								</center>
								</div>
								</div>
								</div>
								</div>
								</div>
								<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
								<div class="overlay"></div>
								<div class="container">
								<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
								<h2>Sign Up for a Newsletter</h2>
								<p>Sign up for our mailing list to get latest updates and offers.</p>
								<form class="form-inline qbstp-header-subscribe" method="POST" action="php/subscribers.php">
								<div class="row">
								<div class="col-md-12 col-md-offset-0">
								<div class="form-group">
								<input type="text" class="form-control"  name ="email" id="email" placeholder="Enter your email">
								<button type="submit" class="btn btn-primary">Subscribe</button>
								</div>
								</div>
								</div>
								</form>
								</div>
								</div>
								</div>
								</div>
								<?php
								include_once("footer.php");
								?>
								<!-- jQuery -->
								<script src="js/jquery.min.js"></script>
								<!-- jQuery Easing -->
								<script src="js/jquery.easing.1.3.js"></script>
								<!-- Bootstrap -->
								<script src="js/bootstrap.min.js"></script>
								<!-- Waypoints -->
								<script src="js/jquery.waypoints.min.js"></script>
								<!-- Flexslider -->
								<script src="js/jquery.flexslider-min.js"></script>
								<!-- Owl carousel -->
								<script src="js/owl.carousel.min.js"></script>
								<!-- Magnific Popup -->
								<script src="js/jquery.magnific-popup.min.js"></script>
								<script src="js/magnific-popup-options.js"></script>
								<!-- Date Picker -->
								<script src="js/bootstrap-datepicker.js"></script>
								<!-- Stellar Parallax -->
								<script src="js/jquery.stellar.min.js"></script>
								<!-- Main -->
								<script src="js/main.js"></script>
								<script src="js/tilt.jquery.min.js"></script>
								<script >
									$('.js-tilt').tilt({
										scale: 1.1
									})
								</script>

							</body>
							</html>

