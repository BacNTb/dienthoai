<?php 	
	include ('controller.php');

	if($_SERVER['REQUEST_METHOD'] == 'GET') {

		$price = $_GET['gia_sp'];
		
		switch($price) {
			case 'tat-ca-san-pham':
				$sql = "select * from `dienthoai` order by gia_km asc";
				break;

			case '0-5-trieu':
				$start = 0;
				$end = 5000000;
				$sql = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc";
				break;

			case '5-10-trieu':
				$start = 5000000;
				$end = 10000000;
				$sql = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc";
				break;	

			case '10-15-trieu':
				$start = 10000000;
				$end = 15000000;
				$sql = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc";
				break;	

			case '15-20-trieu':
				$start = 15000000;
				$end = 20000000;
				$sql = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc";
				break;	
			
			case '20-25-trieu':
				$start = 20000000;
				$end = 25000000;
				$sql = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc";
				break;
			
			case 'tren-25-trieu':
				$start = 25000000;
				$sql = "select * from `dienthoai` where gia_km >= $start order by gia_km asc";
				break;
		
		}
		$response = mysqli_query($connectionId, $sql);
        
		if($response) {
			$record = mysqli_fetch_array($response);
		}
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

	if($price == 'tat-ca-san-pham' || $price == 'tren-25-trieu') {
		if($price == 'tat-ca-san-pham') {
			$sql_row = "select * from `dienthoai` order by gia_km asc limit $perRow, $rowPage";
		}
		else {
			$sql_row = "select * from `dienthoai` where gia_km >= $start order by gia_km asc limit $perRow, $rowPage";
		}
		$response = mysqli_query($connectionId, $sql_row);

		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql));
		$totalPage = ceil($totalRow / $rowPage);
	}
	else {
		$sql_row = "select * from `dienthoai` where gia_km between $start and $end order by gia_km asc limit $perRow, $rowPage";
		$response = mysqli_query($connectionId, $sql_row);

		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql));
		$totalPage = ceil($totalRow / $rowPage);
	}

	
	$listPage = "";
	for($i=1; $i<=$totalPage; $i++){
		if($page == $i) {
			$listPage .= '<li class="page-item active"><a class="page-link" href="danhsachdt.php?gia_sp='.$price.'&page='.$i.'">'.$i.'</a></li>';

		}
		else {
			$listPage .= '<li class="page-item"><a class="page-link" href="danhsachdt.php?gia_sp='.$price.'&page='.$i.'">'.$i.'</a></li>';
		}
	}

?>