<!DOCTYPE html>
<html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang quản trị | Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="..js/jquery-3.4.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <style>
    #navbar {
        margin-top:50px;
    }
    #tbl-first-row {
        font-weight:bold;
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
                            <li class="active"><a href="addadmin.php">Add Admin</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="../controller/addadmin_conn.php" method="post">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" class="form-control" placeholder="Nguyễn Thế Bắc" required />
                    </div>
                    <div class="form-group">
                        <label>Tài khoản</label>
                        <input type="text" name="username" class="form-control" placeholder="bacnt" required />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="@123" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="act@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" placeholder="0988888999" required />
                    </div>
                    <input type="submit" name="submit" value="Thêm Admin" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>

</body>
</html>
