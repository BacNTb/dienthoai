<?php
    include ('controller.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

		$sql = "INSERT INTO `muahang` (`hoten`, `email`, `dienthoai`, `diachi`) VALUES ('$name', '$email', '$phone', '$address')";
        $response = mysqli_query($connectionId, $sql);

        if($response) {
            unset($_SESSION['giohang']);
            echo '<script>';
			echo 'alert("Đặt hàng thành công !")';
			echo '</script>';
            header('location: ../view/success.php');
        } else {
            echo '<script>';
			echo 'alert("Lỗi! Xin hãy đặt lại!")';
			echo '</script>';
        }
    }
?>