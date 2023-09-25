
<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

}else{
    $page = 1;
}
$sql = "Select * from users order by created_at Desc LIMIT 10, 20";
?>

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
    <link rel="stylesheet" href="../core/index.css">


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
                <?php
                    include '../path/header.php';
                ?>
                <div class="main-content">
                    <div class="container">
                        <div class="row h-100">
                            <!-- Ô vuông thứ nhất -->
                            <div class="col-md-6">
                                <div class="bg-primary p-3 h-100">
                                    <!-- Nội dung ô vuông thứ nhất -->
                                    <h2>Ô vuông 1</h2>
                                    <p>Nội dung ô vuông thứ nhất</p>
                                </div>
                            </div>

                            <!-- Ô vuông thứ hai chứa biểu đồ -->
                            <div class="col-md-6">
                                <div class="bg-secondary p-3">
                                    <!-- Nội dung ô vuông thứ hai -->
                                    <h2>Ô vuông 2</h2>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script src="../core/menuleft.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>