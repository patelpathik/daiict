<?php
	include("top.php");
	$vo_id=$_SESSION['vo_id'];
	echo "<input type='hidden' name='vo_id' id='vo_id' value='$vo_id'>";
	if(isset($_REQUEST['saveupd'])){
		$vo_id=$_SESSION['vo_id'];
		$re_id=$_SESSION['re_id'];
		$dt=$_REQUEST['date'];
		$time=$_REQUEST['time'];
		$venue=$_REQUEST['venue'];
		$des=$_REQUEST['des'];

		$q1="insert into adv_notice (dt,start_time,venue,des,vo_id) values ('$dt','$time','$venue','$des','$vo_id')";
		$e1=$conn->query($q1);

		$q2="update request set status='$vo_id' where re_id='$re_id'";
		$e2=$conn->query($q2);

		print_r($e1);
		print_r($e1);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../js/jquery/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#main_hold").fadeOut(1);
			do1();
		});
		function do1(){
			var vo_id=document.getElementById("vo_id").value;
			var fname="../get_data.php";
			var temp1=fname+"?req=raised&vo_id="+vo_id;
			// alert(temp1);
			$.ajax({
				method: "GET",
				url: temp1,
				success: function(data){
					// alert(data);
					$("#raised").html(data);
				}
			});
			var temp2=fname+"?req=adv&vo_id="+vo_id;
			$.ajax({
				method: "GET",
				url: temp2,
				success: function(data){
					$("#adv").html(data);
				}
			});
		}
		setInterval(function(){
			do1();
		},500);
		function open1(x){
			// document.getElementById("hid1").value="<input type='hidden' name='re_id' id='re_id' value='"+x+"'>";
			$.ajax({
				method: "GET",
				url: "set_session.php?re_id="+x
			});
			$("#main_hold").fadeIn(1);
		}
		function save_new(){
			var vo_id=document.getElementById("vo_id").value;
			var re_id=document.getElementById("re_id").value;
			var dt=document.getElementById("date").value;
			var time=document.getElementById("time").value;
			var venue=document.getElementById("venue").value;
			var des=document.getElementById("des").value;

			var temp="get_data.php?ins=con1&vo_id="+vo_id+"&re_id="+re_id+"&dt="+dt+"&time="+time+"&venue="+venue+"&des="+des;
			alert(temp);
			
			$.ajax({
				method: "GET",
				url: temp,
				success: function(data){
					alert(data);
					// $("#main_hold").fadeOut(10);
				}
			});
		}
	</script>
</head>
<body>

<!-- ##### Breadcumb Area Start ##### -->
	<div class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/breadcumb.jpg);">
		<div class="bradcumbContent">
			<h2>Alerts & Updates</h2>
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
							<div class="col-12">
								<div class="contact-form-area wow fadeInUp" data-wow-delay="0ms" id="raised">
								</div>
								<div class="contact-form-area wow fadeInUp" style="background-color: transparent;">&nbsp;<br/>&nbsp;</div>

								<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" id="main_hold">
									<form method="post">
										<div id="hid1"></div>
										<div class="row">
											<div class="col-sm-6">
												<input type="date" class="form-control" name="date" id="date" placeholder="Date" required>
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" min=0 max=23 id="time" name="time" placeholder="Start Time" required >
											</div>
										</div>
										<div class="row"> 
											<div class="col-sm-6"> <textarea class="form-control" id="venue" name="venue" placeholder="VENUE" required></textarea>    
											</div>
											<div class="col-sm-6"> <textarea class="form-control" id="des" name="des" placeholder="Description" required></textarea>    
											</div>
										</div>
										<br><br>
										
										<!-- <center><button onclick="save_new();" value="Save" name="save" type="submit">SAVE</button></center> -->
										<center><button value="Save" name="saveupd" type="submit">SAVE</button></center>
									</form>
								</div>

								<div class="contact-form-area wow fadeInUp" style="background-color: transparent;">&nbsp;<br/>&nbsp;</div>
								<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" id="adv">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				?>
			</div>
		</div>
	</section>
</body>
</html>
<?php
	include("foot.php");
?>