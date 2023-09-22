<?php


if(isset($_GET['id'])){
    $id = $_GET['id'];
}

try{
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=cse", "root", "22082003");
    //Buoc 2: Thuc hien truy van
    $sql = "DELETE FROM user WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xử lý kết quả
    $rowCount = $stmt->rowCount();
    if($rowCount>0){
//            echo "Deleted $rowCount row(s).";
        header("location: http://localhost/w3/screens/user.php?success=$id");
    }

}catch(PDOException $e){
    echo $e->getMessage();
}

//$conn = mysqli_connect('localhost','root', '22082003', 'cse');
//if(!$conn){
//    die("Can not connect");
//}
//if (isset($_POST['id'])) {
//    $idToDelete = $_POST['id'];
//
//    $sql = "DELETE FROM user WHERE id = '$idToDelete'";
//
//    if(mysqli_query($conn, $sql)){
//        header('Location: http://localhost/w3/screens/user.php');
//        exit();
//    }else{
//        echo "Error: " . mysqli_error($conn);
//    }
//}
?>
