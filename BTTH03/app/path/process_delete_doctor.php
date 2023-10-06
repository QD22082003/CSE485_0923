<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

try {
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
    //Buoc 2: Thuc hien truy van

    $sqlPatient = "DELETE FROM benhnhan WHERE idBacSi = $id";
    $stmtPatient = $conn->prepare($sqlPatient);
    $stmtPatient->execute();

    $sqlDoctor = "DELETE FROM bacsi WHERE id = $id";
    $stmtDoctor = $conn->prepare($sqlDoctor);
    $stmtDoctor->execute();

    //Buoc 3: Xử lý kết quả
    $rowCountPatient = $stmtPatient->rowCount();
    $rowCountDocTor = $stmtDoctor->rowCount();
    if ($rowCountDocTor > 0 || $rowCountPatient > 0) {
//            echo "Deleted $rowCount row(s).";
        header("Location:http://localhost/OOP/BTTH03/public/# ?success=$id");
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}

