<!-- Bên trái nhà sản xuất -->
<div class="container__wrap">
    <div class="container">
        <?php 
            $sql_nhasanxuat = mysqli_query($conn, 'SELECT * FROM tbl_nhasanxuat ORDER BY NhaSanXuat_id ASC');
        ?>
        <div class="grid__column-2">
            <div class="header__producer">
                <h1>Nhà sản xuất</h1>
            </div>
            <div class="producer">
                <ul class="producer__list">
                    <?php 
                        while($row_NhaSanXuat = mysqli_fetch_array($sql_nhasanxuat)) {
                    ?>
                    <li class="producer__item">
                        <a href="?u=nhasanxuat&id=<?php echo $row_NhaSanXuat['NhaSanXuat_id'] ?>" class="producer__link"><?php echo $row_NhaSanXuat['TenNhaSanXuat'] ?></a>
                    </li>
                    <?php 
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>