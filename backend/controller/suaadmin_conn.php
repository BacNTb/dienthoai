<?PHP 
	include 'connection.php';


	$id_admin = $_GET['id_admin'];

	$sql = "select * from `admin` where id_admin = '$id_admin'";
    $response = mysqli_query($connectionId, $sql);
    		
    if($response) {
        $record = mysqli_fetch_array($response);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];
        $hoten = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordHash = sha1($password);
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];

        $sql = "UPDATE `admin` SET `id_admin`='$id', `ho_ten`='$hoten', `username`='$username', `password`='$passwordHash', `email`='$email', `sdt`='$sdt' WHERE id_admin = '$id'";

        $response = mysqli_query($connectionId, $sql);

        if($response) {
				echo 'Sửa thông tin Admin thành công.';

            header('Location: ../view/admin.php');
        } else {
            echo mysqli_error($connectionId);
        }
    }

?>