<?php 
	include ('../controller/detailslt_conn.php');
	include ('header.php');
?>

	<div class="row">
		<div class="product-img text-center col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
			<img src="../images_lt/<?php echo $record['anh_sp']; ?>">
		</div>
		<div class="product-details col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
			<h3 class="products-title"><?php echo $record['ten_sp']; ?></h3>
			<p>Giá: <span class="price"><?php echo number_format($record['gia_km'], 0, ',', '.'); ?><sup>đ</sup></span></p>
			<p>Bảo hành: 1 đổi 1 trong 12 tháng</p> 
			<p>Phụ kiện: Dây cáp sạc, tai nghe</p>
			<p>Tình trạng: Máy mới 100%</p>
			<p>Khuyến mại: Hỗ trợ trả góp 0%</p>
			<p class="add-cart text-center"><a href="../controller/themgiohang_conn.php?id_sp=<?php echo $record['id_sp']; ?>">Thêm vào giỏ hàng</a></p>
		</div>
	</div>				
	<!-- end main -->

	<!-- footer -->
<?php 
	include('footer.php');
?>