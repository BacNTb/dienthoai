<?php 
	include ('../controller/dsachlt_conn.php');
	include ('header.php');
?>

		<div class="row">
			<div class="products col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="products-title"> LapTop </h3>
				<div class="product-list row">
					<?php while($record = mysqli_fetch_array($response)) { ?>
						<div class="product-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
							<p><a href="detailslt.php?id_sp=<?php echo $record['id_sp']; ?>">
								<img class="img-thumbnail" width="150px" src="../images_lt/<?php echo $record['anh_sp']; ?>" class="thumbnail">	
							</a></p>
							<a href="detailslt.php?id_sp=<?php echo $record['id_sp']; ?>"><?php echo $record['ten_sp']; ?></a>
							<p class="reduce"><?php echo number_format($record['gia_sp'], 0, ',', '.'); ?><sup>đ</sup></p>
							<p class="price"><?php echo number_format($record['gia_km'], 0, ',', '.'); ?><sup>đ</sup></p>
						</div> 		
					<?php } ?>		
				</div>
			</div>  

			<div class="Page navigation" aria-label="Page navigation example">
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