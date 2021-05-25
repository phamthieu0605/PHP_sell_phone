<?php 
    include("../DB/conn_DB.php");
?>
<?php 
    if(isset($_POST['themnsx'])) {
        $nhasanxuat = $_POST['nhasanxuat'];
        $sql_insert = mysqli_query($conn, "INSERT INTO tbl_nhasanxuat(TenNhaSanXuat) VALUES('$nhasanxuat')");
        header('Location: xulynsx.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà sản xuất</title>
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
                    $sql_delete = mysqli_query($conn, "DELETE FROM tbl_nhasanxuat WHERE NhaSanXuat_id = '$id'");
                }
            ?>
            <div class="col-md-6">
                <h2>Thêm nhà sản xuất</h2>
                <label for="">Tên nhà sản xuất</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="nhasanxuat"><br>
                    <input type="submit" name="themnsx" value="Thêm nhà sản xuất" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-6">
                <h2>Danh sách nhà sản xuất</h2>
                <?php 
                    $sql_select = mysqli_query($conn, "SELECT * FROM tbl_nhasanxuat")
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Nhà sản xuất</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=0;
                            while($row_nsx = mysqli_fetch_array($sql_select)) {
                                $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $row_nsx['TenNhaSanXuat'] ?></td>
                            <td><a href="?xoa=<?php echo $row_nsx['NhaSanXuat_id'] ?>" onclick ="return confirm('Bạn có muốn xóa?????');">Xóa</a></td>
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