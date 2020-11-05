<?PHP 
	include '../controller/lt_conn.php';
	include 'headersp.php';
?>

<?php 
?>
		
	<div class="conten">
		<div class="row">
			<div class="col-sm-3 col-lg-2 conten-nav">
				<ul class="col-sm-3 col-lg-2 nav menu">
					<hr class="solid">
					<a href="index.php"><li> Trang chủ</li></a>
					<a href="danhsachdt.php"><li> Điện thoại</li></a>
					<a href="danhsachlt.php"><li class="active"> LapTop</li></a>
					<hr class="solid">
				</ul>
			</div><!--/.sidebar-->
		
			<div class="col-sm-9 col-lg-10">
				<div class="row conten-top">
					<div class="col-lg-12 conten-margin">
						<h1 class="page-header"> LapTop </h1>
						<!-- Example single danger button -->
						<div class="btn-group dropright">
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Danh sách sản phẩm
							</button>
							<div class="dropdown-menu">
								<a href="themlt.php" class="dropdown-item">Thêm LapTop</a>
							</div>
						</div>
					</div>
				</div><!--/.row-->
				
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<div class="conten">
								<div class="panel-body">
									<table class="table table-hover table-product">				
										<thead>
											<tr class="thead-light">
												<th>Id</th>
												<th width="30%">Tên sản phẩm</th>
												<th>Ảnh sản phẩm</th>
												<th>Giá sản phẩm</th>
												<th>Giá khuyến mại</th>
												<th>Tùy chọn</th>
											</tr>
										</thead>
										<tbody>
											<?PHP while($record = mysqli_fetch_array($response)) { ?>
												<tr>
													<td><?PHP echo $record['id_sp']; ?></td>
													<td><?PHP echo $record['ten_sp']; ?></td>
													<td>
														<img style="margin: 0 auto;" width="150px" src="../images_lt/<?PHP echo $record['anh_sp']; ?>" class="thumbnail">	
													</td>
													<td><?PHP echo number_format($record['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></td>
													<td><?PHP echo number_format($record['gia_km'], 0, ',', '.'); ?><sup>đ</sup></td>
													<td>
														<div style="display: flex; justify-content: space-evenly; border: none;">
															<a href="sualt.php?id_sp&id_sp=<?PHP echo $record['id_sp']; ?>" class="btn  btn-outline-info btn-sm"> Sửa</a>
															<form action="../controller/lt_conn.php" method="post">
																<input type="hidden" value="<?PHP echo $record['id_sp']; ?>" name="id">
																<button onclick="return xoaSanPham();" class="btn btn-outline-danger btn-sm">Xóa</button>
															</form>
														</div>
													</td>
												</tr>
											<?PHP } ?>
										</tbody>
									</table>	
								</div>
							</div>
						</div>
					</div>
					<div class="Page navigation example nav-center">
						<ul class="pagination justify-content-center">
		
							<?PHP
								echo $listPage;
							?>
						</ul>
					</div>
				</div><!--/.row-->
			</div>	<!--/.main-->
		</div>
	</div>

	<script>
		function xoaSanPham() {
			var conf = confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không ?");
			return conf;
		}
	</script>	
</body>

</html>
