<?PHP 
	include '../controller/admin_conn.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    .conten {
        width: 700px;
        margin: 0 auto;
    }
    </style>
</head>
<body>

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class="active"><a href="admin.php">Admin</a></li>
                        <li><a href="addadmin.php">Add Admin</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td>Id</td>
                    <td>Họ tên</td>
                    <td>Tài khoản</td>
                    <td>Mật khẩu</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>

                <?PHP while($record = mysqli_fetch_array($response)) { ?>
                    <tr>
                        <td><?PHP echo $record['id_admin']; ?></td>
                        <td><?PHP echo $record['ho_ten']; ?></td>
                        <td><?PHP echo $record['username']; ?></td>
                        <td><?PHP echo $record['password']; ?></td>
                        <td><?PHP echo $record['email']; ?></td>
                        <td><?PHP echo $record['sdt']; ?></td>
                        <td>
                            <a href="suaadmin.php?id_admin&id_admin=<?PHP echo $record['id_admin']; ?>" class="btn btn-warning btn-xs"> Sửa</a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" value="<?PHP echo $record['id_admin']; ?>" name="id">
                                <button onclick="return xoaAdmin();" class="btn btn-danger btn-xs">Xóa</button>
                            </form>
                        </td>
                        
                    </tr>
                <?PHP } ?>
			</table>
            <div aria-label="Page navigation" style="text-align: center;">
            	<ul class="pagination text-right">

                    <?PHP
						echo $listPage;
					?>
                </ul>
            </div>
        </div>
    </div>
</div>

    <script>
		function xoaAdmin() {
			var conf = confirm("Bạn có chắc chắn muốn xóa người dùng này hay không ?");
			return conf;
		}
	</script>
</body>
</html>
