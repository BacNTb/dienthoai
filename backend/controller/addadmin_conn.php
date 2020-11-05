<?PHP 
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordHash = sha1($password);
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];

		$sql = "INSERT INTO `admin`(`ho_ten`, `username`, `password`, `email`, `sdt`) VALUES ('$name', '$username', '$passwordHash', '$email', '$sdt')";
        $response = mysqli_query($connectionId, $sql);

        if($response) {
            echo '<script>';
			echo 'alert("Thêm Admin thành công !")';
			echo '</script>';

            header('Location: ../view/admin.php');
        } else {
            echo '<center class="alert alert-danger">Hãy nhập đúng thông tin !</center>';
        }
    }
?>