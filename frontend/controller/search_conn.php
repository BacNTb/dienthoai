<?php 
	include ('controller.php');

		if(isset($_POST['text'])) {
			$text = $_POST['text'];	
		}
		else {
			$text = $_GET['tu-khoa'];	
		}

		$textNew = trim($text);
		$arr_textNew = explode(' ', $textNew);
		$textNew = implode('%', $arr_textNew);
		$textNew = '%'.$textNew.'%';

		$sql_dt = "select * from `dienthoai` where ten_sp like '$textNew' order by gia_km asc";
		$response_dt = mysqli_query($connectionId, $sql_dt);

		if($response_dt) {
			$record_dt = mysqli_fetch_array($response_dt);
		}
		
		$sql_lt = "select * from `laptop` where ten_sp like '$textNew' order by gia_km asc";
		$response_lt = mysqli_query($connectionId, $sql_lt);

		if($response_lt) {
			$record_lt = mysqli_fetch_array($response_lt);
		}

	//phân trang
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 1;
	}

	$rowPage = 8;
	$perRow = $page * $rowPage - $rowPage;

	if($sql_dt) {
		$sql_row_dt = "select * from `dienthoai` where ten_sp like '$textNew' order by gia_km asc limit $perRow, $rowPage";
		$response_dt = mysqli_query($connectionId, $sql_row_dt);
		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql_dt));
		$totalPage = ceil($totalRow / $rowPage);
	}
	else {
		$sql_row_lt = "select * from `laptop` where ten_sp like '$textNew' order by gia_km asc limit $perRow, $rowPage";
		$response_lt = mysqli_query($connectionId, $sql_row_lt);
		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql_lt));
		$totalPage = ceil($totalRow / $rowPage);
	}

	
	$listPage = "";
	for($i=1; $i<=$totalPage; $i++){
		if($page == $i) {
			$listPage .= '<li class="page-item active"><a class="page-link" href="search.php?tu-khoa='.$text.'&page='.$i.'">'.$i.'</a></li>';
		}
		else {
			$listPage .= '<li class="page-item"><a class="page-link" href="search.php?tu-khoa='.$text.'&page='.$i.'">'.$i.'</a></li>';
		}
	}

?>