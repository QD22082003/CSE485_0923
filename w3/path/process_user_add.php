<?php


if(isset($_POST['sbmSave'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $created = $_POST['created'];

//    if($pass1 != $pass2){
//        $error = "Mật khẩu không khớp";
//        header("Location: user_add.php?error=$error");
//    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=cse", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM user WHERE fullname = '$fullname' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("location: http://localhost/w3/screens/user.php?error=existed");
        }else{
            $sql_insert = "INSERT INTO user (fullname, password, email, created) VALUES ('$fullname', '$password', '$email', '$created')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("location: http://localhost/w3/screens/user.php?error=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
//$conn = mysqli_connect('localhost','root', '22082003', 'cse');
//if(!$conn){
//    die("Can not Connect");
//}
//if (isset($_POST['fullname'])&&isset($_POST['password'])
//    &&(isset($_POST['email'])&&isset($_POST['created']))
//
//){
//    $fullname = $_POST['fullname'];
//    $password = $_POST['password'];
//    $email = $_POST['email'];
//    $created = $_POST['created'];
//
//    $sql = "INSERT INTO user (fullname, password, email, created) VALUES ('$fullname', '$password', '$email', '$created')";
//
//    if(mysqli_query($conn, $sql)){
//        header('location: http://localhost/w3/screens/user.php');
//        exit();
//    }else{
//        echo "Error: ".mysqli_error($conn);
//    }
//
//}




// Đóng kết nối
//mysqli_close($conn);
