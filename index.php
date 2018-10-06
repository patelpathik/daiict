<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Academy - Education Course Template</title>

	<!-- Favicon -->
	<link rel="icon" href="img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		.cur1{
			cursor: pointer;
		}
	</style>
	<script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#login_c").fadeOut(1);
			$("#fp_c").fadeOut(1);
		});
		function do_login(){
			$("#fp_c").fadeOut(5);
			$("#login_c").fadeIn(50);
		}
		function login_x(){
			$("#login_c").fadeOut(50);
		}
		function do_fp(){
			$("#login_c").fadeOut(5);
			$("#fp_c").fadeIn(50);
		}
		function fp_x(){
			$("#fp_c").fadeOut(50);
		}
	</script>
</head>

<body>
	<!-- ##### Preloader ##### -->
	<div id="preloader">
		<i class="circle-preloader"></i>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 h-100">
						<div class="header-content h-100 d-flex align-items-center justify-content-between">
							<div class="academy-logo">
								<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
							</div>
						  
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Navbar Area -->
		<div class="academy-main-menu">
			<div class="classy-nav-container breakpoint-off">
				<div class="container">
					<!-- Menu -->
					<nav class="classy-navbar justify-content-between" id="academyNav">

						<!-- Navbar Toggler -->
						<div class="classy-navbar-toggler">
							<span class="navbarToggler"><span></span><span></span><span></span></span>
						</div>

						<!-- Menu -->
						<div class="classy-menu">

							<!-- close btn -->
							<div class="classycloseIcon">
								<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
							</div>

							<!-- Nav Start -->
							<div class="classynav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="volunteer/volunteer_signup.php">Volunteer Signup</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="#" onclick="do_login();">LOGIN</a></li>

								</ul>
							</div>
							<!-- Nav End -->
						</div>

						<!-- Calling Info -->
						<div class="calling-info">
							<div class="call-center">
								<a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Hero Area Start ##### -->
	<section class="hero-area">
		<div class="hero-slides owl-carousel">
			<!-- Single Hero Slide -->
			<div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<div class="hero-slides-content">
								<h4 data-animation="fadeInUp" data-delay="100ms">All the Help you need</h4>
								<h2 data-animation="fadeInUp" data-delay="400ms">Make INDIA<br></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ##### Hero Area End ##### -->

	<div class="row" id="login_c" style="z-index: 999; top: 5% !important; margin-top: -46%;">
		<div class="col-12">
			<div class="contact-content" style="background: transparent;">
				<div class="row">
					<!-- Contact Information -->
					
					<!-- Contact Form Area -->
					<div class="col-12 col-lg-3 "></div>
					<div class="col-12 col-lg-6 ">
						<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
							<form action="#" method="post">
								<input type="email" class="form-control" id="uname" placeholder="Email Id">
								<input type="password" class="form-control" id="pass" placeholder="Password">
								<center>
									<button class="btn academy-btn mt-30" type="submit">Login</button>
									<br><br>
									<!-- <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Forgot Password?</a> -->
									<a onclick="do_fp();" class="nav-link active cur1">Forgot Password?</a>
								</center>
								<a class="cur1" onclick="login_x();">x</a>
							</form> 
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	<!--FORGOT PASS-->
	<div class="row" id="fp_c" style="z-index: 999; top: 5% !important; margin-top: -46%;">
		<div class="col-12">
			<div class="contact-content" style="background: transparent;">
				<div class="row">
					<!-- Contact Information -->
					
					<!-- Contact Form Area -->
					<div class="col-12 col-lg-3 "></div>
					<div class="col-12 col-lg-6 ">
						<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
							<form action="#" method="post">
								<input type="email" class="form-control" id="uname" placeholder="Email Id">
								<center>
									<button class="btn academy-btn mt-30" type="submit">Next</button>
									<br><br>
									<!-- <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Forgot Password?</a> -->
									<a onclick="do_login();" class="nav-link active cur1">Login</a>
								</center>
								<a class="cur1" onclick="fp_x();">x</a>
							</form> 
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area">
		<div class="main-footer-area section-padding-100-0">
			<div class="container">
				<div class="row">
					<!-- Footer Widget Area -->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="footer-widget mb-100">
							<div class="widget-title">
								<a href="#"><img src="img/core-img/logo2.png" alt=""></a>
							</div>
							<p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
							<div class="footer-social-info">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<!-- Footer Widget Area -->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="footer-widget mb-100">
							<div class="widget-title">
								<h6>Usefull Links</h6>
							</div>
							<nav>
								<ul class="useful-links">
									<li><a href="#">Home</a></li>
									<li><a href="#">Services &amp; Features</a></li>
									<li><a href="#">Accordions and tabs</a></li>
									<li><a href="#">Menu ideas</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- Footer Widget Area -->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="footer-widget mb-100">
							<div class="widget-title">
								<h6>Gallery</h6>
							</div>
							<div class="gallery-list d-flex justify-content-between flex-wrap">
								<a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/gallery1.jpg" alt=""></a>
								<a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/gallery2.jpg" alt=""></a>
								<a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/gallery3.jpg" alt=""></a>
								<a href="img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/gallery4.jpg" alt=""></a>
								<a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/gallery5.jpg" alt=""></a>
								<a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/gallery6.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<!-- Footer Widget Area -->
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="footer-widget mb-100">
							<div class="widget-title">
								<h6>Contact</h6>
							</div>
							<div class="single-contact d-flex mb-30">
								<i class="icon-placeholder"></i>
								<p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
							</div>
							<div class="single-contact d-flex mb-30">
								<i class="icon-telephone-1"></i>
								<p>Main: 203-808-8613 <br>Office: 203-808-8648</p>
							</div>
							<div class="single-contact d-flex">
								<i class="icon-contract"></i>
								<p>office@yourbusiness.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ##### Footer Area Start ##### -->

	<!-- ##### All Javascript Script ##### -->
	<!-- jQuery-2.2.4 js -->
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="js/plugins/plugins.js"></script>
	<!-- Active js -->
	<script src="js/active.js"></script>
</body>

</html>