<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Nhập</title>
    <!-- Sử dụng Bootstrap CSS -->
    <link href="../icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../w3/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../w3/icon/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../w3/icon/node_modules/bootstrap-icons/icons">
</head>
<body style="background-color: #f0f0f0">
<?php
if(isset($_GET['error'])){
    echo "<p style='background-color:orange'>{$_GET['error']}</p>";
}
?>
<div class="container d-flex justify-content-center align-items-center vh-100" style="">

        <div class="col-md-6 vh-100" style="background-color: #FFF0EE">
            <!-- Phần bên trái với hình ảnh -->
            <img src="your-image.jpg" alt="Your Image" class="img-fluid">
        </div>

        <div class="col-md-6 vh-100" style="background-color: #FFFFFF">
            <?php
            if(isset($_GET['error'])){
                echo "<p style='background-color:orange'>{$_GET['error']}</p>";
            }
            ?>
            <form action="../path/process_login.php" method="post">
                <div class="row input-group mb-3">
                    <div class="col-md-4 ">
                        Username or gmail
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="user" id="" class="form-control">
                    </div>
                </div>

                <div class="row input-group mb-3">
                    <div class="col-md-4 ">
                        Password
                    </div>
                    <div class="col-md-8">
                        <input type="password" name="pass" id="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success" name="sbmLogin">Login</button>
                    </div>
                </div>
            </form>
        </div>

</div>
</body>
</html>
