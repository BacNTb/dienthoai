<?PHP 
	include 'connection.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'GET') {

        $sql = "select * from `laptop`";
        $response = mysqli_query($connectionId, $sql);

        if($response) {
            $record = mysqli_fetch_array($response);
        }
    }   


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];

        $sql = "delete from `laptop` where id_sp = '$id'";

        $response = mysqli_query($connectionId, $sql);

        if($response) {
    
            header('Location: ../view/danhsachlt.php');
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

	$sql = "select * from `laptop` limit $perRow, $rowPage";
	$response = mysqli_query($connectionId, $sql);

	$totalRow = mysqli_num_rows(mysqli_query($connectionId, "select * from laptop"));
	$totalPage = ceil($totalRow / $rowPage);
	
	$listPage = "";
	for($i=1; $i<=$totalPage; $i++){
		if($page == $i) {
			$listPage .= '<li class="page-item active"><a class="page-link" href="danhsachlt.php?page&page='.$i.'">'.$i.'</a></li>';

		}
		else {
			$listPage .= '<li class="page-item"><a class="page-link" href="danhsachlt.php?page&page='.$i.'">'.$i.'</a></li>';
		}
	}
?>