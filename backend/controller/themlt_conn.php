<?PHP 
	include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $masp = $_POST['masp'];
        $tensp = $_POST['name'];
        $anhsp = $_POST['img'];
        $gia = $_POST['price'];
        $giakm = $_POST['pricekm'];

		$sql = "INSERT INTO `laptop`(`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `gia_km`) VALUES ('$masp', '$tensp', '$anhsp', '$gia', '$giakm')";
        $response = mysqli_query($connectionId, $sql);

        if($response) {
			header('Location: ../view/danhsachlt.php');
			
        } else {
            echo mysqli_error($connectionId);
        }
    }
?>