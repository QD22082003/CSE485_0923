<?php
if(isset($_POST['sbmSave'])){
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        
        $sql = "UPDATE theloai SET ten_tloai = '$ten_tloai'
        WHERE ma_tloai = '$ma_tloai'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: category.php?admin=true");
        exit();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    header("location: edit_category.php?admin=true");
    exit();
}
?>