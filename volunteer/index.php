<?php
	include("top.php");
	$_SESSION['vo_id']="1";
	$vo_id=$_SESSION['vo_id'];
	echo "<input type='hidden' id='vo_id' value='$vo_id'>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../js/jquery/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
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
								<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" id="raised">
									
								</div>
								<div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" id="adv">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
<?php
	include("foot.php");
?>