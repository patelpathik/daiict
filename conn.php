<?php
	$s="localhost";
	$u="root";
	$p="root";
	$db="daiict";

	$conn=new Mysqli($s,$u,$p,$db);
	// print_r($conn);

	function ret_dt($dt){
		$dt=explode("-",$dt);
		return $dt[2]."-".$dt[1]."-".$dt[0];
	}
?>