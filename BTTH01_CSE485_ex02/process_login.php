<?php
if(isset($_POST['sbmLogin'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "22082003");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM nguoidung WHERE username='$user' OR email = '$user'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU BAM
        if($stmt->rowCount() > 0){
            $user = $stmt->fetch();
            //Lay ra mat khau
//            $pass_hash = $user[3];
            if(password_verify($pass, $user[3])){
                //CAP THE (authentication - Not: authorization)
                session_start();
                $_SESSION['isLogin'] = $user;
                header("Location:user.php");
            }else{
                header("Location:login.php?error=not-matched-password");
            }
        }else{
            header("Location:login.php?error=not-existed");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
}