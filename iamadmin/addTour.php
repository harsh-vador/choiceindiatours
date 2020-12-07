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

	<script	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>

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
								<li class="active"><a href="addTour.php">Announce A Tour</a></li>
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
					<li style="background-image: url(../images/img_bg_2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Hi</h1>
										<h1>Ready To Add A Trip?</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/img_bg_1.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Why Wait ?</h1>
										<h1>Let's make it up then !</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/img_bg_5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Just A few moments...</h1>
										<h1>You are almost Done !</h1>
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
						<h3>We need to collect some information</h3>
						<form action="php/addTour.php" method="POST" enctype="multipart/form-data">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="date">Starting Date</label>
									<i class="icon icon-calendar2"></i>
									<input type="text" id="start_date" name="start_date" class="form-control date" placeholder="Start Date" required>
								</div>
								<div class="col-md-6">
									<label for="date">Till Date</label>
									<i class="icon icon-calendar2"></i>
									<input type="text" id="till_date" name="till_date" class="form-control date" placeholder="Till Date" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-4">
									<label for="email">Tour Type</label>
									<select name="type" id="type" class="form-control" required>
										<option value="none">Type</option>
										<option value="domestic">Domestic</option>
										<option value="international">International</option>
									</select>
								</div>
								<div class="col-md-4">
									<label for="email">Major Locations</label>
									<input type="text" id="location" name="location" pattern="[A-Za-z]{,}" class="form-control" placeholder="Location(s)" required>
								</div>
								<div class="col-md-4">
									<label for="email">Package Amount</label>
									<input type="number" min="0" id="price" name="price" class="form-control" placeholder="Package Amount" required>
								</div>						
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="photo">Picture</label>
									<input type="file" id="image" name="file" class="form-control" placeholder="Picture of the location" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Trip Description</label>
									<textarea name="desc" id="desc" cols="30" rows="10" class="form-control" placeholder="More About the Trip(Maximum 1000 characters)" required></textarea>
									<span id="info" class="info">
										<span id="display" style="color: red;"></span>	
									</span>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Add Trip" id="btn" class="btn btn-primary">
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
	<script type="text/javascript">
		
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
	<script type="text/javascript">
	</script>

</body>
</html>

