<?php
    require 'config/connectdb.php';


    $login_username = mysqli_real_escape_string($conn,$_POST['username']);
    $login_password = mysqli_real_escape_string($conn,$_POST['password']);

    $salt = 'zxcvbnasdfghjklqwertyiop';  //มันก็จะเอา password ที่ใส่เข้ามามาเข้ารหัสรวมกับตัวนี้
    $hash_login_password= password_hash($login_password.$salt,PASSWORD_DEFAULT);
    
    $sql = "SELECT * FROM member WHERE login_username=? AND login_password=?";
    $stmt = mysqli_prepare($conn,$sql); //sqli_prepare เพื่อป้องกัน sql injection
    print_r(mysqli_stmt_bind_param($stmt,"ss",$login_username,$hash_login_password)); //ss หมายถึง $login_username ตัวที่สองหมายถึง $hash_login_password
    mysqli_execute($stmt);

    $result_user = mysqli_stmt_get_result($stmt);



    // print_r($result_user);
        // if($result_user -> num_rows == 1){
        //     session_start();
        //     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        //     $_SESSION['login_id']=$row_user['login_id'];
        //     header("Location: main.php");
        // }else{
        //     echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        // }

    