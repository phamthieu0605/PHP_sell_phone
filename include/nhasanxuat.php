<!-- All sản phẩm khi người dùng click vào nhà sản xuất -->
<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = '';
    }
    $sql_sanphamall = mysqli_query($conn,"SELECT * FROM tbl_sanpham,tbl_nhasanxuat WHERE tbl_sanpham.NhaSanXuat_id = tbl_nhasanxuat.NhaSanXuat_id AND tbl_nhasanxuat.NhaSanXuat_id = '$id'");
?>
<div class="container__wrap">
    <div class="container">
        <div class="grid__column-10">
            <div class="grid__row">
                <?php 
                    while($row_producer = mysqli_fetch_array($sql_sanphamall)) {
                ?>
                <div class="grid__column-3">
                    <div class="container__product-item">
                        <a href="?u=chitietsp&id=<?php echo $row_producer['SanPham_id'] ?>" class="container__product">                              
                            <img class="container__product-img" src="<?php echo $row_producer['HinhAnh'] ?>" alt="">                               
                            <div class="container__product-text">
                                <h2><?php echo $row_producer['TenSanPham'] ?></h2>
                                <div class="container__price">
                                    <strong><?php echo $row_producer['DonGiaKhuyenMai'] ?></strong>
                                    <span><?php echo $row_producer['DonGia'] ?></span>
                                </div>
                            </div>
                        </a>
                        
                        <div class="container__add-to-cart">
                            <form action="?u=giohang" method="POST">
                                <input type="hidden" name="sanpham_id" value="<?php echo $row_producer['SanPham_id'] ?>">
                                <input type="hidden" name="tensanpham" value="<?php echo $row_producer['TenSanPham'] ?>">
                                <input type="hidden" name="hinhanh" value="<?php echo $row_producer['HinhAnh'] ?>">
                                <input type="hidden" name="dongiakhuyenmai" value="<?php echo $row_producer['DonGiaKhuyenMai'] ?>">
                                <input type="hidden" name="soluong" value="1">
                                <button>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></input>
                                </button>
                            </form>
                        </div>

                        <div class="discount">
                            <?php echo $row_producer["Discount"] ?>
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