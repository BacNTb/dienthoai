<?php 
	include 'connection.php';


	$id = $_GET['id_sp'];

    $sql = "select * from `dienthoai` where id_sp = '$id'";
    $response = mysqli_query($connectionId, $sql);
    
    if($response) {
        $record = mysqli_fetch_array($response);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $masp = $_POST['masp'];
        $tensp = $_POST['name'];
        $anhsp = $_POST['img'];
        $gia = $_POST['price'];
        $giakm = $_POST['pricekm'];

        $sql = "UPDATE `dienthoai` SET `id_sp`='$masp', `ten_sp`='$tensp',`anh_sp`='$anhsp', `gia_sp`='$gia', `gia_km`='$giakm' WHERE id_sp = '$id'";

        $response = mysqli_query($connectionId, $sql);

        if($response) {
				echo 'Sửa thông tin sản phẩm thành công.';

            header('Location: ../view/danhsachdt.php');
        } else {
            echo mysqli_error($connectionId);
        }
    }

?>