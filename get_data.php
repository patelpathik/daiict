<?php
	include("conn.php");
	if(isset($_REQUEST['req'])){
		$req=$_REQUEST['req'];
		$vo_id=$_REQUEST['vo_id'];
		if($req=="raised"){
			$q1="select * from request where vo_id='$vo_id'";
			$e1=$conn->query($q1);
			while($data=$e1->fetch_object()){
				print_r($data);
				echo "string";
			}
		}
		else if($req=="adv"){
			$q1="select * from adv_notice where vo_id='$vo_id'";
			$e1=$conn->query($q1);
			while($data=$e1->fetch_object()){
				print_r($data);
				echo "string";
			}
		}
	}
?>