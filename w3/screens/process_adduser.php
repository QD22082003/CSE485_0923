<?php
//if(isset($_GET['page'])){
//    $page = $_GET['page'];
//}else{
//    $page = 1;
//}
//
////B1: Truy cap DB Server
//$conn = mysqli_connect('localhost', 'root', '22082003', 'cse');
//if(!$conn){
//    die("Can not connect");
//}
////B2: Thực hiện truy vấn
//$n = 10 * ($page - 1);
//$sql = "SELECT * FROM user ORDER BY id DESC LIMIT 10 OFFSET $n";
//$result = mysqli_query($conn, $sql);
//
////B3:Lấy và xử lý dữ liệu
//$user = mysqli_fetch_all($result);
////echo "<pre>";
////print_r($user);
////echo "</pre>";
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../w3/icon/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../w3/icon/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../w3/icon/node_modules/bootstrap-icons/icons">
    <link rel="stylesheet" href="../core/user.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include '../path/menuleft.php';
        ?>
        <div class="col-md-9 main ">
            <div class="header d-flex align-items-center" id="header">
                <i class="fa-solid fa-bars fa-2x"></i>
                <h1>User</h1>
                <div class="input-group mb-3 align-items-center" >
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><a><i class="fa-solid fa-magnifying-glass"></i></a></button>
                    <input type="text" class="form-control" placeholder="Search here..." aria-label="Example text with button addon" aria-describedby="button-addon1" >
                </div>
            </div>
            <div style="margin-top: 10px">
                <?php
                if(isset($_GET['error'])){
                    echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                }
                ?>
                <h3 class=" text-center text-uppercase">Add a new User</h3>
                <form action="../path/process_user_add.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Username
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="mail" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Password
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="pass1" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Re-type Password
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="pass2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                        </div>
                    </div>
                </form>

            </div>



        </div>

    </div>

</div>

<script src="../core/menuleft.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
