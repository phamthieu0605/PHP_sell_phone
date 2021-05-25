<!-- Bên phải all sản phẩm -->
<div class="container__wrap">
    <div class="container">
        <div class="grid__column-10">
            <div class="grid__row">
                <?php 
                    $sql_sanpham = mysqli_query($conn,'SELECT * FROM tbl_sanpham');
                    while($row_product = mysqli_fetch_array($sql_sanpham)) {
                ?>
                <div class="grid__column-3">
                    <div class="container__product-item">
                        <a href="?u=chitietsp&id=<?php echo $row_product['SanPham_id'] ?>" class="container__product">                              
                            <img class="container__product-img" src="<?php echo $row_product['HinhAnh'] ?>" alt="">                               
                            <div class="container__product-text">
                                <h2><?php echo $row_product['TenSanPham'] ?></h2>
                                <div class="container__price">
                                    <strong><?php echo $row_product['DonGiaKhuyenMai'] ?></strong>
                                    <span><?php echo $row_product['DonGia'] ?></span>
                                </div>
                            </div>
                        </a>
                        
                        <div class="container__add-to-cart">
                            <form action="?u=giohang" method="POST">
                                <input type="hidden" name="sanpham_id" value="<?php echo $row_product['SanPham_id'] ?>">
                                <input type="hidden" name="tensanpham" value="<?php echo $row_product['TenSanPham'] ?>">
                                <input type="hidden" name="hinhanh" value="<?php echo $row_product['HinhAnh'] ?>">
                                <input type="hidden" name="dongiakhuyenmai" value="<?php echo $row_product['DonGiaKhuyenMai'] ?>">
                                <input type="hidden" name="soluong" value="1">
                                <button>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></input>
                                </button>
                            </form>
                            
                        </div>

                        <div class="discount">
                            <?php echo $row_product['Discount'] ?>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</div