<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang quản trị | Admin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.one.css">	
	<script src="../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../css/styles.css">

</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-fixed">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Trang Quản Trị</a>				
			<div class="btn-group">
				<button class="btn btn-secondary btn-sm dropdown-toggle bg-dark btn-login" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<a href="#"><?PHP if(isset($_SESSION['username'])) {echo $_SESSION['username'];} ?></a>
				</button>
				<div class="dropdown-menu">
					<li><a href="login.php"> Đăng xuất</a></li>
				</div>
			</div>
							
		</div>
	</nav>