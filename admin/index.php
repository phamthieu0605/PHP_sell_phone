<?php
    session_start();
    include('../DB/conn_DB.php');
?>

<?php 
    if(isset($_POST['loginadmin'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // if($username == "" && $password == "") {
        //     echo "<script>alert('Mời bạn đầy đủ thông tin !')</script>";
        // } else {
            $sql_select_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE UserName= '$username' AND PassWord = '$password' LIMIT 1");
            $count = mysqli_num_rows($sql_select_admin);
            $row_login = mysqli_fetch_array($sql_select_admin);
            if($count > 0) {
                $_SESSION['loginadmin'] = $row_login['admin_name'];
                $_SESSION['admin_id'] = $row_login['admin_id'];
                header('Location: dashboard.php');
            } else {
                echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !')</script>";
            }
            
    }
    //}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 align="center" style="padding: 30px 0 ">Login with administrator</h1>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" require>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" require>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="loginadmin">Đăng nhập</button>
        </form>
    </div>
</body>
</html>