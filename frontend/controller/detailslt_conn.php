<?php 
	include ('controller.php');

	$id = $_GET['id_sp'];	
	$sql = "select * from `laptop` where id_sp = '$id'";
		
	$response = mysqli_query($connectionId, $sql);
	
	if($response) {
		$record = mysqli_fetch_array($response);
	}	
?>	