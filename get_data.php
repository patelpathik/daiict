<?php
	include("conn.php");
	if(isset($_REQUEST['req'])){
		$req=$_REQUEST['req'];
		if($req=="raised"){
			$q1="";
		}
		else if($req=="adv"){
			echo "string";
		}
	}
?>