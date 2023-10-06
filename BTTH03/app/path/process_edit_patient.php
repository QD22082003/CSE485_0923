<?php
if(isset($_POST['sbmSave'])) {
    $id = $_POST['id'];
    $name = $_POST['NamePatient'];
    $day = $_POST['DayExamination'];
    $sysptom = $_POST['Symptom'];

    $iddoctor = $_POST['idDoctor'];

}

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
    //Buoc 2: Thuc hien truy van

    $sql_update = "UPDATE benhnhan set tenBenhNhan = '$name', ngayKham = '$day', trieuChung = '$sysptom', idBacSi = '$iddoctor'  WHERE id='$id'";
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        header("Location:http://localhost/OOP/BTTH03/public/#?success=updated");
    }


}catch(PDOException $e){
    echo $e->getMessage();
}
?>