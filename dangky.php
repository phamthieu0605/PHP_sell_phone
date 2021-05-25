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

<?php 
$servername = "localhost";
$username_sql = "root";
$password_sql = "";
$dbname = "db_webshop";
$conn = new mysqli($servername, $username_sql, $password_sql, $dbname);
//check connection 
    if ($conn->connect_errno) {
    die("Connection failed: " .$conn->connect_errno );
    }
    if (isset($_POST['signup'])) {
        //laays thoong tin tuwf cacs from bawngf phuowng thuwcs POST
        $KhachHang_id=$_POST['KhachHang_id'];
        $Email=$_POST['Email'];
        $PassWord=MD5($_POST['PassWord']);
        $FullName=$_POST['FullName'];
        
        //kieemr tra ddieeuf kienej bawt buowcj voiws cacs looix khoong dduowcj bor trongs
        if($Email==""||$PassWord==""||$FullName==""){
        # code...
            echo "<script>alert('Vui lòng nhập đủ thông tin')</script>";
    } else {
        # code...
        $sql="INSERT INTO tbl_khachhang(
        FullName,
        PassWord,
        Email

        ) VALUES (
        '$FullName',
        '$PassWord',
        '$Email'

        )";
        mysqli_query($conn,$sql);
        // echo "<script>alert('chúc mừng bạn đăng kí thành công!!!')</script>" ;
        // // $_SESSION['UserName'] = $UserName;
        header('Location: dangnhap.php');
    }
}


    
 ?>



<body>
    <?php 
        include('../ban_dien_thoai/include/header__wrap.php');
        include('../ban_dien_thoai/include/banner__wrap.php');
        include('../ban_dien_thoai/include/banner__small.php');
    ?>
    
    <div class="container">
        <div class="form-wrap">
            <h1 style="text-align: center; padding-bottom: 20px;">Đăng ký</h1>
            <form action="dangky.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" require name="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" require name="PassWord">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Fullname</label>
                    <input type="text" class="form-control" require name="FullName">
                </div>
                <br>
                <button type="submit" class="btn btn-danger" name="signup" style="width: 100%">Đăng ký</button>
            </form>
        </div>
    </div>

<!-- 
    <form action="dangky.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
                <td colspan="2" style="text-align: center; font-size: 40px;">Đăng ký Khách Hàng</td>
            </tr>

            <tr>
                <td>Full Name</td>
                <td><input type="text" name="FullName"></td>
            </tr>

             <tr>
                <td>Email</td>
                <td><input type="text" name="Email"></td>

            </tr>
            

            <tr>
                <td>Password</td>
                <td><input type="PassWord" name="PassWord"></td>
            </tr>




            


            <tr>
                <td>
                    <input type="submit" name="btn_submit" value="Send">
                </td>
            </tr>

    </table> -->

</body>
</html>