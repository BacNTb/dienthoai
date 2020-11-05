<?PHP 
	include ('controller.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $sql = "select * from `muahang`";
        $response = mysqli_query($connectionId, $sql);

        if($response) {
            $record = mysqli_fetch_array($response);
		}
    }   
?>