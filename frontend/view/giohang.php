<?php 
	include ('../controller/controller.php'); 
	include ('header.php');
?>

    <div id="list-cart">
        <h3 class="products-title">Giỏ hàng</h3>
        <?php 
            if(isset($_SESSION['giohang'])) { 
                if(isset($_POST['sl'])) {
                    foreach ($_POST['sl'] as $id_sp => $sl) {
                        if($sl == 0) {
                            unset($_SESSION['giohang'][$id_sp]);
                        }
                        else if($sl > 0) {
                            $_SESSION['giohang'][$id_sp] = $sl;
                        }
                    }
                }

                $arrId = array();
                foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
                    $arrId[] = $id_sp;
                }
                
                $arrId = implode("','", $arrId);

                $sql_dt = "select * from `dienthoai` where id_sp in('$arrId') order by gia_km asc";
                $response_dt = mysqli_query($connectionId, $sql_dt);


                $sql_lt = "select * from `laptop` where id_sp in('$arrId') order by gia_km asc";
                $response_lt = mysqli_query($connectionId, $sql_lt);

            ?>
                <form id="giohang" action="" method="POST">
                    <table class="table table-hover .table-responsive text-center">
                        <thead>
                            <tr class="active">
                                <th width="14%">Ảnh mô tả</th>
                                <th width="25%">Tên sản phẩm</th>
                                <th width="11%">Số lượng</th>
                                <th width="20%">Đơn giá</th>
                                <th width="20%">Thành tiền</th>
                                <th width="10%">Xóa</th>
                            </tr>
                        </thead>
                        
                        <?php 
                            $totalpriceAll_dt = 0;
                            while($record_dt = mysqli_fetch_array($response_dt)) { 
                                $totalprice_dt = $record_dt['gia_km'] * $_SESSION['giohang'][$record_dt['id_sp']];
                            
                                ?>             
                        <tbody>
                            <tr>
                                <td><img style="width: 60px;" class="img-responsive" src="../images_dt/<?php echo $record_dt['anh_sp']; ?>"></td>
                                <td><?php echo $record_dt['ten_sp']; ?></td>
                                <td>
                                    <div class="form-group">
                                        <input name=sl[<?php echo $record_dt['id_sp']; ?>] class="form-control" type="number" min="1" value="<?php echo $_SESSION['giohang'][$record_dt['id_sp']];?>">
                                    </div>
                                </td>
                                <td><span class="price"><?php echo number_format($record_dt['gia_km'], 0, ',', '.'); ?><sup>đ</sup></span></td>
                                <td><span class="price"><?php echo number_format($totalprice_dt, 0, ',', '.'); ?><sup>đ</sup></span></td>
                                <td><a class="btn btn-outline-danger btn-sm" href="../controller/xoahang_conn.php?id_sp=<?php echo $record_dt['id_sp']; ?>">Xóa</a></td>
                            </tr>
                        </tbody>

                        <?php $totalpriceAll_dt += $totalprice_dt; ?>
                        <?php }  
                            $totalpriceAll_lt = 0;
                            while($record_lt = mysqli_fetch_array($response_lt)) { 
                                $totalprice_lt = $record_lt['gia_km'] * $_SESSION['giohang'][$record_lt['id_sp']];
                                
                            ?>             
                            <tbody>
                            <tr>
                                <td><img style="width: 60px;" class="img-responsive" src="../images_lt/<?php echo $record_lt['anh_sp']; ?>"></td>
                                <td><?php echo $record_lt['ten_sp']; ?></td>
                                <td>
                                    <div class="form-group">
                                        <input name=sl[<?php echo $record_lt['id_sp']; ?>] class="form-control" type="number" min="1" value="<?php echo $_SESSION['giohang'][$record_lt['id_sp']];?>">
                                    </div>
                                </td>
                                <td><span class="price"><?php echo number_format($record_lt['gia_km'], 0, ',', '.'); ?><sup>đ</sup></span></td>
                                <td><span class="price"><?php echo number_format($totalprice_lt, 0, ',', '.'); ?><sup>đ</sup></span></td>
                                <td><a class="btn btn-outline-danger btn-sm" href="../controller/xoahang_conn.php?id_sp=<?php echo $record_lt['id_sp']; ?>">Xóa</a></td>
                            </tr>
                            </tbody>

                            <?php $totalpriceAll_lt += $totalprice_lt; ?>
                            <?php }  ?>              
                    </table>
                    <div class="row main-pice">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 main__total--pice">		
                            <?php $totalprice = $totalpriceAll_dt + $totalpriceAll_lt; ?>
                            Tổng thanh toán: <span class="price total-price"><?php echo number_format($totalprice, 0, ',', '.'); ?><sup>đ</sup></span>                                
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 main-btn">
                            <a href="home.php" class="btn btn-outline-success">Mua tiếp</a>
                            <a onclick="document.getElementById('giohang').submit();" href="#" class="btn btn-outline-info">Cập nhật</a>
                            <a class="btn btn-outline-danger" href="../controller/xoahang_conn.php?id_sp=xoa">Xóa giỏ hàng</a>
                        </div>
                    </div>
                </form> 

        <?php } else {
                echo '<script> alert("Giỏ hàng trống !") </script>';
        } ?>   
        
        <div id="xac-nhan">
            <h3>Xác nhận mua hàng</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Họ và tên:</label>
                    <input required type="text" class="form-control" id="name" name="name" placeholder="Nguyễn Thế Bắc">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="bacnt@kma.com">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input required type="tell" class="form-control" id="phone" name="phone" placeholder="0975xxxxxx">
                </div>
                <div class="form-group">
                    <label for="add">Địa chỉ:</label>
                    <input required type="text" class="form-control" id="add" name="address" placeholder="Số 141 - Chiến Thắng - Tân Triều">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-danger" value="Thực hiện đơn hàng">
                </div>
            </form>
        </div>
    </div>
    <!-- end main -->

	<!-- footer -->
<?php 
	include('footer.php');
?>