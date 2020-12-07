	<?php
	include_once("php/config.php");

	$query=mysqli_query($conn,"select count(tour_id) from `tours` where type='domestic'");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 8;

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

	$nquery=mysqli_query($conn,"select * from `tours` where type='domestic' order by tour_id desc $limit;" );
	$paginationCtrls = '';

	if($last != 1){

		if ($pagenum > 1) {
			$previous = $pagenum - 1;
			$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Previous</a> &nbsp; &nbsp; ';

			for($i = $pagenum-4; $i < $pagenum; $i++){
				if($i > 0){
					$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
				}
			}
		}

		$paginationCtrls .= ''.$pagenum.' &nbsp; ';

		for($i = $pagenum+1; $i <= $last; $i++){
			$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			if($i >= $pagenum+4){
				break;
			}
		}

		if ($pagenum != $last) {
			$next = $pagenum + 1;
			$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Next</a> ';
		}
	}
	?>
	<!DOCTYPE HTML>
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
						<li style="background-image: url(images/cover-img-4.jpg);">
							<div class="overlay"></div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
										<div class="slider-text-inner text-center">
											<h1>The Nation's Sand</h1>
											<h2>by ChoiceIndiaTours</h2>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</aside>

			<div class="colorlib-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="wrap-division">
									<?php
									while($crow = mysqli_fetch_array($nquery)){
										?>
										<?php 

										echo '
										<div class="col-md-6 col-sm-6 animate-box">
										<div class="hotel-entry">
										<a href="viewTour.php?id='.$crow["tour_id"].'" class="hotel-img" style="background-image: url('.$crow['image_url'].');">
										<p class="price"><span>Rs. '.$crow['price'].'</span><small> </small></p>
										</a>
										<div class="desc">

										<h3><a href="#">'.$crow['places'].'</a></h3>

										<p>'.$crow['starting_date'].'-'.$crow['end_date'].'</p>
										</div>
										</div>
										</div>';
									}
										?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
									</div>
								</div>
							</div>

							<!-- SIDEBAR-->
							<?php 
								include_once('sidebar.php');
							?>
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
										<input type="text" class="form-control" id="email" name ="email"  placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			
		</script>
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

	</body>
	</html>

