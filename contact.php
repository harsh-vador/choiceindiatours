<?php 
include_once("iamadmin/php/config.php");
$sql="SELECT * FROM company_details";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$email=$row['email'];
$contact=$row['contact_no'];
$street=$row['street'];
$roadNo=$row['roadNo'];
$city=$row['city'];
$pincode=$row['pincode'];
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
	<script	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<style type="text/css">
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
								<li><a href="index.php">Home</a></li>
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
								<li><a href="about.php">About</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/cover-img-3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">	
										<h1>Contact us</h1>
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
						<h3>Get In Touch</h3>
						<form method="POST" action="php/addFeedback.php">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname">First Name</label>
									<input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" required>
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="email" id="email"  name="email" class="form-control" placeholder="Your email address" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Subject</label>
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us(Maximum 250 characters)" required></textarea>
									<span id="info" class="info">
										<span id="display" style="color: red;"></span>	
									</span>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" id="btn" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<center>
								<div class="col-md-3">
									<p><span><i class="icon-location"></i></span> <br><?php echo $street.'<br>'. $roadNo.'<br>'.$city.'-'.$pincode.'</p>
									</div>
									<div class="col-md-3">
									<p><span><i class="icon-phone3"></i></span> <br><a href="tel:'.$contact.'">'.$contact.'</a></p>
									</div>
									<div class="col-md-3">
									<p><span><i class="icon-paperplane"></i></span> <br><a href="mailto:'.$email.'">'.$email.'</a></p>';?>
								</div>
								<div class="col-md-3">
									<p><span><i class="icon-globe"></i></span><br> <a href="choiceindiatours.com">choiceindiatours.com</a></p>
								</div>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
		<Center>	
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.7301473403577!2d72.85626031443236!3d19.250588986987964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0e41a41f33f%3A0xf7b8fe185e4a26ea!2sChoice+Tours+%26+Travel!5e0!3m2!1sen!2sin!4v1530510669673" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</Center>
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
		<script type="text/javascript">
		$(document).ready(function() {
			$("#message").keyup(function () {
				$("#display").show();
				$("#info").css("display","block");
				var value=$("#message").val();
				var len=value.length;
				$("#display").text("Number of characters="+len);
				if (len>500) {
					$("#btn").attr('disabled',true);
				}
				else{
					$("#btn").removeAttr('disabled');
				}
			});
		});
	</script>
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
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="js/google_map.js"></script>

		<!-- Main -->
		<script src="js/main.js"></script>

	</body>
	</html>

