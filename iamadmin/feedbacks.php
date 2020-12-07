 <?php
 include_once("php/config.php");

 $query=mysqli_query($conn,"select count(feedback_id) from `feedbacks`");
 $row = mysqli_fetch_row($query);

 $rows = $row[0];

 $page_rows = 10;

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

 $nquery=mysqli_query($conn,"select * from `feedbacks` order by feedback_id desc $limit;" );
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

 	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
.mail_list:{margin-top: 50px;}
.mail_list .nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
.mail_list .tab-pane .list-group-item:first-child {border-top-right-radius: 0px;border-top-left-radius: 0px;}
.mail_list .tab-pane .list-group-item:last-child {border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
.mail_list .tab-pane .list-group .checkbox { margin: 0px; }
.mail_list .tab-pane .list-group input[type="checkbox"]{ position: inherit; }
.mail_list .tab-pane .list-group .glyphicon { margin-right:5px; }
.mail_list .tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
.mail_list a.list-group-item.read { color: #222;background-color: #F3F3F3; }
.mail_list input[type="checkbox"]{ margin-top: 2px; position: inherit;}
.mail_list hr { margin-top: 5px;margin-bottom: 10px; }
.mail_list .nav-pills>li>a {padding: 5px 10px;}
.mail_list .message { display: block; }
.mail_list .text { font-size: 11px; }
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

		<div class="container mail_list">
			<div class="row"> </div>
			<div class="row">
				<br><br><br>

				<div class="col-sm-2 col-md-1">
					
				</div>

				<div class="col-sm-10 col-md-11">
					<button type="button" class="btn btn-default" onclick="refresh()" data-toggle="tooltip" title="Refresh">
						<span class="glyphicon glyphicon-refresh"></span>   </button>
						<div class="pull-right">
							
							<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-md-1">
						
					</div>

					<div class="col-sm-10 col-md-11">
						<div id="home">
							<table width="100%" class="table table-striped table-bordered table-hover">
								<thead>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Time</th>
								</thead>
								<tbody>
									<?php
									while($crow = mysqli_fetch_array($nquery)){
										?>										
										<tr>
											<td><?php echo $crow['fname'].' '.$crow['lname']; ?></td>
											<td><?php echo $crow['email']; ?></td>
											<td><?php echo $crow['subject'].'</a>'; ?></td>
											<td><?php echo $crow['feedback_id']; ?></td>
											<td><a href="openFeedback.php?f_id=<?php echo $crow['feedback_id'];?>">
												<button type="button" style="color: black;"> Read More</button>
											</a></td>
										</tr>
										<?php
									}	  
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
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

