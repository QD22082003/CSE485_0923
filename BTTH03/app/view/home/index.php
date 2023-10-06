<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phòng mạch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Phòng mạch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showPatients()">Danh sách bệnh nhân</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showDoctors()">Danh sách bác sĩ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="patientList" style="display:block;">
    <!-- Hiển thị danh sách sinh viên ở đây -->
    <h3>Quản lí bệnh nhân</h3>
    <a class="btn btn-success" href="<?=DOMAIN.'/app/view/patient/add.php';?>" > Thêm mới</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên bệnh nhân</th>
            <th scope="col">ngày khám</th>
            <th scope="col">triệu chứng</th>
            <th scope="col">Bác sĩ khám</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($patient as $patient){


            ?>
            <tr>
                <th scope="row"><?= $patient->getId();?></th>
                <td><?= $patient->getNamePatient();?></td>
                <td><?= $patient->getDayExamination();?></td>
                <td><?= $patient->getSymptom();?></td>
                <td><?= $patient->getIdDocTor();?></td>
                <td><a href="<?=DOMAIN.'/app/view/patient/edit.php';?>?id=<?= $patient->getId();?>"><i class="bi bi-pencil-fill"></i></a></td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $patient->getId();?>"> <i class="bi bi-trash3"></i></a></td>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $patient->getId();?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa bệnh nhân <?= $patient->getId();?> không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <a href="<?=DOMAIN.'/app/path/process_delete_patient.php';?>?id=<?= $patient->getID(); ?>" class="btn btn-success">OK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

<div id="doctorList" style="display:none;">
    <h3>Quản lí bệnh nhân</h3>
<!--    <a class="btn btn-success" href="--><?//=DOMAIN.'/app/view/doctor/add.php';?><!--" > Thêm mới</a>-->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên bác sĩ</th>
            <th scope="col">chuyên khoa</th>
<!--            <th scope="col">Sửa</th>-->
<!--            <th scope="col">Xóa</th>-->
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($doctor as $doctor){


            ?>
            <tr>
                <th scope="row"><?= $doctor->getId();?></th>
                <td><?= $doctor->getNameDocTor();?></td>
                <td><?= $doctor->getSpecialist();?></td>
                <td><a><i class="bi bi-pencil-fill"></i></a></td>
                <td><a data-bs-toggle="modal" data-bs-target="#exampleModal<?= $doctor->getId();?>"> <i class="bi bi-trash3"></i></a></td>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $doctor->getId();?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+OoR/6EK2n0DleKg/Pd5Dtm5z6OpF5L5ZXs5F5DdmDdObyr" crossorigin="anonymous"></script>

<script>
    function showPatients() {
        document.getElementById("patientList").style.display = "block";
        document.getElementById("doctorList").style.display = "none";
        // Gọi hàm hoặc AJAX để hiển thị danh sách sinh viên ở đây
    }

    function showDoctors() {
        document.getElementById("patientList").style.display = "none";
        document.getElementById("doctorList").style.display = "block";
        // Gọi hàm hoặc AJAX để hiển thị danh sách lớp ở đây
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>