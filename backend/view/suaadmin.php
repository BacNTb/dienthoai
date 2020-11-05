<?PHP 
	include '../controller/suaadmin_conn.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang quản trị | Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="..js/jquery-3.4.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
    <script src="..//js/bootstrap.min.js"></script>
    <style>
    #navbar {
        margin-top:50px;
    }
    #tbl-first-row {
        font-weight:bold;
    }	
    #logout {
        padding-right:30px;
    }
    .conten {
    width: 700px;
    margin: 0 auto;
    }	
    </style>
</head>
<body>

    <div class="conten">
        <div id="navbar" class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="admin.php">Admin</a></li>
                            <li><a href="addadmin.php">Add Admin</a></li>
                            <li class="active"><a href="suaadmin.php">Sửa Admin</a></li>
                        </ul>
                        <!-- <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="#">Logout</a></p> -->
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- <div class="alert alert-danger">User exist!</div> -->
                <form method="post" action="">
                    <div class="form-group">
                        <label>ID Admin</label>
                        <input type="text" name="id" class="form-control" value="<?PHP echo $record['id_admin']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" class="form-control" value="<?PHP echo $record['ho_ten']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Tài khoản</label>
                        <input type="text" name="username" class="form-control" value="<?PHP echo $record['username']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control" value="<?PHP echo $record['password']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?PHP echo $record['email']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" value="<?PHP echo $record['sdt']; ?>" required />
                    </div>
                    <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>

</body>
</html>
