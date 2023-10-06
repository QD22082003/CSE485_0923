<?php
if(isset($_POST['sbmSave'])){
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
        $name = $_POST['NamePatient'];
        $day = $_POST['DayExamination'];
        $symptom = $_POST['Symptom'];
        $iddoctor = $_POST['idDoctor'];

        $sql_insert = "INSERT INTO benhnhan (tenBenhNhan, ngayKham, trieuChung, idBacSi) VALUES ('$name', '$day', '$symptom','$iddoctor')";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            header("Location:http://localhost/OOP/BTTH03/app/view/patient/add.php?error=added");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}