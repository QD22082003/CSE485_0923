<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM benhnhan WHERE id='$id'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $sinhVien = $stmt->fetch();
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-9 main">

            <div class="main-content vh-100 p-3">

                <h3 class=" text-center text-uppercase">Edit</h3>
                <form action="../../path/process_edit_patient.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            id bệnh nhân
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="id" id="" class="form-control" value="<?= $sinhVien[0]; ?>" readonly>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Tên bệnh nhân
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="NamePatient" id="" class="form-control" value="<?= $sinhVien[1]; ?>">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            ngày khám
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="DayExamination" id="" class="form-control" value="<?= $sinhVien[2]; ?>">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            triệu chứng
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="Symptom" id="" class="form-control" value="<?= $sinhVien[3]; ?>">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            bác sĩ điều trị
                        </div>
                        <div class="col-md-8">
                            <select name="idDoctor" class="form-control" id="exampleFormControlSelect1">
                                <?php
                                $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
                                $query = "Select * from bacsi";
                                $stmt = $conn->query($query);
                                $doctor = $stmt->fetchAll();
                                foreach ($doctor as $dt){

                                    ?>
                                    <option value="<?= $dt['id']?>"><?=$dt['tenBacSi']?> </option>
                                    <?php
                                }
                                ?>

                            </select>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>