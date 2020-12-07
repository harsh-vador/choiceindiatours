<?php
if (isset($_SESSION['email'])) {
	
$id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_STRING);
include_once("php/config.php");
$sql="SELECT * FROM tours WHERE tour_id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$image=$row['image_url'];
$sdate=$row['starting_date'];
$edate=$row['end_date'];
$places=$row['places'];
$price=$row['price'];
$desc=$row['description'];
$pdf=$row['pdf_url'];
mail(, subject, message);
echo '<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Choice Tours & Travels</title>
	<link rel="shortcut icon" href="images/icon.ico">
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
	<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
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
								<li class="has-dropdown active">
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
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(<?php echo $image;?>);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1><?php echo ucfirst($places);?></h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>';?>
		<?php echo" <div class='container'>
		<div class='row row-pb-md' id='contact'>
		<div class='col-md-6 colorlib-widget'>
		<br>
		<h3><b>Know More about the Adventure : </b></h3>
		<br>
		<p><b>".$desc."</b></p>
		</div>
		<div class='col-md-6 col-md-push-1'>
		<br>
		<h3><b>See when you are with US! </b></h3>
		<br><b><p style='font-size:200%;'>
		".$sdate." - ".$edate."</b></p>
		</div>
		</div>	
		<center>
		<div class='alert alert-info'>
		<h3><b>We make it possible in the least we can !</b></h3>
		<br>
		<p style='font-size:200%;'><b> Rs.".$price." </b></p>
		</div>
		<center>
					<a href='payment.php?=id".$id"' id='confirmation' class='btn btn-info'>Buy Now !!</a>
				</center>

		</div>
		</div>

		</div>
		";?>
		<?php
		include_once("footer.php");
		?>	<!-- jQuery -->
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
		<script src="js/script.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#confirmation').click(function(){
					confirm('Do you want to buy this package?');
					window.location.href="";

				})
			})
		</script>

	</body>
	</html>
}
else{}
?>



http://p-y.tm/Zv-nDvu