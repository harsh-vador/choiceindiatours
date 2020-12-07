 <?php
 include_once("php/config.php");

 $query=mysqli_query($conn,"select count(tour_id) from `tours`");
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

$nquery=mysqli_query($conn,"select * from `tours` order by tour_id desc $limit;" );
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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="nofollow">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
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
								<li class="active"><a href="upcoming_Tour.php">Upcoming Tour</a></li>
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
					<li style="background-image: url(../images/blog-3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Hi</h1>
										<h1>Here are things you have planned !</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/blog-4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>We help you preparing fot them !</h1>
										<h1>To have a happy and satisfied ending...</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(../images/blog-2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Just have a look at it...</h1>
										<h1>All the Best !!!</h1>
									</div>
								</div> 	
							</div>
						</div>
					</li>  	
				</ul>
			</div>
		</aside>
		 <div" rel="nofollow" class="container">
     <div style="height: 20px;"></div>
     <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-8">
         <table width="100%" class="table table-striped table-bordered table-hover">
            <thead>
               <th>Starting Date</th>
               <th>end Date</th>
               <th>price</th>
               <th>places</th>
               <th>Status</th>
            </thead>
            <tbody>
               <?php
               while($crow = mysqli_fetch_array($nquery)){
               ?>
               <tr>
                  <td><?php echo $crow['starting_date']; ?></td>
                  <td><?php echo $crow['end_date']; ?></td>
                  <td><?php echo $crow['price']; ?></td>
                  <td><?php echo $crow['places']; ?></td>
                  <td><?php echo $crow['status']; ?></td>
               </tr>
               <?php
            }     
            ?>
         </tbody>
      </table>
      <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
   </div>
   <div class="col-lg-2">
   </div>
</div>
</div>
<footer id="colorlib-footer" role="contentinfo">
	<div class="container">
		<div class="row row-pb-md" id="contact">
			<div class="col-md-6 colorlib-widget">
				<h4>ChoiceToursIndia</h4>
				<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				<p>
					<ul class="colorlib-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				</p>
			</div>
			<div class="col-md-6 col-md-push-1">
				<h4>Contact Information</h4>
				<ul class="colorlib-footer-links">
					<li>5,Shree Sawli Building, <br> Opp. to Railway Station<br>B T Road<br>Dahisar(W)-68</li>
					<li><a href="tel:022-28904567">022-28904567</a></li>
					<li><a href="mailto:choiceindiatours@gmail.com">choiceindiatours@gmail.com</a></li>
					<li><a href="choiceindiatours.com">choiceindiatours.com</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart2" aria-hidden="true"></i> by ChoiceIndiaTours.<br>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
					<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
				</p>
			</div>
		</div>
	</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
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

