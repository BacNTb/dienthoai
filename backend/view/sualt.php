<?PHP 
	include '../controller/sualt_conn.php';
	include 'headersp.php';
	// include '../controller/viewsua_conn.php';
?>

		
	<div class="conten">
		<div class="row">
			<div class="col-sm-3 col-lg-2 conten-nav">
				<ul class="col-sm-3 col-lg-2 nav menu">
					<hr class="solid">
					<a href="index.php"><li> Trang chủ</li></a>
					<a href="danhsachdt.php"><li> Điện thoại</li></a>
					<a href="danhsachlt.php"><li> LapTop</li></a>
					<a href="#"><li class="active"> Sửa thông tin Laptop</li></a>
					<hr class="solid">
				</ul>	
			</div><!--/.sidebar-->
		
			<div class="col-sm-9 col-lg-10">
				<div class="row conten-top">
					<div class="col-lg-12">
						<h1 class="page-header"> LapTop</h1>
						<div class="bg-secondary conten-header">Sửa sản phẩm</div>
						<a href="danhsachlt.php" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>
					</div>
				</div><!--/.row-->
				
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						
						<div class="panel panel-primary">
							<div class="panel-body">
								<form action="" method="post">
									<div class="row">
										<div class="col-xs-8 col-md-8 col-lg-8">
											<div class="form-group" >
												<label>Mã sản phẩm</label>
												<input required type="text" name="masp" class="form-control" value="<?PHP echo $record['id_sp']; ?>">
											</div>
											<div class="form-group" >
												<label>Tên sản phẩm</label>
												<input required type="text" name="name" class="form-control" value="<?PHP echo $record['ten_sp']; ?>">
											</div>
											<div class="form-group" >
												<label>Ảnh sản phẩm (Đường dẫn ảnh)</label>
												<input required type="text" name="img" class="form-control" value="<?PHP echo $record['anh_sp']; ?>">
												<!-- <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
												<img id="avatar" class="thumbnail" width="300px" src="img/iphone7-plus-black-select-2016.jpg"> -->
											</div>
											<div class="form-group" >
												<label>Giá sản phẩm</label>
												<input required type="number" name="price" class="form-control" value="<?PHP echo $record['gia_sp']; ?>">
											</div>
											<div class="form-group" >
												<label>Giá khuyến mại</label>
												<input required type="number" name="pricekm" class="form-control" value="<?PHP echo $record['gia_km']; ?>">
											</div>
											<input type="submit" name="submit" value="Sửa" class="btn btn-success">
											<input type="reset" class="btn btn-warning" value="Nhập lại">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!--/.row-->
			</div>	<!--/.main-->
		</div>
	</div>
	</br>
	</br>


</body>

</html>
