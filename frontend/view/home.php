<?php 
	include ('../controller/home_conn.php');
	include ('header.php');
?>

	<div class="row">
		<div id="wrap-inner">
			<div class="products col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="products-title"> Điện Thoại </h3>
				<div class="product-list row">
					<?php while($record_dt = mysqli_fetch_array($response_dt)) { ?>
						<div class="product-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
							<p>
								<a href="detailsdt.php?id_sp&id_sp=<?php echo $record_dt['id_sp']; ?>">
									<img class="img-thumbnail" width="150px" src="../images_dt/<?php echo $record_dt['anh_sp']; ?>" class="thumbnail">	
								</a>
							</p>
							<a href="details.php?id_sp&id_sp=<?php echo $record_dt['id_sp']; ?>"><?php echo $record_dt['ten_sp']; ?></a>
							<p class="reduce"><?php echo number_format($record_dt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
							<p class="price"><?php echo number_format($record_dt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
						</div> 		
					<?php } ?>		
				</div>
			</div>

			<div class="products col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"">					
				<div class="banner">			
					<img class="product-img" src="../img/nav_laptop.png" alt="LapTop">
				</div>	
			</div>

			<div class="products col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"">
				<h3 class="products-title"> LapTop </h3>
				<div class="product-list row">
					<?php while($record_lt = mysqli_fetch_array($response_lt)) { ?>
						<div class="product-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
							<p>
								<a href="detailslt.php?id_sp&id_sp=<?php echo $record_lt['id_sp']; ?>">
									<img class="img-thumbnail" width="150px" src="../images_lt/<?php echo $record_lt['anh_sp']; ?>" class="thumbnail">	
								</a>
							</p>
							<a href="details.php?id_sp&id_sp=<?php echo $record_lt['id_sp']; ?>"><?php echo $record_lt['ten_sp']; ?></a>	
							<p class="reduce"><?php echo number_format($record_lt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>								
							<p class="price"><?php echo number_format($record_lt['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
						</div> 		
					<?php } ?>
				</div>  
			</div>  
		</div>
	</div>					

	<!-- footer -->
<?php 
	include('footer.php');
?>