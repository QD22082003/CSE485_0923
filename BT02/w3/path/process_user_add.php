<?php
if(isset($_POST['sbmSave'])){
    $user = $_POST['user'];
    $email = $_POST['mail'];
    $pass1 = $_POST['pass1'];
//    $pass2 = $_POST['pass2'];

//    if($pass1 != $pass2){
//        $error = "Mật khẩu không khớp";
//        header("Location: user_add.php?error=$error");
//    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=cse", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:http://test.vn/w3/screens/process_adduser.php?error=existed");
        }else{
            $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO users (username, email, pass) VALUES ('$user', '$email', '$pass_hash')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:http://test.vn/w3/screens/process_adduser.php?error=added");
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
