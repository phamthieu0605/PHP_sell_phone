<?php 
	session_start();
	include('../ban_dien_thoai/DB/conn_DB.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../ban_dien_thoai/css/all.css"> <!--fontawesome-->
    <link rel="stylesheet" href="../ban_dien_thoai/css/base.css"> <!--file css dùng chung-->
    <link rel="stylesheet" href="../ban_dien_thoai/css/main.css">
    <!-- <link rel="stylesheet" href="../ban_dien_thoai/css/bootstrap.css"> -->
</head>
<body>
    <div class="wrapper"> <!-- Thẻ bao trùm toàn site-->

        <?php 
            include("../ban_dien_thoai/include/header__wrap.php");
            include("../ban_dien_thoai/include/banner__wrap.php");
            include("../ban_dien_thoai/include/banner__small.php");
            if(isset($_GET['u'])) {
                $t = $_GET['u'];
            } else {
                $t = '';
            }

            // Nếu biến $t != giohang thi include trang nha san xuat vao, neu bang thi include trang giohang vao
            if($t!='giohang' && $t!='dangnhap' && $t!='dangky') {
                include("../ban_dien_thoai/include/container-left.php");
            }

            if($t=='nhasanxuat') {
                include("../ban_dien_thoai/include/nhasanxuat.php");
            } elseif($t=='chitietsp') {
                include("../ban_dien_thoai/include/chitietsanpham.php");
            } elseif($t=='giohang') {
                include("../ban_dien_thoai/include/cart.php");
            } elseif($t=='timkiem') {
                include("../ban_dien_thoai/include/timkiem.php");
            // } elseif($t=='dangnhap') {
            //     include("../ban_dien_thoai/include/dangnhap.php");
            // } elseif($t=='dangky') {
            //     include("../ban_dien_thoai/include/dangky.php");
            } else {
                include("../ban_dien_thoai/include/container-right.php");
            }
            include("../ban_dien_thoai/include/footer.php");          
        ?>

    </div>
</body>
</html>