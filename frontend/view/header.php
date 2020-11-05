<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> B Shop</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

	<!-- CSS only -->
	<link rel="stylesheet" href="../css/base.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/category.css">
	<link rel="stylesheet" href="../css/details.css">
	<link rel="stylesheet" href="../css/complete.css">
	<link rel="stylesheet" href="../css/responsive.css">

</head>
<body>    
	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row header__container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 header__none">
					<div class="row header__title">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 logo">
							<div class="logo__home">
								<a href="home.php"><img src="../img/your-logo.png"></a>									
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 search">
							<form action="search.php" method="post">
								<input class="search_text" type="text" name="text" placeholder="Nhập từ khóa ...">
								<input class="search_submit" type="submit" name="submit" value="Tìm Kiếm">
							</form>
						</div>
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6 cart">
							<a class="display" href="giohang.php">Giỏ hàng</a>
							<a class="display-icon" href="giohang.php">
								<?php if(isset($_SESSION['giohang'])) { 
									echo $cartCount;
								} 
								else {
									echo 0;
								} 
								?>
							</a>				    
							<spam class="icon-search"><i class="fas fa-search"></i></spam>
						</div>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 search__small--input">
					<div class="search__small--hide">
						<i class="fas fa-arrow-left back__header--title"></i>
						<form class="search__small--form" action="search.php" method="post">
							<input class="search__small--text" type="text" name="text" placeholder="Nhập từ khóa ...">
							<input class="search__small--submit" type="submit" name="submit" value="Tìm Kiếm">
						</form>
					</div>
				</div>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section class="body">
		<div class="container">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 body__small">
				<nav class="menu__small">
					<ul class="menu__small--dropdow">
						<li class="menu__small--item"><a href="#">Điện thoại</a>
							<ul class="menu__small--list">
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=tat-ca-san-pham" title="">tất cả</a>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=0-5-trieu" title="">0 - 5 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=5-10-trieu" title="">5 - 10 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=10-15-trieu" title="">10 - 15 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=15-20-trieu" title="">15 - 20 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=20-25-trieu" title="">20 - 25 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachdt.php?gia_sp=tren-25-trieu" title="">Trên 25 triệu</a></li>
							</ul>
							
						</li>
						<li class="menu__small--item"><a href="#" title="">LapTop</a>
							<ul class="menu__small--list">
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=tat-ca-san-pham" title="">tất cả</a>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=0-10-trieu" title="">0 - 10 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=10-20-trieu" title="">10 - 20 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=20-30-trieu" title="">20 - 30 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=30-40-trieu" title="">30 - 40 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=40-50-trieu" title="">40 - 50 triệu</a></li>
								<li class="menu__small--item"><a href="danhsachlt.php?gia_sp=tren-50-trieu" title="">Trên 50 triệu</a></li>
							</ul>
						</li>
						<li class="menu__small--item"><a href="#" title="">Phụ kiện</a></li>
						<!-- <li class="menu__small--item"><a href="#" title="">Sạc dự phòng</a></li> -->
						<li class="menu__small--item"><a href="#" title="">Sim</a></li>
						<li class="menu__small--item"><a href="#" title="">Đồng hồ</a></li>
					</ul>
				</nav>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 sidebar">
					<nav class="menu">
						<ul class="menu-dropdow">
							<li class="menu-item list-item">Danh mục sản phẩm</li>
							<li class="menu-item"><a href="#">Điện thoại</a>
								<ul class="menu-list">
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=tat-ca-san-pham" title="">tất cả</a>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=0-5-trieu" title="">0 - 5 triệu</a></li>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=5-10-trieu" title="">5 - 10 triệu</a></li>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=10-15-trieu" title="">10 - 15 triệu</a></li>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=15-20-trieu" title="">15 - 20 triệu</a></li>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=20-25-trieu" title="">20 - 25 triệu</a></li>
									<li class="menu-item"><a href="danhsachdt.php?gia_sp=tren-25-trieu" title="">Trên 25 triệu</a></li>
								</ul>
								
							</li>
							<li class="menu-item"><a href="#" title="">LapTop</a>
								<ul class="menu-list">
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=tat-ca-san-pham" title="">tất cả</a>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=0-10-trieu" title="">0 - 10 triệu</a></li>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=10-20-trieu" title="">10 - 20 triệu</a></li>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=20-30-trieu" title="">20 - 30 triệu</a></li>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=30-40-trieu" title="">30 - 40 triệu</a></li>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=40-50-trieu" title="">40 - 50 triệu</a></li>
									<li class="menu-item"><a href="danhsachlt.php?gia_sp=tren-50-trieu" title="">Trên 50 triệu</a></li>
								</ul>
							</li>
							<li class="menu-item"><a href="#" title="">Phụ kiện</a></li>
							<li class="menu-item"><a href="#" title="">Sạc dự phòng</a></li>
							<li class="menu-item"><a href="#" title="">Sim</a></li>
							<li class="menu-item"><a href="#" title="">Đồng hồ</a></li>
						</ul>
					</nav>
				</div>

				<div id="main" class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						</ol>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="../img/slide-1.png" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../img/slide-2.png"  alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../img/slide-3.png"  alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../img/slide-4.png"  alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../img/slide-5.png"  alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../img/slide-6.png"  alt="Third slide">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>