<?php
include_once("php/config.php");
$sql="SELECT * FROM company_details";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($result);
$email=$row['email'];
$contact=$row['contact_no'];
$street=$row['street'];
$roadNo=$row['roadNo'];
$city=$row['city'];
$pincode=$row['pincode'];
$desc=$row['description'];
$twitter_link=$row['twitter'];
$facebook_link=$row['facebook'];
echo "
		<footer id='colorlib-footer' role='contentinfo'>
			<div class='container'>
				<div class='row row-pb-md' id='contact'>
					<div class='col-md-6 colorlib-widget'>
						<h4>ChoiceToursIndia</h4>
						<p>".$desc."</p>
						<p>
							<ul class='colorlib-social-icons'>
								<li><a href='".$twitter_link."'><i class='icon-twitter'></i></a></li>
								<li><a href='".$facebook_link."'><i class='icon-facebook'></i></a></li>
							</ul>
						</p>
					</div>
					<div class='col-md-6 col-md-push-1'>
						<h4>Contact Information</h4>
						<ul class='colorlib-footer-links'>
							<li>".$street."<br>".$roadNo."<br>".$city."-".$pincode."</li>
							<li><a href='tel:".$contact."'>".$contact."</a></li>
							<li><a href='mailto:".$email."'>".$email."</a></li>
							<li><a href='choiceindiatours.com'>choiceindiatours.com</a></li>
						</ul>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-12 text-center'>
						<p>
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class='icon-heart2' aria-hidden='true'></i> by ChoiceIndiaTours.<br>
							<span class='block'>Demo Images: <a href='http://unsplash.co/' target='_blank'>Unsplash</a> , <a href='http://pexels.com/' target='_blank'>Pexels.com</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class='gototop js-top'>
		<a href='#' class='js-gotop'><i class='icon-arrow-up2'></i></a>
	</div>";
	?>