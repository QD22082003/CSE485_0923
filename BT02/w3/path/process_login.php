<?php
if(isset($_POST['sbmLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=cse", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username = '$user' OR email='$user'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
            //Lay ra mk
            $pass_hard = $user[3];
            if (password_verify($pass, $pass_hard)){
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:http://localhost/w3/screens/user.php");
            }else{
                header("Location:http://localhost/w3/screens/login.php?error=not-matched-password");

            }
        }else{
            header("Location:http://localhost/w3/screens/login.php?error=not-existed");

        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}