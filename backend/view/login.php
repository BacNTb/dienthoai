<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="..js/jquery-3.4.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng nhập</div>
				<div class="panel-body">
					
					<!-- kết nối đến connection -->
					<form action="../controller/login_conn.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tài khoản" name="username" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password">
							</div>
							<!-- <div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div> -->
							<input type="submit" class="btn btn-primary" value="Đăng nhâp">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
