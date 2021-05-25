<?php 
    include("../DB/conn_DB.php");
?>
<?php 
    if(isset($_POST['themsanpham'])) {
        $tensanpham = $_POST['tensanpham'];
        $nhasanxuatid = $_POST['nhasanxuatid'];
        $manhinh = $_POST['manhinh'];
        $hedieuhanh = $_POST['hedieuhanh'];
        $camerasau = $_POST['camerasau'];
        $cameratruoc = $_POST['cameratruoc'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $rom = $_POST['rom'];
        $sdcard = $_POST['sdcard'];
        $pin = $_POST['pin'];
        $dongia = $_POST['dongia'];
        $dongiakhuyenmai = $_POST['dongiakhuyenmai'];
        $discount = $_POST['discount'];
        $soluong = $_POST['soluong'];
        $trangthai = $_POST['trangthai'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $path = "../ban_dien_thoai/img/mobile/".$hinhanh;
        $sql_insert_sp = mysqli_query($conn, "INSERT INTO tbl_sanpham(TenSanPham, NhaSanXuat_id, ManHinh, HeDieuHanh, CameraSau, CameraTruoc, CPU, RAM, ROM, SDCard, Pin, DonGia, DonGiaKhuyenMai, Discount, SoLuong, TrangThai, HinhAnh) VALUES('$tensanpham','$nhasanxuatid','$manhinh','$hedieuhanh','$camerasau','$cameratruoc','$cpu','$ram','$rom','$sdcard','$pin','$dongia','$dongiakhuyenmai','$discount','$soluong','$trangthai','$path')");
        move_uploaded_file($hinhanh_tmp, $path);
        header('Location: xulysanpham.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../ban_dien_thoai/css/all.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../admin/dashboard.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="xulynsx.php">Nhà sản xuất</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
                    </li>
                </ul>
<!--                 <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <?php 
                if(isset($_GET['xoa'])) {
                    $id = $_GET['xoa'];
                    $sql_delete = mysqli_query($conn, "DELETE FROM tbl_sanpham WHERE SanPham_id = '$id'");
                }
            ?>
            <div class="col-md-4">
                <h2>Thêm sản phẩm mới</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="tensanpham">
                    <label for="">Nhà sản xuất id</label>
                    <input type="text" class="form-control" name="nhasanxuatid">
                    <label for="">Màn hình</label>
                    <input type="text" class="form-control" name="manhinh">
                    <label for="">Hệ điều hành</label>
                    <input type="text" class="form-control" name="hedieuhanh">
                    <label for="">Camera sau</label>
                    <input type="text" class="form-control" name="camerasau">
                    <label for="">Camera trước</label>
                    <input type="text" class="form-control" name="cameratruoc">
                    <label for="">CPU</label>
                    <input type="text" class="form-control" name="cpu">
                    <label for="">RAM</label>
                    <input type="text" class="form-control" name="ram">
                    <label for="">ROM</label>
                    <input type="text" class="form-control" name="rom">
                    <label for="">SDCard</label>
                    <input type="text" class="form-control" name="sdcard">
                    <label for="">Pin</label>
                    <input type="text" class="form-control" name="pin">
                    <label for="">Đơn giá</label>
                    <input type="text" class="form-control" name="dongia">
                    <label for="">Đơn giá khuyến mại</label>
                    <input type="text" class="form-control" name="dongiakhuyenmai">
                    <label for="">Discount</label>
                    <input type="text" class="form-control" name="discount">
                    <label for="">Số lượng</label>
                    <input type="text" class="form-control" name="soluong">
                    <label for="">Trạng thái</label>
                    <input type="text" class="form-control" name="trangthai">
                    <label for="">Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <input type="submit" class="form-control btn btn-primary" value="Thêm sản phẩm" name="themsanpham">
                </form>
            </div>

            <div class="col-md-8">
                <h2>Danh sách sản phẩm</h2>
                <?php 
                    $sql_select = mysqli_query($conn, "SELECT * FROM tbl_sanpham")
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn Giá</th>
                            <th scope="col">Giá Bán</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            while($row_sp = mysqli_fetch_array($sql_select)) {
                                $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                           
                            <td><?php echo $row_sp['TenSanPham'] ?></td>
                            <td><?php echo $row_sp['DonGia']; ?></td>
                            <td><?php echo $row_sp['DonGiaKhuyenMai'] ?></td>
                            <td>
                                <a href="?xoa=<?php echo $row_sp['SanPham_id'] ?>" onclick="return confirm('Bạn có muốn xóa????')">Xóa</a>
                               <!--  <a href="?sua=<?php echo $row_sp['SanPham_id'] ?>">Sửa</a> -->
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>