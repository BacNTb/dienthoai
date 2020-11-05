<?php 
	include ('../controller/search_conn.php');
	include ('header.php');
?>

		<div id="row">
			<div class="products">
				<h3  class="products-title">Tìm kiếm với từ khóa: <span><?php echo $text; ?></span></h3>
				<div class="product-list row">
					<?php while($record_dt = mysqli_fetch_array($response_dt)) { ?>
						<div class="product-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
							<p><a href="#">
								<img class="img-thumbnail" width="150px" src="../images_dt/<?php echo $record_dt['anh_sp']; ?>" class="thumbnail">	
							</a></p>
							<a href="#"><?php echo $record_dt['ten_sp']; ?></a>
							<p class="reduce"><?php echo number_format($record_dt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
							<p class="price"><?php echo number_format($record_dt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
						</div> 		
					<?php } 
						while($record_lt = mysqli_fetch_array($response_lt)) {
					?>	
						<div class="product-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
							<p><a href="#">
								<img class="img-thumbnail" width="150px" src="../images_lt/<?php echo $record_lt['anh_sp']; ?>" class="thumbnail">	
							</a></p>
							<a href="#"><?php echo $record_lt['ten_sp']; ?></a>
							<p class="reduce"><?php echo number_format($record_lt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
							<p class="price"><?php echo number_format($record_lt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
						</div> 	
					<?php }?>

				</div>                	                	
			</div>

			<div aria-label="Page navigation example">
				<ul class="pagination">
					<?php
						echo $listPage;
					?>					
				</ul>
			</div>
		</div>
		
		<!-- end main -->


	<!-- footer -->
<?php 
	include('footer.php');
?>


