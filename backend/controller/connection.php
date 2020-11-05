<?PHP 
    session_start();
    $connectionId = mysqli_connect('localhost', 'root', '', 'database', 3306);
	if(!isset($_SESSION['username'])) {
		header('Location: login.php');
	}
?>
