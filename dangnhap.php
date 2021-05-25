<?php 
    include('../ban_dien_thoai/DB/conn_DB.php');
?>

<?php 
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = MD5($_POST['password']);

        $sql_select = mysqli_query($conn, "SELECT * FROM tbl_khachhang WHERE Email = '$email' AND Password = '$password' LIMIT 1");
        $count = mysqli_num_rows($sql_select);
        $row_login = mysqli_fetch_array($sql_select);
        if($count > 0) {
            $_SESSION['login'] = $row_login['FullName'];
            $_SESSION['KhachHang_id'] = $row_login['KhachHang_id'];
            header('Location: index.php');
        } else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ban_dien_thoai/css/all.css"> <!--fontawesome-->
    <link rel="stylesheet" href="../ban_dien_thoai/css/base.css"> <!--file css dùng chung-->
    <link rel="stylesheet" href="../ban_dien_thoai/css/main.css">
    <link rel="stylesheet" href="../ban_dien_thoai/css/bootstrap.css">
</head>
<body>
    <?php 
        include('../ban_dien_thoai/include/header__wrap.php');
        include('../ban_dien_thoai/include/banner__wrap.php');
        include('../ban_dien_thoai/include/banner__small.php');
    ?>
    
    <div class="container">
        <div class="form-wrap">
            <h1 style="text-align: center; padding-bottom: 20px;">Đăng nhập</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" require name="email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" require name="password">
                </div>
                <br>
                <button type="submit" class="btn btn-danger" name="login" style="width: 100%">Đăng nhập</button>
            </form>
        </div>
    </div>

</body>
</html>