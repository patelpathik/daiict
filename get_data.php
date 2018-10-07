<?php
	echo "<style type='text/css'>";
	?>
		#tab1 tr th{
			border-bottom:1px solid black;
			<!-- text-align:center; -->
			color: #848484;
			letter-spacing: 1px;

		}
		#tab1 tr th button{
			background:transparent;
			shadow:none;
			border: solid 1px black;
		}
		#tab1 tr th i u{
			text-transform: uppercase;
			letter-spacing: 2px;
			text-align:center;
		}
		#tabhead th{
			color:black !important;
			text-align:center;
		}
	<?php
	echo "</style>";
	include("conn.php");
	if(isset($_REQUEST['req'])){
		$req=$_REQUEST['req'];
		$vo_id=$_REQUEST['vo_id'];
		// $p="select * from volunteer v, request q where  vo_id='$vo_id'";
		if($req=="raised"){
			$q1="select * from request where status='-1'";
			$e1=$conn->query($q1);
			echo "<table align='center' border='1' class='table table-borderless' id='tab1'><tr id='tabhead'><th colspan='4'><h4>Raised Requests</h4></th></tr>";
				echo "<tr><th>Date</th><th>Subject</th><th>Aged Betwn.</th><th>Select</th></tr>";
			while($data=$e1->fetch_object()){
				// print_r($data);
				echo "<tr><th><i><u>".ret_dt($data->dt)."</u></i></th><th><i><u>$data->des</u></th><th><u>[$data->age yrs]</u></i></th><th><button type='submit' onclick='open1(this.id);' id='$data->re_id'>Schedule</button></th></tr>";
			}
			echo "</table>";
		}
		/*function findDate(){
			$timezone=date_default_timezone_get();
			date_default_timezone_set($timezone);
			$date = date('Y-m-d h:i:s', time());
			return $date;
		}*/

		else if($req=="adv"){
			$q1="select * from adv_notice where vo_id='$vo_id'";
			$e1=$conn->query($q1);
			// print_r($e1);
			echo "<table align='center' border='1' class='table table-borderless' id='tab1'><tr id='tabhead'><th colspan='3'><h4>Your Schedule</h4></th></tr>";
			echo "<tr><th>Date</th><th>Subject</th><th>Start Time</th></tr>";
			while($data=$e1->fetch_object()){
				// print_r($data);
				$date = date('d-m-Y',$e1->dt);
				echo "<tr><th><i><u>".ret_dt($data->dt)."</u></i></th><th><i><u>$data->des</u></i></th><th><i><u>$data->start_time hrs</u></i></th></tr>";
			}
			echo "</table>";
		}
	}
	else if(isset($_REQUEST['ins'])){
		$ins=$_REQUEST['ins'];
		if($ins=="con1"){
			$vo_id=$_REQUEST['vo_id'];
			$re_id=$_REQUEST['re_id'];
			$dt=$_REQUEST['dt'];
			$time=$_REQUEST['time'];
			$venue=$_REQUEST['venue'];
			$des=$_REQUEST['des'];

			echo $q1="insert into adv_notice (dt,start_time,venue,des,vo_id) values ('$dt','$time','$venue','$des','$vo_id')";
			$e1=$conn->query($q1);
			echo "";

			echo $q2="update request set status='$vo_id' where re_id='$re_id'";
			$e2=$conn->query($q2);
			echo "";
		}
	}
?>