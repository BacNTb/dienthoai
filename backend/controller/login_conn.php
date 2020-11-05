<?php
	session_start();
    $connectionId = mysqli_connect('localhost', 'root', '', 'database', 3306);

    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $userName = $_POST['username'];
        $Password = $_POST['password'];
        // mã hóa mật khẩu
        $PasswordHash = sha1($Password);
        $sql = "select * from `admin` where username = '$userName' and password = '$PasswordHash'";

        $response = mysqli_query($connectionId, $sql);
        if($response) {
            if(mysqli_num_rows($response) > 0) {
				$_SESSION['username'] = $userName;
				$_SESSION['password'] = $PasswordHash;
				
				header('Location: ../view/index.php');
				
            } else {
                echo '<center class="alert alert-danger">Tài khoản hoặc mật khẩu không chính xác !<center>';
                echo '<center class="alert alert-danger"><a href="../view/login.php">Đăng nhập lại</a><center>';
            }
		} 
		else {
            echo '<center class="alert alert-danger">Tài khoản hoặc mật khẩu không chính xác !<center>';
            echo '<center class="alert alert-danger"><a href="../view/login.php">Đăng nhập lại</a><center>';
        }
    }
?>