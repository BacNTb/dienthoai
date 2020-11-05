<?PHp 
	include 'connection.php';

	
	$sql_dt = "select * from `dienthoai`";
	$response_dt = mysqli_query($connectionId, $sql_dt);
	
    if($response_dt) {
        $record_dt = mysqli_num_rows($response_dt);
	}
	
	$sql_lt = "select * from `laptop`";
	$response_lt = mysqli_query($connectionId, $sql_lt);
	
    if($response_lt) {
        $record_lt = mysqli_num_rows($response_lt);
	}
	
	$sql_admin = "select * from `admin`";
	$response_admin = mysqli_query($connectionId, $sql_admin);
	
    if($response_admin) {
        $record_admin = mysqli_num_rows($response_admin);
    }
?>