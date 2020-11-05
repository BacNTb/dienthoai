<?php 	
	include ('controller.php');

	if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $sql_dt = "select * from `dienthoai` limit 9";
        $response_dt = mysqli_query($connectionId, $sql_dt);
        
        if($response_dt) {
            $record_dt = mysqli_fetch_array($response_dt);
		}	
		
		$sql_lt = "select * from `laptop` limit 9";
		$response_lt = mysqli_query($connectionId, $sql_lt);
		
		if($response_lt) {
            $record_lt = mysqli_fetch_array($response_lt);
		}	

		// banner
		$sql_bn = "select * from `slide`";
        $response_bn = mysqli_query($connectionId, $sql_bn);
        
        if($response_bn) {
            $record_bn = mysqli_fetch_array($response_bn);
		}	
	}  	

?>	