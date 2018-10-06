<?php
	if(isset($_REQUEST['pc'])){
		$pc=$_REQUEST['pc'];
		$url="http://postalpincode.in/api/pincode/$pc";
		$str="curl '$url'";
		$exe= shell_exec($str);
		$data = json_decode($exe);
		$res=array("Name" => $data->PostOffice[0]->Name,"Description"=>$data->PostOffice[0]->Description,"Taluk" => $data->PostOffice[0]->Taluk,"Circle" => $data->PostOffice[0]->Circle,"District" => $data->PostOffice[0]->District,"Division" => $data->PostOffice[0]->Division,"Region" => $data->PostOffice[0]->Region,"State" => $data->PostOffice[0]->State,"Country" => $data->PostOffice[0]->Country);
		// print_r($res);
		// echo $res["District"];
		// echo "<div class='col-sm-̱3'><input type='text' class='form-control' id='city' placeholder='City' value='".$res["District"]."' required></div><div class='col-sm-3'><input type='text' class='form-control' id='state' placeholder='State' value='".$res["State"]."' required></div>";
		if(isset($_REQUEST['req'])){
			$req=$_REQUEST['req'];
			if($req=="area"){
				echo $res["Name"];
			}
			else if($req=="district"){
				echo $res["District"];
			}
			else if($req=="state"){
				echo $res["State"];
			}
		}
	}
?>