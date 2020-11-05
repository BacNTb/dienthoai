<?php 	
	include ('controller.php');

	if($_SERVER['REQUEST_METHOD'] == 'GET') {

		$price = $_GET['gia_sp'];
		
		switch($price) {
			case 'tat-ca-san-pham':
				$sql = "select * from `laptop` order by gia_km asc";
				break;

			case '0-10-trieu':
				$start = 0;
				$end = 9000000;
				$sql = "select * from `laptop` where gia_km between $start and $end order by gia_km asc";
				break;	

			case '10-20-trieu':
				$start = 10000000;
				$end = 20000000;
				$sql = "select * from `laptop` where gia_km between $start and $end order by gia_km asc";
				break;	

			case '20-30-trieu':
				$start = 20000000;
				$end = 30000000;
				$sql = "select * from `laptop` where gia_km between $start and $end order by gia_km asc";
				break;	

			case '30-40-trieu':
				$start = 30000000;
				$end = 40000000;
				$sql = "select * from `laptop` where gia_km between $start and $end order by gia_km asc";
				break;	
			
			case '40-50-trieu':
				$start = 40000000;
				$end = 50000000;
				$sql = "select * from `laptop` where gia_km between $start and $end order by gia_km asc";
				break;
			
			case 'tren-50-trieu':
				$start = 50000000;
				$sql = "select * from `laptop` where gia_km >= $start order by gia_km asc";
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

	if($price == 'tat-ca-san-pham' || $price == 'tren-50-trieu') {
		if($price == 'tat-ca-san-pham') {
			$sql_row = "select * from `laptop` order by gia_km asc limit $perRow, $rowPage";
		}
		else {
			$sql_row = "select * from `laptop` where gia_km >= $start order by gia_km asc limit $perRow, $rowPage";
		}
		$response = mysqli_query($connectionId, $sql_row);

		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql));
		$totalPage = ceil($totalRow / $rowPage);
	}
	else {
		$sql_row = "select * from `laptop` where gia_km between $start and $end order by gia_km asc limit $perRow, $rowPage";
		$response = mysqli_query($connectionId, $sql_row);

		$totalRow = mysqli_num_rows(mysqli_query($connectionId, $sql));
		$totalPage = ceil($totalRow / $rowPage);
	}

	
	$listPage = "";
	for($i=1; $i<=$totalPage; $i++){
		if($page == $i) {
			$listPage .= '<li class="page-item active"><a class="page-link" href="danhsachlt.php?gia_sp='.$price.'&page='.$i.'">'.$i.'</a></li>';

		}
		else {
			$listPage .= '<li class="page-item"><a class="page-link" href="danhsachlt.php?gia_sp='.$price.'&page='.$i.'">'.$i.'</a></li>';
		}
	}

?>