<?php 
		session_start();

		if(isset($_SESSION['giohang'])) {
			$cartCount = count($_SESSION['giohang']);
		}

		$connectionId = mysqli_connect('localhost', 'root', '', 'database', 3306);
?>