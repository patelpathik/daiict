<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
<div id="patrick"></div>
<?php
	if(!isset($_REQUEST['pc'])){
		$pc="400001";
	}
	else{
		$pc=$_REQUEST['pc'];
	}
	$url="http://postalpincode.in/api/pincode/$pc";
	// $str="curl 'https://maps.googleapis.com/maps/api/geocode/json?address=$pc&key=AIzaSyCvF3A6WQsqPMlSzaxTvVN_CmATkSkD9jI'";
	$str="curl '$url'";
	$exe= shell_exec($str);
	$data = json_decode($exe);
	print_r($data);
	echo "<br/><br/><br/>";
	$res=array("Name" => $data->PostOffice[0]->Name,"Description"=>$data->PostOffice[0]->Description,"Taluk" => $data->PostOffice[0]->Taluk,"Circle" => $data->PostOffice[0]->Circle,"District" => $data->PostOffice[0]->District,"Division" => $data->PostOffice[0]->Division,"Region" => $data->PostOffice[0]->Region,"State" => $data->PostOffice[0]->State,"Country" => $data->PostOffice[0]->Country);
	print_r($res);
?>
</body>
</html>