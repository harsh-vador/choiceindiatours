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
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

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
.short{
	color:grey;
}
.good{
	color:grey;
}
.better{
	color: grey;
}
.best{
	color: grey;
}
#result{
	align-self: left;
	font-family: cursive;
}
.info{
	display: none;
	border:solid 0.5px black;width: 200px;padding:4px;height: 50px;
	margin-top:5px;
}
</style>
<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="position: fixed;">
			<div class="top-menu" style="background-color: black;padding:5px;opacity: 0.8;">
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
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Register with US!</h3>
						<form id="form" role="form" method="POST" action="php/register.php">
							<div id="error">
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required>
								</div>
							</div>
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
								<div class="col-md-6 padding-bottom">
									<label for="fname">Password</label>
									<input type="password" id="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required autofocus>								</div>
									<div class="col-md-6 padding-bottom">
										<label for="fname"> Confirm Password</label>
										<input type="password" id="cpassword" class="form-control" name="cpassword"placeholder="Confirm Password" required autofocus>
									</div>
								</div>
								<div class="form-group" id="hidden" hidden>
									<span class="error" style="color:red;display:none;"></span><br />
								</div>
								<div class="alert alert-danger">
									<strong>(Password should have atleast one uppercase,lowercase,numeric value and a special character.)</strong>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<label for="fname">Let's check the Password:</label>
										<h2>
											<span class="short">Short</span>&nbsp;&nbsp;
											<span class="good">Good</span>&nbsp;&nbsp;
											<span class="better">Better</span>&nbsp;&nbsp;
											<span class="best">Best</span>&nbsp;&nbsp;
										</h2>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-6">
										<label for="number">Phone Number:</label>
										<input type="text" name="number" placeholder="Eg:9876543210" id="number" class="form-control">
									</div>
									<div class="col-md-6">
										<label for="subject">Date of birth</label>
										<input type="date" id="date" name="dob" class="form-control" required>
									</div>

								</div>

							<!-- <div class="form-group text-center">
								<button type="submit" id="form-submit" class="btn btn-primary">Finish Up</button>
								<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div></div>
							</div> -->
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary" name="btn-save" id="btn-submit">
									<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
								</button>
							</div>
						</div>
					</div>
				</div>
			</center>
			<?php
			include_once("footer.php");
			?>
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
			<script type="text/javascript" src="script.js"></script>
			<script src="js/tilt.jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#password').keyup(function() {
						$('#result').html(checkStrength($('#password').val()))
					})
					function checkStrength(password) {
						var strength = 0
						if (password.length < 6) {
							$('.short').css('color','grey');
							$('.good').css('color','grey');
							$('.best').css('color','grey');
							$('#btn').attr('disabled')
							$('.better').css('color','grey');

							$('.short').css('color','red');
							return ' '
						}
						if (password.length > 7) strength += 1
							if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
								if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
									if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
										if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1

											if (strength < 2) {
												$('.short').css('color','red');
												$('.better').css('color','grey');
												$('.good').css('color','grey');
												$('.best').css('color','grey');
												$('#btn').attr('disabled')
												return ' '
											} else if (strength == 2) {
												$('.short').css('color','grey');
												$('.good').css('color','grey');
												$('.best').css('color','grey');
												$('#btn').attr('disabled')
												$('.better').css('color','blue');
												return ' '
											} else {
												$('.short').css('color','grey');
												$('.good').css('color','grey');
												$('.better').css('color','grey');
												$('.best').css('color','green');
												$('#btn').removeAttr('disabled')
												return ' '
											}
										}
									});
								</script>

								<!-- jQuery -->
								<script >
									$('.js-tilt').tilt({
										scale: 1.1
									})
								</script>
								<script type="text/javascript">
									$('#fname').keypress(function (e) {
										var regex = new RegExp("^[a-zA-Z]+$");
										var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
										if (regex.test(str)) {
											return true;
										}
										else
										{
											e.preventDefault();
											alert('Please enter name in proper format');
											return false;
										}
									});
									$('#lname').keypress(function (e) {
										var regex = new RegExp("^[a-zA-Z]+$");
										var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
										if (regex.test(str)) {
											return true;
										}
										else
										{
											e.preventDefault();
											alert('Please enter name in proper format');
											return false;
										}
									});
									$('#number').keypress(function (e) {
                     var e = event || evt; // for trans-browser compatibility
                     var charCode = e.which || e.keyCode;

                     if (charCode > 31 && (charCode < 48 || charCode > 57))
                     	return false;

                     return true;
                 });
             </script>
             <script>
             	var allowsubmit = false;
             	$(function(){
			//on keypress 
			$('#cpassword').keyup(function(e){
				$('#hidden').removeAttr("hidden");
				$('.error').css("display","block");
				//get values 
				var pass = $('#password').val();
				var confpass = $(this).val();
				
				//check the strings
				if(pass == confpass){
					//if both are same remove the error and allow to submit
					$('.error').empty();
					$('.error').append('<h3>Password matched <span><img src="https://png.icons8.com/color/50/000000/checkmark.png" style="width:3%;height:3%;"></span></h3>');
					allowsubmit = true;
				}else{
					//if not matching show error and not allow to submit
					$('.error').empty();
					$('.error').append('<h4>Password not matching <span><img src="https://png.icons8.com/color/50/000000/delete-sign.png" style="width:3%;height:3%;"></span></h4>');
					allowsubmit = false;
				}
			});
			
			//jquery form submit
			$('#form').submit(function(){

				var pass = $('#password').val();
				var confpass = $('#cpassword').val();

				//just to make sure once again during submit
				//if both are true then only allow submit
				if(pass == confpass){
					allowsubmit = true;
				}
				if(allowsubmit){
					return true;
				}else{
					return false;
				}
			});
		});
	</script>
</body>
</html>

