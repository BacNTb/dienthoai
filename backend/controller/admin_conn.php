<?PHP 
	include 'connection.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $sql = "select * from `admin`";
        $response = mysqli_query($connectionId, $sql);

    }   


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];

        $sql = "delete from `admin` where id_admin = $id";

        $response = mysqli_query($connectionId, $sql);

        if($response) {

            header('Location: ../view/admin.php');
        } else {
            echo mysqli_error($connectionId);
        }
	}
	
    $index = 1;
    
    	//phân trang
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 1;
	}

	$rowPage = 5;
	$perRow = $page * $rowPage - $rowPage;

	$sql = "select * from `admin` limit $perRow, $rowPage";
	$response = mysqli_query($connectionId, $sql);

	$totalRow = mysqli_num_rows(mysqli_query($connectionId, "select * from admin"));
	$totalPage = ceil($totalRow / $rowPage);
	
	$listPage = "";
	for($i=1; $i<=$totalPage; $i++){
		if($page == $i) {
			$listPage .= '<li style="text-align: center;" class="active"><a href="../view/admin.php?page&page='.$i.'">'.$i.'</a></li>';

		}
		else {
			$listPage .= '<li><a href="../view/admin.php?page&page='.$i.'">'.$i.'</a></li>';
		}
	}
?>