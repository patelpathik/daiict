<?php
	include("top.php");
	// print_r($_SESSION);
	if(isset($_REQUEST['signup'])){
		$name=$_REQUEST['name'];
		$contact=$_REQUEST['contact'];
		$email=$_REQUEST['email'];
		$pass=$_REQUEST['pass'];
		$addr=$_REQUEST['addr'];
		$pincode=$_REQUEST['pincode'];
		$area=$_REQUEST['area'];
		$district=$_REQUEST['district'];
		$state=$_REQUEST['state'];

		$qtest="select * from volunteer where email='$email'";
		$etest=$conn->query($qtest);
		print_r($qtest);
		if($etest->num_rows > 0){
			echo "<script>alert('$email already exists!'); window.top.location='../index.php';</script>";
			exit;
		}
		$q1="insert into volunteer (name,contact,email,pass,addr,pincode,area,district,state) values('$name','$contact','$email','$pass','$addr','$pincode','$area','$district','$state')";
		$e1=$conn->query($q1);
		if($e1){
			echo "<script>alert('Registered! Login to continue!'); window.top.location='../index.php';</script>";
		}
	}
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<script type="text/javascript" src="../js/jquery/jquery-2.2.4.min.js"></script>
		<script type="text/javascript">
			function get_pdata(x){
				var pname="../get_pdata.php";
				var temp=pname+"?req=area&pc="+x;
				// alert(temp1);
				$.ajax({
					method: "GET",
					url: temp,
					success: function(data){
						// alert(data);
						// $("#dep").html(data);
						document.getElementById("area").value=data;
						// $("#district").val(data);
					}
				});
				var temp1=pname+"?req=district&pc="+x;
				$.ajax({
					method: "GET",
					url: temp1,
					success: function(data){
						document.getElementById("district").value=data;
					}
				});
				var temp2=pname+"?req=state&pc="+x;
				$.ajax({
					method: "GET",
					url: temp2,
					success: function(data){
						document.getElementById("state").value=data;
					}
				});
			}
		</script>
	</head>
	<body>

	<!-- ##### Breadcumb Area Start ##### -->
	<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
		<div class="bradcumbContent">
			<h2>Volunteer Signup</h2>
		</div>
	</div>
	<!-- ##### Breadcumb Area End ##### -->

	<!-- ##### Google Maps ##### -->
 
	<!-- ##### Contact Area Start ##### -->
	<br><br><br><br><br><br>
	<section class="contact-area mt-100 section-padding-100-70"">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="contact-content">
						<div class="row">
							<!-- Contact Information -->
							
							<!-- Contact Form Area -->
							<div class="col-12 col-lg-6 "></div>
							 <div class="col-12 "> 
							   
								
								<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
									<form action="#" method="post">
										<div class="row">
											<div class="col-sm-4"><input type="text" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="col-sm-4"> <input type="text" class="form-control" name="contact" placeholder="Contact" maxlength="10" minlength="10" required >
											</div>
											<div class="col-sm-4"> <input type="email" class="form-control" name="email" placeholder="Email" required>    </div> 
										</div>
										 <div class="row"> 
											   
											<div class="col-sm-6"><input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
											</div>
											<div class="col-sm-6"> <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm Password" required>
											</div>
										</div>
										<div class="row">
											<div class="col-12"> <textarea class="form-control" name="addr" placeholder="Address" required></textarea>    
										</div>
									</div>
										<div class="row">
											<div class="col-sm-3"><input type="text" minlength="6" maxlength="6" class="form-control" name="pincode" placeholder="Pincode" onchange="get_pdata(this.value);" required>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="area" id="area" placeholder="Area" required>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="district" placeholder="City" required name="district">
											</div>
										   	<div class="col-sm-3">
										   		<input type="text" class="form-control" id="state" placeholder="State" required name="state">
										   	</div>
										</div>	
									</div>
									<div class="row">
										</div>
										<br><br>
										<center><button class="btn academy-btn mt-30" type="submit" name="signup">Signup</button></center>
									</form> 
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <a href="../js/jquery/jquery-2.2.4.min.js">click me</a> -->
		</div>
	</section>
	<!-- ##### Contact Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	</body>
	</html>
<?php
	include "foot.php";
?>