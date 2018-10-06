<?php
	include 'top.php';
	$_SESSION['vo_id']=1;
	if(isset($_REQUEST['save'])){
		$vo_id=$_SESSION['vo_id'];
		$date=$_REQUEST['date'];
		$start=$_REQUEST['time'];
		$venue=$_REQUEST['venue'];
		$des=$_REQUEST['des'];
		$q1="insert into adv_notice (dt,start_time,venue,des,vo_id) values ('$date','$start','$venue','$des','$vo_id')";
		$e1=$conn->query($q1);
		if($e1){
			echo "<script>alert('Your Advance Notice for described session is saved!');</script>";
		}
		else{
			echo $q1;
			print_r($e1);
			echo "<script>alert('Error Occured!');</script>";
		}
	}
?>
	<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
		<div class="bradcumbContent">
			<h2>Conduct Class</h2>
		</div>
	</div>
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
											<div class="col-sm-6"><input type="date" class="form-control" name="date" placeholder="Date" required>
											</div>
											<div class="col-sm-6"> <input type="text" class="form-control" min=0 max=23 name="time" placeholder="Start Time" required >
											</div>
										</div>
										<div class="row"> 
											<div class="col-sm-6"> <textarea class="form-control" name="venue" placeholder="VENUE" required></textarea>    
											</div>
											<div class="col-sm-6"> <textarea class="form-control" name="des" placeholder="Description" required></textarea>    
											</div> 
										</div>
										</div>
										<br><br>
										
										<center><button class="btn academy-btn mt-30" name="save" type="submit">Submit</button></center>
									</form> 
								</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
	include 'foot.php';
?>