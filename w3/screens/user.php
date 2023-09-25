<?php
session_start();

if(!isset($_SESSION['isLogin'])){
    header("Location: login.php");
}
?>



<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

try{
    //Buoc1
    $conn = new PDO("mysql:host=localhost;dbname=cse","root","22082003");
    //buoc 2: thuc hien truy van
    $n = ($page -1) * 10;
    $sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10 OFFSET $n";
    //$conn-> query ($sql)
    $stmt = $conn->prepare($sql);
    $stmt-> execute();
    //buoc3: Xu li ket qua
    $users = $stmt->fetchAll();

}catch (PDOException $e){
    echo "ERRor: ".$e->getMessage();

}

////B1: Truy cap DB Server
//$conn = mysqli_connect('localhost', 'root', '22082003', 'cse');
//if(!$conn){
//    die("Can not connect");
//}
////B2: Thực hiện truy vấn
//$n = 10 * ($page - 1);
////$sql = "SELECT * FROM user ORDER BY id DESC LIMIT 10 OFFSET $n";
//$sql = "SELECT * FROM user";
//$result = mysqli_query($conn, $sql);
//
////B3:Lấy và xử lý dữ liệu
//$user = mysqli_fetch_all($result);
////echo "<pre>";
////print_r($user);
////echo "</pre>";
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
            <div class="container-fluid">
                <div class="row">
                    <div class="bg-white" style="height: 100px; margin-top: 10px; display: flex; margin-left: 5%;width: 90%; flex-direction: column;border-radius: 10px">
                        <div class="d-flex align-items-center" style="height: 50%; flex: 1; position: relative">
                            <h5 class="mr-3" style="color: #FF6A59;">Filter</h5>
                            <div class="rounded-circle d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; background-color: #FF6A59; position: absolute; right: 5%">
                                <i class="fa-solid fa-chevron-up" style="color: #FFFFFF"></i>
                            </div>
                        </div>
                        <div class="row" style="height: 50%; flex: 1; position: relative; ">

                                <div class="col-md-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Select group">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary btn-width" style="background-color: #FF6A59"><i class="fa-solid fa-magnifying-glass" style="padding: 2px;color: #FFFFFF"></i>Fliter</button>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-secondary btn-width">Clear</button>
                                </div>
                        </div>


                    </div>

                    <div class="bg-white" style="height: 700px; margin-top: 10px;width: 90%; margin-left: 5%;border-radius: 10px">
                        <div class="d-flex align-items-center" style="height: 7%; flex: 1; position: relative">
                            <h5 class="mr-3" style="color: #FF6A59;">User</h5>
                            <div class="row" style="position: absolute; right: 10px; margin-top: 20px">
                                <div class="col-md-6">
                                    <button type="button" class="btn" style="width: 120px;border:solid 1px #FF6A59; color: #FF6A59" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                                </div>
                                <div class="col-md-6 row">
                                    <a href="process_adduser.php">
                                        <button type="button" class="btn" style="width: 120px; background-color: #FF6A59; color: #FFFFFF; margin-left: 5px">Add User</button>
                                    </a>


                                </div>
                            </div>

                        </div>
                        <div class="d-flex row" style="height: 93%; flex: 1; position: relative">
                            <?php
                            if(isset($_GET['success'])){
                                $id = $_GET['success'];
                                echo "<h2 style='color:red'>The user have id: {$id} deleted</h2>";
                            }
                            ?>
                            <table class="table">

                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user){ ?>
                                    <tr>
                                        <th scope="row"><?= $user['0'] ?></th>
                                        <td><?= $user['1']?></td>
                                        <td><?= $user['2']?></td>
                                        <td><?= $user['3']?></td>
                                        <td style="display: flex; justify-content: space-between; height: 100%;padding-top: 20%">
                                            <a><div class="square" style="background-color: greenyellow"><i class="fa-solid fa-shield-halved" style="color: #FFFFFF" ></i></div></a>
                                            <a><div class="square" style="background-color: #FF6A59"><i class="fa-solid fa-pen" style="color: #FFFFFF"></i></div></a>
                                            <a><div class="square" style="background-color: #FF6A59"><i class="fa-solid fa-trash" style="color: #FFFFFF" data-bs-toggle="modal" data-bs-target="#<?= $user['0'] ?>"></i></i></div></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="<?= $user['0'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure detele the user have id: <?= $user[0]; ?>?

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a href="../path/process_user_delete.php?id=<?= $user['0'] ?>" class="btn btn-success">OK</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </tbody>
                            </table>
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="user.php?page1">1</a></li>
                                        <li class="page-item"><a class="page-link" href="user.php?page2">2</a></li>
                                        <li class="page-item"><a class="page-link" href="user.php?page3">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
<!--                                -->

                            

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
