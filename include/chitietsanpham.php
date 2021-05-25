<!-- Chi tiết sản phẩm -->
    <?php 
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = '';
        }
    ?>
    <?php 
        $sql_spec = mysqli_query($conn, "SELECT * FROM tbl_sanpham WHERE tbl_SanPham.SanPham_id='$id'");
        while($row_info = mysqli_fetch_array($sql_spec)) {
    ?>
    <div class="container">
        <div class="name-mobile">
            <h1>Điện thoại <?php echo $row_info['TenSanPham'] ?></h1>
            <div class="container__add-to-cart">
                <form action="?u=giohang" method="POST">
                    <input type="hidden" name="sanpham_id" value="<?php echo $row_info['SanPham_id'] ?>">
                    <input type="hidden" name="tensanpham" value="<?php echo $row_info['TenSanPham'] ?>">
                    <input type="hidden" name="hinhanh" value="<?php echo $row_info['HinhAnh'] ?>">
                    <input type="hidden" name="dongiakhuyenmai" value="<?php echo $row_info['DonGiaKhuyenMai'] ?>">
                    <input type="hidden" name="soluong" value="1">
                    <button>
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></input>
                    </button>
                </form>
            </div>
        </div>
        <div class="detail">
            <div class="detail__img">
                <img src="<?php echo $row_info['HinhAnh'] ?>" alt="">
            </div>

            <div class="detail__spec">
                <div class="detail__spec-head">
                    <h2>Thông số kĩ thuật</h2>
                </div>
                
                <div class="detail__info">
                    <ul class="detail__info-list">
                        <li class="detail__info-item">
                            <p>Màn hình</p>
                            <div><?php echo $row_info['ManHinh'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Hệ điều hành</p>
                            <div><?php echo $row_info['HeDieuHanh'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Camara sau</p>
                            <div><?php echo $row_info['CameraSau'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Camara trước</p>
                            <div><?php echo $row_info['CameraTruoc'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>CPU</p>
                            <div><?php echo $row_info['CPU'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>RAM</p>
                            <div><?php echo $row_info['RAM'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Bộ nhớ trong</p>
                            <div><?php echo $row_info['ROM'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Thẻ nhớ</p>
                            <div><?php echo $row_info['SDCard'] ?></div>
                        </li>

                        <li class="detail__info-item">
                            <p>Dung lượng pin</p>
                            <div><?php echo $row_info['Pin'] ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>    