<?php
	    $id = $_GET['id_sp'];

		$sql_dt = "select * from `dienthoai` where id_sp = '$id'";
		$response_dt = mysqli_query($connectionId, $sql_dt);
		
		if($response_dt) {
			$record_dt = mysqli_fetch_array($response_dt);
        }
        
        $sql_lt = "select * from `laptop` where id_sp = '$id'";
		$response_lt = mysqli_query($connectionId, $sql_lt);
		
		if($response_lt) {
			$record_lt = mysqli_fetch_array($response_lt);
		}

?>
