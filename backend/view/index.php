<?php 
	include '../controller/index_conn.php';
	include 'headersp.php';
?>

		
	<div class="conten">
		<div class="row">
			<div class="col-sm-3 col-lg-2 conten-nav">
				<ul class="col-sm-3 col-lg-2 nav menu">
					<hr class="solid">
					<a href="index.php"><li class="active"> Trang chủ</li></a>
					<a href="danhsachdt.php"><li> Điện thoại</li></a>
					<a href="danhsachlt.php"><li> LapTop</li></a>
					<hr class="solid">
				</ul>	
			</div><!--/.sidebar-->
				
			<div class="col-sm-9 col-lg-10">		
				<div class="row conten-top">
					<div class="col-lg-12">
						<h1 class="page-header">Trang chủ</h1>
					</div>
				</div><!--/.row-->
											
				<div class="row conten-row">
					<div class="col-md-12 col-lg-4">
						<div class="card card-border">
							<a href="danhsachdt.php" class="row no-padding">
								<div class="col-sm-3 col-lg-5 bg-primary card-body card-center">
									<span>Điện Thoại</span>
								</div>
								<div class="col-sm-9 col-lg-7 card-center">
									<span class="large"><?PHP echo $record_dt; ?></span>
									<div class="text-muted"> Sản Phẩm </div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card card-border">
							<a href="danhsachlt.php" class="row no-padding">
								<div class="col-sm-3 col-lg-5 bg-success card-body card-center">
									<span>LapTop</span>
								</div>
								<div class="col-sm-9 col-lg-7 card-center">
									<span class="large"><?PHP echo $record_lt; ?></span>
									<div class="text-muted">Sản Phẩm</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="card card-border">
							<a href="admin.php" class="row no-padding card-center">
								<div class="col-sm-3 col-lg-5 bg-info card-body">
									<span>Admin</span>
								</div>

								<div class="col-sm-9 col-lg-7 widget-right card-center">
									<span class="large"><?PHP echo $record_admin; ?></span>
									<div class="text-muted">Người Dùng</div>
								</div>
							</a>
						</div>
					</div>

				</div><!--/.row-->
			</div>	<!--/.main-->
		</div>
	</div>

</body>

</html>
