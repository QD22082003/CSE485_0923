<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "22082003");
    //Buoc 2: Thuc hien truy van
    $sql = "DELETE FROM benhnhan WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xử lý kết quả
    $rowCount = $stmt->rowCount();
    if($rowCount>0){
//            echo "Deleted $rowCount row(s).";
        header("Location:http://localhost/OOP/BTTH03/public/#?success=$id");
    }

}catch(PDOException $e){
    echo $e->getMessage();
}

?>