<?php
    require 'config/connectdb.php';

    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    $login_email = $_POST['email'];
    $phone_number = $_POST['phone'];

   
    //เข้ารหัส รหัสผ่าน

    $salt = 'zxcvbnasdfghjklqwertyiop';  //มันก็จะเอา password ที่ใส่เข้ามามาเข้ารหัสรวมกับตัวนี้
    $hash_login_password= password_hash($login_password.$salt,PASSWORD_DEFAULT);

     

    $query = "INSERT INTO member (login_username,login_password,email,phone) VALUES ('$login_username','$hash_login_password','$login_email','$phone_number')";

    $result = mysqli_query($conn,$query);

    if($result) {
        header("Location: index.php");
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_error($conn);
    }

    mysqli_close($conn);