<?php
	session_start();
	include("conn.php");
	if(!isset($_SESSION['uid'])){
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Edcuation</title>

	<!-- Favicon -->
	<link rel="icon" href="img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link rel="stylesheet" href="style.css">

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
								<!-- <ul>
									<li><a href="volunteer/index.php">Home</a></li>
									<li><a href="contact.php">Contact</a></li>
									<?php
										/*if(isset($_SESSION['uid'])){
											echo "<li><a href='logout.php'><i>LOGOUT<i></a>&nbsp;$_SESSION['uname']</li>";
										}
										else{
											echo "<li><a href='index.php'>Login</a></li>";
											echo "<li><a href='volunteer/volunteer_signup.php'>Volunteer Signup</a></li>";
										}*/
									?>
								</ul> -->
								<?php
									include("menu.php");
								?>
							</div>
							<!-- Nav End -->
						</div>

						<!-- Calling Info -->
						<div class="calling-info">
							<div class="call-center">
								<a href="tel:+911234567890"><i class="icon-telephone-2"></i> <span>(+91) 1234567890</span></a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
